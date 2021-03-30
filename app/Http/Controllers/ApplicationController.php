<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function submit(Request $req){
        $application = new Application();
        $application->name = $req->input('name');
        $application->email = $req->input('email');
        $application->phone = $req->input('phone');

        $application->save();

        return redirect()->route('services')->with('success', 'Мы вам обязательно перезвоним');

    }

    public function ApplicationEdit($id)
    {
        $application = new Application();
        return view('applicationEdit', ['application_data' => $application->find($id)]);
    }

    public function ApplicationUpdateSubmit($id, Request $req){
        $application = Application::find($id);
        $application->name = $req->input('name');
        $application->email = $req->input('email');
        $application->phone = $req->input('phone');

        $application->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function ApplicationDeleteSubmit($id){
        Application::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }
}
