<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    /**
     * Crée une nouvelle instance du Mailable.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Définir l'objet du mail.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouveau message de contact',
        );
    }

    /**
     * Définir la vue / le contenu du mail.
     */
    public function content(): Content
    {
        return new Content(
            // Vue Blade qui contiendra le mail
            view: 'emails.contact',
            // Passer les données à la vue
            with: $this->data
        );
    }

    /**
     * Joindre éventuellement des fichiers, si besoin.
     */
    public function attachments(): array
    {
        return [];
    }
}
