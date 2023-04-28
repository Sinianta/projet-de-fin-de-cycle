<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNewFactureMail extends Mailable
{
    use Queueable, SerializesModels;
    public $reservation;
    public $montant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation, int $montant)
    {
        $this->reservation = $reservation;
        $this->montant = $montant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.send-new-facture-mail')
        ->subject("Facture de la reservation");
    }
}

