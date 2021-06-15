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
        $order->application = $req->input('application');
        $order->surname = $req->input('surname');
        $order->patronymic = $req->input('patronymic');
        $order->employee = $req->input('employee');

        $order->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function OrderDeleteSubmit($id){
        Order::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }

    public function OrderAdd(Request $req)
    {
        $application = Application::all();
        $employee = Employee::all();
        $order = new Order();
        return view('orderAdd', compact('application', 'employee'));
    }

    public function OrderAddSubmit(Request $req){
        $order = new Order();
        $order->application = $req->input('application');
        $order->surname = $req->input('surname');
        $order->patronymic = $req->input('patronymic');
        $order->employee = $req->input('employee');

        $order->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}
