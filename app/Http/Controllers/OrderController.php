<?php

namespace App\Http\Controllers;
use App\Models\Order;
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
        $order = new Order();
        $order->application_id = $req->input('application_id');
        $order->name = $req->input('name');
        $order->surname = $req->input('surname');
        $order->patronymic = $req->input('patronymic');
        $order->service_id = $req->input('service_id');
        $order->employee_id = $req->input('employee_id');

        $order->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}
