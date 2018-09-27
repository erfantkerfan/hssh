<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        $galleries = News::where('files','!=','0')->take(5)->orderBy('created_at', 'desc')->get();
        return view('home')->with(['sliders'=>$sliders,'galleries'=>$galleries]);
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
        return view('about.staff')->with(['sliders'=>$sliders]);
    }

    public function dep()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        $sliders[3]=3;
        $sliders[4]=4;
        return view('about.dep')->with(['sliders'=>$sliders]);
    }

    public function assets()
    {
        $sliders[1]=1;
        $sliders[2]=2;
        $sliders[3]=3;
        return view('about.assets')->with(['sliders'=>$sliders]);
    }

}