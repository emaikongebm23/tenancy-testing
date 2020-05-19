<?php

namespace App\Listeners;

use Tenancy\Affects\Views\Events\ConfigureViews;

class ConfigureTenantViews
{
    public function handle(ConfigureViews $event)
    {
        if($event->event->tenant)
        {
            $event->addPath(resource_path('views/tenant'));
        }
    }
}