<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServiceRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $service;
    public $clientMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $phone, $service, $clientMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->service = $service;
        $this->clientMessage = $clientMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Service Request - Dean Tech',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.service-request',
        );
    }
}
