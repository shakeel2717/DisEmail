<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Livewire\Component;

class Emails extends Component
{

    public $emails = [];
    public $username;
    public $password;
    public $default = 'default';
    public $domains;
    public $domain;
    public $domain_id;
    public $hostname;

    public function mount()
    {
        $this->domains = Domain::where('user_id', auth()->user()->id)->where('status', true)->get();
    }

    public function fetch()
    {
        $this->domain = Domain::find($this->domain_id);
        $this->hostname = '{'.$this->domain->domain . ':993/imap/ssl}INBOX';
        $this->emails = [];
        $this->fetchEmails($this->hostname);
    }



    public function fetchEmails($hostname)
    {
        $default = $this->default . '@' . $this->domain->domain;
        $inbox = imap_open($hostname, $default, $this->password) or die('Cannot connect to cPanel: ' . imap_last_error());
        $emails = imap_search($inbox, 'ALL');
        if ($emails) {
            $data = array_reverse($emails);
            foreach ($data as $email_number) {
                $header = imap_headerinfo($inbox, $email_number);
                if ($header->to[0]->mailbox == $this->username) {
                    $subject = $header->subject;
                    $body = imap_fetchbody($inbox, $email_number, 1);
                    $time = date("Y-m-d H:i:s", $header->udate);
                    $this->emails[] = [
                        'subject' => $subject,
                        'body' => $body,
                        'time' => $time,
                        'to' => $header->to[0]->mailbox . "@" . $header->to[0]->host,
                    ];
                }
            }
        }
        imap_close($inbox);
        cache()->forever('emails', $this->emails);
    }


    public function refresh()
    {
        cache()->forget('emails');
        $this->emails = [];
        $this->fetchEmails($this->hostname);
    }

    public function render()
    {
        return view('livewire.emails');
    }
}
