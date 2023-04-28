<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNewUserMail extends Mailable
{

    use Queueable, SerializesModels;
    public $personnel;
    public $passe;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $personnel , String $passe)
    {
        $this->personnel = $personnel;
        $this->passe = $passe;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.send-new-user-mail')
        ->subject("Vos informations de connexion");
    }
}


