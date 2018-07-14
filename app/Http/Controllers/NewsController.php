<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all()->sortBy('created_at')->first();
        return view('News')->with(['news'=>$news]);
    }
}
