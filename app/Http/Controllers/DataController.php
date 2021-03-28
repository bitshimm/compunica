<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Application;

class AdminController extends Controller
{
    public function Data(){
        return view('admin', ['employee_data'=> Employee::all()], ['application_data'=> Application::all()]);
    }
}