<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function Data(){
        return view('admin', ['employee_data'=> Employee::all()]);
    }
}
