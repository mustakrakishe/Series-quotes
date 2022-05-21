<?php

namespace App\Listeners;

class CreateToken
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
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(\Illuminate\Auth\Events\Registered $event)
    {
        $event->user->createToken('auth');
    }
}
