<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class Item extends Model
{
    use OnTenant;

    protected $fillable = ['name'];
}
