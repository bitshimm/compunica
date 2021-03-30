<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function EmployeeEdit($id)
    {
        $employee = new Employee();
        return view('employeeEdit', ['employee_data' => $employee->find($id)]);
    }

    public function EmployeeUpdateSubmit($id, Request $req){
        $employee = Employee::find($id);
        $employee->name = $req->input('name');
        $employee->surname = $req->input('surname');
        $employee->patronymic = $req->input('patronymic');
        $employee->position = $req->input('position');
        $employee->email = $req->input('email');
        $employee->phone = $req->input('phone');

        $employee->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function EmployeeDeleteSubmit($id){
        Employee::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }

    public function EmployeeAdd(Request $req)
    {
        $employee = new Employee();
        return view('employeeAdd');
    }

    public function EmployeeAddSubmit(Request $req){
        $employee = new Employee();
        $employee->name = $req->input('name');
        $employee->surname = $req->input('surname');
        $employee->patronymic = $req->input('patronymic');
        $employee->position = $req->input('position');
        $employee->email = $req->input('email');
        $employee->phone = $req->input('phone');

        $employee->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}
