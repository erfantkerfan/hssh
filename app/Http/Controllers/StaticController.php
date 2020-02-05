<?php

namespace App\Http\Controllers;

use App\News;
use App\Slider;

class StaticController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $galleries = News::whereBetween('type', array(300, 399))->where('files', '!=', '0')->take(10)->orderBy('created_at', 'desc')->get();
        $news = News::whereBetween('type', array(300, 399))->orderBy('date', 'desc')->take(5)->get();
        return view('home')->with(['sliders' => $sliders, 'galleries' => $galleries, 'news' => $news]);
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function goals()
    {
        $sliders[1] = 1;
        $sliders[2] = 2;
        return view('about.goals')->with(['sliders' => $sliders]);
    }

    public function chart()
    {
        $sliders[1] = 1;
        return view('about.chart')->with(['sliders' => $sliders]);
    }

    public function staff()
    {
        $sliders[1] = 1;
        return view('about.staff')->with(['sliders' => $sliders]);
    }

    public function assets()
    {
        $sliders[1] = 1;
        $sliders[2] = 2;
        $sliders[3] = 3;
        return view('about.assets')->with(['sliders' => $sliders]);
    }

}