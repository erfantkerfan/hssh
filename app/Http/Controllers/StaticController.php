<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        $sliders[1]=1;
        return view('home')->with(['sliders'=>$sliders]);
    }

    public function about()
    {
        return 'about';
    }

    public function contactus()
    {
        return view('contactus');
    }
}
