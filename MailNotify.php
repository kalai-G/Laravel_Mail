<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build()
    {
        return $this->from($this->data['email'], $this->data['name'])
                    ->subject($this->data['subject'])
                    ->view('emails.email-template')
                    ->with('data', $this->data)
                    ->with('message', 'Hi, Welcome you were added');
    }


}
