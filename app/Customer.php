<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant;
use Tenancy\Tenant\Events;
use Illuminate\Foundation\Auth\User;

class Customer extends User implements Tenant
{
    use AllowsTenantIdentification;

    protected $fillable = ['name', 'password', 'email'];

    protected $dispatchesEvents = [
        'created' => Events\Created::class,
        'updated' => Events\Updated::class,
        'deleted' => Events\Deleted::class,
    ];
}
