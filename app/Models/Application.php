<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function orders()
    {
        return $this->hasOne('App\Models\Order');
    }
}
