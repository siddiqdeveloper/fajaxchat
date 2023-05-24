<?php

namespace App\Listeners;

use App\Event\UserDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;
class SendEmail
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
     * @param  \App\Event\UserDeleted  $event
     * @return void
     */
    public function handle(UserDeleted $event)
    {
        Log::info($event->email);
    }
}
