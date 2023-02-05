<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Emails extends Component
{

    public $emails;

    public function mount()
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
                $this->emails[] = [
                    'subject' => $subject,
                    'body' => $body,
                ];
            }
        }
        imap_close($inbox);
        
    }

    public function render()
    {
        return view('livewire.emails');
    }
}
