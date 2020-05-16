<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;

class CreateCustomer {
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event) {
        $event->useConnection('mysql', $event->defaults($event->tenant));
    }
}