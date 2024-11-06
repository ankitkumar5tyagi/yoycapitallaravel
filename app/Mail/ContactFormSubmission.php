<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->from('server@yoycapital.com')
            ->to('mail@yoycapital.com')
            ->to('yoy2187@gmail.com')
            ->subject($this->data['name'])
            ->view('emails.contact')
            ->with('data', $this->data);
    }
}
