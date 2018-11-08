<?php

namespace App\Http\Controllers;

use App\Educational;
use App\Message;
use App\News;
use App\Preregister;
use App\Slider;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing()
    {
        return redirect(route('home'));
    }

    public function panel()
    {
        $news = News::orderBy('date','desc')->paginate(20, ['*'], 'news');
        $educationals = Educational::orderBy('date','desc')->paginate(20, ['*'], 'edu');
        $messages = Message::orderBy('date','desc')->paginate(10, ['*'], 'messages');
        $r10s = Preregister::where('grade','=','دهم')->get();
        $r11s = Preregister::where('grade','=','یازدهم')->get();
        $users = User::get();
        $sliders = Slider::all();
        return view('admin.panel')->with([
            'news'=>$news,'r10s'=>$r10s,'r11s'=>$r11s,'messages'=>$messages,'users'=>$users,'educationals'=>$educationals,
            'sliders'=>$sliders
        ]);
    }
}
