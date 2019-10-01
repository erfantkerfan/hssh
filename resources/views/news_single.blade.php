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
                            {{$news->title}}
                        </span>
                        <span class="label  pull-left" dir="rtl">
                            {{str_after($news->date,' ')}}
                              {{str_replace('-','/',str_before($news->date,' '))}}
                        </span>
                    </div>
                    <div class="panel-body">

                        <div class="tab-content">
                            <div class="text-right" dir="rtl" id="tab1">{!!nl2br(e($news->text))!!}</div>
                        </div>

                        <br>

                        @if($news->files!=0)
                            <div id="myCarousel" data-interval="4000" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < $news->files; $i++)
                                        <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
                                    @endfor
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @for ($i = 1; $i <= $news->files; $i++)
                                        {{--<div class="item {{ $loop->first ? ' active' : '' }}">--}}
                                        <div class="item {{ $i == 1 ? ' active' : '' }}">
                                            <img src="/img/news/{{$news->id}}/{{$i}}.webp" onerror="this.onerror=null;this.src='/img/news/{{$news->id}}/{{$i}}.jpg';" style="width:100%;">
                                        </div>
                                    @endfor
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">قبلی</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">بعدی</span>
                                </a>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection