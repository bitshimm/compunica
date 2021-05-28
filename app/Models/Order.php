<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Emmployee');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
