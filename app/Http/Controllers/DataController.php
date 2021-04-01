<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Order;
use App\Models\Message;

class DataController extends Controller
{
    public function Data()
    {
        $application = Application::all();
        $employee = Employee::all();
        $service = Service::all();
        $message = Message::all();
        $order = Order::all();
       
        return view(
            'layouts/admin',
            compact('application','employee','service','order','message'));
    }
}
