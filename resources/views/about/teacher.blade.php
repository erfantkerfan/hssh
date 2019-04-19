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
                        <div class="tab-content row" dir="rtl">
                            <h4 class="col-md-8 text-center">
                                <span style="color: #6A5ACD;font-size: xx-large">
                                    {{$teacher->name}}
                                </span>
                                <br>

                                @foreach(['سمت در دبیرستان:'=>'position','سابقه آموزشی:'=>'teaching','سابقه اجرایی:'=>'legwork'] as $key => $value)
                                    @if(($teacher->$value)!=null)
                                        <br>
                                        <br>
                                        <span style="color: #337AB7">
                                        {{$key}}
                                        </span>
                                        <br>
                                        <span style="line-height: 140%">
                                            {!! nl2br(e($teacher->$value)) !!}
                                        </span>
                                    @endif
                                @endforeach
                            </h4>
                            <img class="col-md-4" src="{{asset('/img/teachers/'.$teacher->id.'.jpg')}}" onerror="this.src='{{asset('/img/teachers/default.png')}}'"/>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
