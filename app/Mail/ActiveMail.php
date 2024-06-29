<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ActiveMail extends Mailable
{
    private Array $mail;
    use Queueable, SerializesModels;
    public function __construct(Array $mail)
    {
        $this->mail = $mail;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mail['subject'],
            from: new Address(
                $this->mail['email'],
                $this->mail['name']
            ),
        );
    }

    public function content(): Content
    {
        return new Content(
            html: "mail.mail",
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
