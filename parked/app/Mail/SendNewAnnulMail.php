<?php

namespace App\Mail;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNewAnnulMail extends Mailable
{
    use Queueable, SerializesModels;
    public $reservation;
    public $personnel;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation, User $personnel)
    {
        $this->reservation = $reservation;
        $this->personnel = $personnel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.send-new-annul-mail')
        ->subject("Une nouvellle demande d'annulation");
    }
}

