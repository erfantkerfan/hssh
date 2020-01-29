<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

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
            'file' => 'required|image|mimes:jpeg',
        ]);

        $slider = new Slider(array(
            'name' => $request['name'],
            'body' => $request['body'],
            'head' => $request['head'],
        ));

        $slider->save();

        $file_name = $slider->id . '.jpg';
        $request->file('file')->move(public_path('img/slider/'), $file_name);
        try {
            $command = "cwebp -quiet -mt -m 6 -q 80 -sharp_yuv -alpha_filter best -pass 10 -segments 4 -af ".public_path('img/slider/').$file_name. " -o ".public_path('img/slider/').$slider->id.".webp";
            $process = new Process($command);
            $process->run();
        } finally {
            $x = "Ok";
        }

        return redirect(route('panel'));
    }
}
