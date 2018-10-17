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
                        <span dir="rtl">
                            {{$educational->title}}
                        </span>
                        <span class="badge badge-pill pull-left" dir="rtl">
                            {{str_after($educational->date,' ')}}
                              {{str_replace('-','/',str_before($educational->date,' '))}}
                        </span>
                    </div>
                    <div class="panel-body">

                        <div class="tab-content">
                            <div class="text-right" dir="rtl" id="tab1">{!!nl2br(e($educational->text))!!}</div>
                        </div>

                        <br>

                        @if($educational->file!=null)
                            <a href="{{ '/edu/'.$educational->id.'.'.$educational->file }}">
                                <button type="button" class="btn btn-success">
                                    دریافت فایل
                                </button>
                            </a>
                        @else
                            <button type="button" class="btn btn-warning">
                                بدون فایل
                            </button>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection