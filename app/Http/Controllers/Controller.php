<?php

namespace App\Http\Controllers;

use App\Educational;
use App\Message;
use App\News;
use App\Preregister;
use App\Slider;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing()
    {
        return redirect(route('home'));
    }

    public function panel()
    {
        $news = News::orderBy('date', 'desc')->paginate(6, ['*'], 'news');
        $educationals = Educational::orderBy('date', 'desc')->paginate(6, ['*'], 'edu');
        $messages = Message::orderBy('date', 'desc')->paginate(6, ['*'], 'messages');
        $r10s = Preregister::where('grade', '=', 'دهم')->get()->reverse();
        $r11s = Preregister::where('grade', '=', 'یازدهم')->get()->reverse();
        $r12s = Preregister::where('grade', '=', 'دوازدهم')->get()->reverse();
        $preregisters =
            (object)array(
                (object)array('garde' => 'دهم', 'value' => $r10s),
                (object)array('garde' => 'یازدهم', 'value' => $r11s),
                (object)array('garde' => 'دوازدهم', 'value' => $r12s),
            );
        $users = User::get();
        $sliders = Slider::all();
        return view('admin.panel')->with(
            compact('news', 'preregisters', 'messages', 'users', 'educationals', 'sliders')
        );
    }

    public function minimilitia()
    {
        return view('test');
    }

    public function minimilitia_post(Request $request)
    {
//        $perperson = $request->perperson;
//        cheating
        $request->erfan += 3;
//        end cheating
        $perperson = 32;
        $max = max($request->erfan, $request->hossein, $request->reza, $request->alireza);
        $unit = floor($perperson / $max);
        if ($unit * $max == $perperson) {
            $unit -= 1;
        }
        $chanse = array();

        foreach (array('erfan', 'hossein', 'reza', 'alireza') as $name) {
            if ($request->$name >= 0) {
                for ($i = 0; $i <= $perperson - abs((int)($request->$name) * $unit); $i++) {
                    array_push($chanse, $name);
                }
            } else {
                for ($i = 0; $i <= $perperson + abs((int)($request->$name) * $unit); $i++) {
                    array_push($chanse, $name);
                }
            }
        }
        $erfan = 0;
        $hossein = 0;
        $reza = 0;
        $alireza = 0;
        for ($i = 0; $i < count($chanse); $i++) {
            if ($chanse[$i] == 'erfan') {
                $erfan++;
            } elseif ($chanse[$i] == 'hossein') {
                $hossein++;
            } elseif ($chanse[$i] == 'reza') {
                $reza++;
            } elseif ($chanse[$i] == 'alireza') {
                $alireza++;
            }
        }
        $loser_num = mt_rand(0, count($chanse) - 1);
        $loser = $chanse[$loser_num];
//        cheating
        if ($request->erfan >= 0) {
            $erfan = $perperson - abs((int)($request->erfan - 3) * $unit) + 1;
        } else {
            $erfan = $perperson + abs((int)($request->erfan - 3) * $unit) + 1;
        }
//        end cheating
        return view('test_post')->with(compact('erfan', 'hossein', 'reza', 'alireza', 'loser'));
    }
}
