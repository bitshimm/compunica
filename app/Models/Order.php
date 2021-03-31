<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function application()
    {
        return $this->belongsTo('App\Models\Application', 'application_id');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Emmployee', 'employee_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }
}
