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
    
    public function contactus()
    {
        return view('contactus');
    }

    public function goals()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        return view('about.goals')->with(['sliders'=>$sliders]);
    }

    public function chart()
    {
        $sliders[1]=1;
        return view('about.chart')->with(['sliders'=>$sliders]);
    }

    public function staff()
    {
        $sliders[1]=1;
//        return view('about.staff')->with(['sliders'=>$sliders]);
        return view('errors.SinglePage503');
    }

    public function dep()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        $sliders[3]=3;
        $sliders[4]=4;
//        return view('about.dep')->with(['sliders'=>$sliders]);
        return view('errors.SinglePage503');
    }

    public function assets()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        $sliders[3]=3;
        return view('about.assets')->with(['sliders'=>$sliders]);
    }

}

