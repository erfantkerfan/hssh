<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::all()->reverse()->chunk(3);
        $show = $request->get('show') ? $request->get('show') : 3;
        return view('videos',compact('videos','show'));
    }
}
