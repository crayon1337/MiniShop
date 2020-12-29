<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\RegisteredEmail;

class UserRegistered implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $userEmail;
    private $userName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $username)
    {
        $this->userEmail = $email;
        $this->userName = $username;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->userEmail)->send(new RegisteredEmail($this->userName));
    }
}
