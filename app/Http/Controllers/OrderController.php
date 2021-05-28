<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Application;
use App\Models\Service;
use App\Models\Employee;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function OrderEdit($id)
    {
        $order = new Order();
        return view('orderEdit', ['order_data' => $order->find($id)]);
    }

    public function OrderUpdateSubmit($id, Request $req){
        $order = Order::find($id);
        $order->application_id = $req->input('application_id');
        $order->name = $req->input('name');
        $order->surname = $req->input('surname');
        $order->patronymic = $req->input('patronymic');
        $order->service_id = $req->input('service_id');
        $order->employee_id = $req->input('employee_id');

        $order->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function OrderDeleteSubmit($id){
        Order::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }

    public function OrderAdd(Request $req)
    {
        $order = new Order();
        return view('orderAdd');
    }

    public function OrderAddSubmit(Request $req){
        $service = Service::all();
        $employee = Employee::all();
        $application = Application::all();
        $order = new Order();
        $order->name = $req->input('name');
        $order->surname = $req->input('surname');
        $order->patronymic = $req->input('patronymic');
        $application->application_id = $req->input('application_id');
        $application->application_id = $req->input('application_name');
        $service->service_id = $req->input('service_name');
        $employee->employee_id = $req->input('employee_name');

        $order->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}
