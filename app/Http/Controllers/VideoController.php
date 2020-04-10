<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request, $type)
    {
        $videos = Video::where('type',$type)->get()->reverse()->chunk(3);
        $show = $request->get('show') ? $request->get('show') : 2;
        return view('videos', compact('videos', 'show'));
    }
    public function form()
    {
        return view('admin.video');
    }

    public function delete($id)
    {
        $video = Video::FindOrFail($id);
        $video->delete();
        $video->save();
        return back();
    }

    public function create(Request $request)
    {
//        dd($request);
        $this->Validate($request, [
            'title' => 'required|string',
            'file' => 'required|string',
            'type' => 'required|string',
        ]);

        $video = new Video(array(
            'title' => $request->title,
            'file' => $request->file,
            'type' => $request->type,
        ));
        $video->save();

        return redirect(route('home'));
    }
}
