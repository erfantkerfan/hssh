@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <br>
                <br>
                <div class="panel panel-warning">
                    <div class="panel-heading text-right">
                        {{$news->title}}
                        <span class="badge pull-left" dir="rtl">
                            {{str_after($news->date,' ')}}
                              {{str_replace('-','/',str_before($news->date,' '))}}
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="text-right" id="tab1">{{$news->text}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection