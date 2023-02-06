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
    public $fullEmail;
    public $emailShow = false;
    public $searchArea = true;

    public function mount()
    {
        $this->domains = Domain::where('user_id', auth()->user()->id)->where('status', true)->get();
    }

    public function fetch()
    {
        $this->emailShow = true;
        // getting this user Domain
        $this->domain = Domain::where('user_id', auth()->user()->id)->first();
        $this->emails = [];
        $this->fetchEmails();
    }



    public function fetchEmails()
    {
        $hostname = '{' . $this->domain->protocol . $this->domain->domain . ':' . $this->domain->port . '/imap/ssl}INBOX';
        $default = $this->domain->default . '@' . $this->domain->domain;
        $this->fullEmail = $this->username;
        $username = explode("@", $this->username)[0];
        $inbox = imap_open($hostname, $default, $this->domain->password) or die('Cannot connect to cPanel: ' . imap_last_error());
        $emails = imap_search($inbox, 'ALL');
        if ($emails) {
            $data = array_reverse($emails);
            foreach ($data as $email_number) {
                $header = imap_headerinfo($inbox, $email_number);
                if ($header->to[0]->mailbox == $username) {
                    $subject = $header->subject;
                    $body = imap_fetchbody($inbox, $email_number, 1);
                    $time = date("Y-m-d H:i:s", $header->udate);
                    $this->emails[] = [
                        'subject' => $subject,
                        'body' => $body,
                        'time' => $time,
                        'from' => $header->from[0]->mailbox . "@" . $header->from[0]->host,
                    ];
                }
            }
        }
        imap_close($inbox);
        $this->searchArea = false;
    }


    public function refresh()
    {
        $this->emails = [];
        $this->fetchEmails();
    }

    public function render()
    {
        return view('livewire.emails');
    }
}
