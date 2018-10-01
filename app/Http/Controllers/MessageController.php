<?php

namespace App\Http\Controllers;

use App\Message;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function form()
    {
        return view('message_form');
    }

    public function create(Request $request)
    {
        $this->Validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'text' => 'required|string',
        ]);

        $message = new Message(array(
            'name' => $request['name'],
            'email' => $request['email'],
            'text' => $request['text'],
            'IP' => $request->getClientIp(),
            'date' => Verta::now(),
        ));

        $message->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $message = Message::FindOrFail($id);
        $message->delete();
        $message->save();
        return back();
    }

    public function index()
    {
        $messages = Message::orderBy('date','desc')->paginate(20);
        return view('admin.message')->with(['messages'=>$messages]);
    }
}
