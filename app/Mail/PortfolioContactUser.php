<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PortfolioContactUser extends Mailable
{
    use Queueable, SerializesModels;


    protected $user;

    /**
     * Create a new message instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('assets.mail.portfolio.contact-user')
                    ->replyTo($this->user['email'])
                    ->with(['user' => $this->user]);
    }
}
