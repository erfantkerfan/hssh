<?php

namespace App\Http\Controllers;

use App\Message;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $alert = 'پیام شما با موفقیت ثبت شد. در صورت نیاز، پاسخ به ایمیل شما ارسال خواهد شد.';
        Session::flash('alert', (string)$alert);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $message = Message::FindOrFail($id);
        $message->delete();
        $message->save();
        return back();
    }
}
