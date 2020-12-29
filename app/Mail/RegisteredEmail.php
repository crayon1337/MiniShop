<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class RegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        $this->userName = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.register', ['username' => $this->userName]);
    }
}
