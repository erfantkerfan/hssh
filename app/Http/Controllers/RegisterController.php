<?php

namespace App\Http\Controllers;

use App\Preregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
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
            'district' => 'required|string',
            'father_mobile' => 'required|min:11|max:11',
            'mother_mobile' => 'required|min:11|max:11',
            'school' => 'required|string',
            'filler' => 'required|string',
            'average' => 'required|string',
            'in_touch' => 'required|string',
        ]);
        $check = Preregister::where('phone','=',$request->phone)->where('father_mobile','=',$request->father_mobile)
        ->where('mother_mobile','=',$request->mother_mobile)->where('f_name','=',$request->f_name)->get();
        if(count($check)>0){
            $alert = 'ثبت نام اولیه'.
                ' '. $request->f_name. ' '. $request->l_name. ' '.
                'قبلا انجام شده است. لطفا از ثبت نام مجدد خودداری کنید. در صورت مشکل از بخش تماس با ما پیام ارسال بفرمایید.';
            Session::flash('alert', (string)$alert);
            return redirect()->route('home');
        }

        $preregister = new Preregister($request->all());
        $preregister->save();

        $alert = 'ثبت نام اولیه'.
            ' '. $request->f_name. ' '. $request->l_name. ' '.
         'با موفقیت انجام شد. برای تعیین زمان آزمون ورودی و مراحل بعدی ثبت نام از مدرسه با شما تماس گرفته خواهد شد.';
        Session::flash('alert', (string)$alert);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $register = Preregister::FindOrFail($id);
        $register->delete();
        $register->save();
        return back();
    }
}
