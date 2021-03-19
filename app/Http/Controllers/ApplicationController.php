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
}
