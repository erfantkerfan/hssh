@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        کادر آموزشی
                    </div>
                    <div class="panel-body">
                        <div class="tab-content row">
                            @foreach($teachers as $teacher)
                                <div class="text-center col-md-3">
                                    <a href="{{route('teacher',['teacher'=>$teacher->id])}}">
                                        <img class="col-md-12" src="{{asset('/img/teachers/'.$teacher->id.'.jpg')}}" onerror="this.src='{{asset('/img/teachers/default.png')}}'"/>
                                    </a>
                                    <h4>
                                        {{$teacher->name}}
                                    </h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
