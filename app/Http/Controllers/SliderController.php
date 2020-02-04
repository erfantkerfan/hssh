<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function show_form()
    {
        return view('admin.slider');
    }

    public function delete(Request $request)
    {
        $slider = Slider::FindOrFail($request->id);
        $file_path = public_path('img/slider/') . $slider->id . '.jpg';
        @unlink($file_path);
        $slider->delete();
        return back();
    }

    public function create(Request $request)
    {
        $this->Validate($request, [
            'name' => 'required|string',
            'body' => 'nullable|string',
            'head' => 'nullable|string',
            'link' => 'nullable|string',
            'file' => 'required|image|mimes:jpeg',
        ]);

        $slider = new Slider(array(
            'name' => $request['name'],
            'body' => $request['body'],
            'head' => $request['head'],
            'link' => $request['link'],
        ));

        $slider->save();

        $file_name = $slider->id . '.jpg';
        $request->file('file')->move(public_path('img/slider/'), $file_name);
//        cwebp(public_path('img/slider/').$file_name,public_path('img/slider/').$slider->id);

        return redirect(route('panel'));
    }
}
