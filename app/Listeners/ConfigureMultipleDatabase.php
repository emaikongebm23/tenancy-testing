<?php

namespace App\Listeners;

use Tenancy\Hooks\Database\Events\Drivers\Configuring;

class ConfigureMultipleDatabase
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Configuring $event)
    {
        dd('test');
        $event->useConnection('mysql', $event->defaults($event->tenant));
    }
}
