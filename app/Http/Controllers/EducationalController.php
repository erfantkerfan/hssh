<?php

namespace App\Http\Controllers;

use App\Educational;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class EducationalController extends Controller
{
    public function category($type)
    {
        $educationals = Educational::where('type', '=', $type)->orderBy('date', 'desc')->paginate(20);
        $title = 'لیست مطالب';
        return view('educationals')->with(['title' => $title, 'educationals' => $educationals]);
    }

    public function single($type, $id)
    {
        $educational = Educational::FindOrFail($id);
        return view('educational_single')->with(['educational' => $educational]);
    }

    public function form()
    {
        return view('admin.educatinal');
    }

    public function delete($id)
    {
        $educatinal = Educational::FindOrFail($id);
        $file_path = public_path('edu/') . $educatinal->id . '.' . $educatinal->file;
        @unlink($file_path);
        $educatinal->delete();
        $educatinal->save();
        return back();
    }

    public function create(Request $request)
    {
        $this->Validate($request, [
            'title' => 'required|string',
            'text' => 'nullable|string',
            'type' => 'required|string',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file')->getClientOriginalExtension();
        } else {
            $file = null;
        }

        $educatinal = new Educational(array(
            'type' => $request->type,
            'title' => $request->title,
            'text' => $request->text,
            'file' => $file,
            'date' => Verta::now(),
        ));
        $educatinal->save();

        $file_name = $educatinal->id . '.' . $educatinal->file;
        if ($request->hasFile('file')) {
            $request->file('file')->move(public_path('edu/'), $file_name);
        }
        return redirect(route('home'));
    }
}
