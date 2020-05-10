@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div id="myCarousel" data-interval="3000" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($sliders as $slider)
                    <li data-target="#myCarousel" data-slide-to="{{$slider}}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="item {{ $loop->first ? ' active' : '' }}">
                        <img loading="lazy" src="/img/slider/about/assets/{{$slider}}.webp" style="width:100%;">
                    </div>
                @endforeach
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
    </div>
@endsection
