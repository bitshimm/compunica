<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Application;


class DataController extends Controller
{
    public function Data()
    {
        return view(
            'layouts/admin',
            ['employee_data' => Employee::all()],
            ['application_data' => Application::all()]
        );
    }
}
