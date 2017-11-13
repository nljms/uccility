<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

class ActivationComplete extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $confirmation_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $confirmation_code)
    {
        $this->data = $data;
        $this->confirmation_code = $confirmation_code;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activation-complete-mail');
    }
}
