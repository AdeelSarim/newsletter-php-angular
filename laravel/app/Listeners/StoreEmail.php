<?php

namespace App\Listeners;

use App\Event\SendEmail;
use App\Models\UserEmail;
use App\Mail\SendNewsletterEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Event\SendEmail  $event
     * @return void
     */
    public function handle(SendEmail $event)
    {
        $email = $event->email;
        $saveHistory = UserEmail::create(['email' => $email]);
        \Mail::to($email)->send(new SendNewsletterEmail());
        return $saveHistory;
    }
}


