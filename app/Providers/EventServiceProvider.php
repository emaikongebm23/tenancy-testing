<?php

namespace App\Providers;

use App\Listeners\ConfigureMultipleDatabase;
use App\Listeners\ConfigureTenantConnection;
use App\Listeners\CreateCustomer;
use App\Listeners\ResolveTenantConnection;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Tenancy\Affects\Connections\Events\Drivers\Configuring as ConfiguringConnection;
use Tenancy\Affects\Connections\Events\Resolving;
use Tenancy\Hooks\Database\Events\Drivers\Configuring as ConfiguringDatabase;
use Tenancy\Hooks\Migration\Events\ConfigureMigrations;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ConfiguringDatabase::class => [
            CreateCustomer::class,
            ConfigureMultipleDatabase::class
        ],
        Resolving::class => [
            ResolveTenantConnection::class,
        ],
        ConfiguringConnection::class => [
            ConfigureTenantConnection::class,
        ],
        ConfigureMigrations::class => [
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
