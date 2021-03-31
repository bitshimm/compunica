<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'service_id');
    }
}