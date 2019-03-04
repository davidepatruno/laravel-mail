<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lead;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;
    /**
     * Qui inseiriamo il $lead preso dagli input inseriti dall'utente nel form
     *
     * @return void
    */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.newmail');
    }
}
