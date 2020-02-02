<?php

namespace App\Http\Controllers;

use App\News;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function category($type)
    {
        $news = News::where('type', '=', $type)->orderBy('date', 'desc')->paginate(20);
        $title = 'لیست مطالب';
        return view('news')->with(['title' => $title, 'news' => $news]);
    }

    public function single($type, $id)
    {
        $news = News::FindOrFail($id);
        return view('news_single')->with(['news' => $news]);
    }

    public function delete($id)
    {
        $news = News::FindOrFail($id);
        $news->delete();
        $news->save();
        $dirname = public_path('img/news/' . $news->id . '/');
        try {
            array_map('unlink', glob("$dirname/*.*"));
            rmdir($dirname);
        } finally {
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
            'type' => 'string',
            'img[]' => 'image|mimes:jpg',
        ]);

        if ($request->hasFile('img')) {
            $count = count($_FILES['img']['tmp_name']);
        } else {
            $count = 0;
        }

        $news = new News(array(
            'title' => $request['title'],
            'text' => $request['text'],
            'type' => $request['type'],
            'date' => Verta::now(),
            'files' => $count,
        ));
        $news->save();

        if ($count != 0) {
            $files = $request->file('img');

            $i = 0;
            foreach ($files as $file) {
                $i++;
                $file->move(public_path('img/news/' . $news->id . '/'), $i . '.jpg');
                cwebp(public_path('img/news/' . $news->id . '/').$i.'.jpg',public_path('img/news/' . $news->id . '/').$i);
            }
        }
        return redirect('/');

    }
}
