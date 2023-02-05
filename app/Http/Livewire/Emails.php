<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Emails extends Component
{

    public $emails;

    public function mount()
    {
        $this->fetchEmails();
    }

    public function fetchEmails()
    {
        $hostname = '{mail.happyhours.ae:993/imap/ssl}INBOX';
        $username = 'usmankhan@happyhours.ae';
        $password = 'happyhours@UAE';
        $inbox = imap_open($hostname, $username, $password) or die('Cannot connect to cPanel: ' . imap_last_error());
        $emails = imap_search($inbox, 'ALL');
        if ($emails) {
            $data = array_reverse($emails);
            foreach ($data as $email_number) {
                $header = imap_headerinfo($inbox, $email_number);
                $subject = $header->subject;
                $body = imap_fetchbody($inbox, $email_number, 1);
                $time = date("Y-m-d H:i:s", $header->udate);
                $this->emails[] = [
                    'subject' => $subject,
                    'body' => $body,
                    'time' => $time,
                ];
            }
        }
        imap_close($inbox);
        cache()->forever('emails', $this->emails);
    }


    public function refresh()
    {
        cache()->forget('emails');
        $this->emails = [];
        $this->fetchEmails();
    }

    public function render()
    {
        $emails = cache()->get('emails');
        if (!$emails) {
            $this->fetchEmails();
            $emails = $this->emails;
        }
        return view('livewire.emails', ['emails' => $emails]);
    }
}
