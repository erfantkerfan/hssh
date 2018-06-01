<?php

namespace App\Http\Controllers;

use App\Preregister;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function qwertyuiop()
    {
        return view('qwertyuiop');
    }

    public function post_qwertyuiop(Request $request)
    {
        if($request->password=='vahidkebriaee') {
            $r10s = Preregister::where('grade','=','دهم')->get();
            $r11s = Preregister::where('grade','=','یازدهم')->get();
            return view('post_qwertyuiop')->with(['r10s' => $r10s,'r11s'=>$r11s]);
        }
        else {
            return redirect('/qwertyuiop');
        }
    }

    public function form()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->Validate($request, [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'grade' => 'required|string',
            'field' => 'required|string',
            'phone' => 'required|min:8|max:8',
            'mobile' => 'required|min:11|max:11',
        ]);

        Preregister::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'grade' => $request->grade,
            'field' => $request->field,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
        ]);

        return redirect(route('home'));
    }
}