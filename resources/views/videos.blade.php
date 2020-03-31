@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <br>
            <br>
            <br>
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    فایل های ویدئویی
                </div>
                <div class="panel-body">
                    @foreach($videos as $chunk)
                        <div class="row">
                            @foreach($chunk as $video)
                                <div class="col-md-4 mx-auto pull-right">
                                    <div class="text-center">
                                        {{$video->title}}
                                    </div>
                                    <video controls width="100%" height="100%" preload={{($loop->parent->iteration<=$show) ? "metadata" : "none"}}>
                                        <source src="{{'/video/'.$video->file}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                        مرورگر شما این ویدئو را پشتیبانی نمیکند.
                                    </video>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection