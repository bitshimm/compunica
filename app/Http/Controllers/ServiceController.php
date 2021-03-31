<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function ServiceEdit($id)
    {
        $service = new Service();
        return view('serviceEdit', ['service_data' => $service->find($id)]);
    }

    public function ServiceUpdateSubmit($id, Request $req){
        $service = Service::find($id);
        $service->name = $req->input('name');
        $service->cost = $req->input('cost');
        $service->description = $req->input('description');

        $service->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function ServiceDeleteSubmit($id){
        Service::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }

    public function ServiceAdd(Request $req)
    {
        $service = new Service();
        return view('serviceAdd');
    }

    public function ServiceAddSubmit(Request $req){
        $service = new Service();
        $service->name = $req->input('name');
        $service->cost = $req->input('cost');
        $service->description = $req->input('description');

        $service->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}