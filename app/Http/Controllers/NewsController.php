<?php

namespace App\Http\Controllers;

use App\News;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index10()
    {
        $news = News::where('grade_id','=','10')->orwhere('grade_id','=',null)->orderBy('date','desc')->paginate(20);
        $grade = 'دهم';
        return view('news')->with(['news'=>$news,'grade'=>$grade]);
    }

    public function index11()
    {
        $news = News::where('grade_id','=','11')->orwhere('grade_id','=',null)->orderBy('date','desc')->paginate(20);
        $grade = 'یازدهم';
        return view('news')->with(['news'=>$news,'grade'=>$grade]);
    }

    public function single($id)
    {
        $news = News::FindOrFail($id);
        return view('news_single')->with(['news'=>$news]);
    }

    public function delete($id)
    {
        $news = News::FindOrFail($id);
        $news->delete();
        $news->save();
        $dirname = public_path('img/news/'.$news->id.'/');
        try {
            array_map('unlink', glob("$dirname/*.*"));
            rmdir($dirname);
        }
        finally {
            return back();
        }
    }

    public function form()
    {
        return view('admin.news');
    }

    public function create(Request $request)
    {
        $this->Validate($request, [
            'title' => 'required|string',
            'text' => 'nullable|string',
            'grade_id' => 'nullable|string',
            'img[]' => 'image|mimes:jpg',
        ]);

        if ($request->hasFile('img')) {
            $count = count($_FILES['img']['tmp_name']);
        }else{
            $count = 0;
        }

        $news = new News(array(
            'title' => $request['title'],
            'text' => $request['text'],
            'grade_id' => $request['grade_id'],
            'date' => Verta::now(),
            'files' => $count,
        ));

        $news->save();

        if($count!=0)
        {
            $files = $request->file('img');

            $i =0;
            foreach ($files as $file) {
                $i++;
                $file->move(public_path('img/news/'.$news->id.'/'), $i.'.jpg');
            }
        }

        if ($news->grade_id==10){
            return redirect('news10');
        }else{
            return redirect('news11');
        }

    }
}
