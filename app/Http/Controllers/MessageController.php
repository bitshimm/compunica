<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function MessageEdit($id)
    {
        $message = new Message();
        return view('messageEdit', ['message_data' => $message->find($id)]);
    }

    public function MessageUpdateSubmit($id, Request $req){
        $message = Message::find($id);
        $message->name = $req->input('name');
        $message->company = $req->input('company');
        $message->email = $req->input('email');
        $message->phone = $req->input('phone');
        $message->comment = $req->input('comment');

        $message->save();

        return redirect()->route('admin-data', $id)->with('success', 'Запись изменена');

    }
    public function MessageDeleteSubmit($id){
        Message::find($id)->delete();
        return redirect()->route('admin-data')->with('success', 'Запись удалена');
    }

    public function MessageAdd(Request $req)
    {
        $message = new Message();
        return view('messageAdd');
    }

    public function MessageAddSubmit(Request $req){
        $message = new Message();
        $message->name = $req->input('name');
        $message->company = $req->input('company');
        $message->email = $req->input('email');
        $message->phone = $req->input('phone');
        $message->comment = $req->input('comment');

        $message->save();

        return redirect()->route('admin-data')->with('success', 'Запись добавлена');

    }
}
