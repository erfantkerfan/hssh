@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="col-md-2">

            {{-- KARSANJ --}}
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                    ورود به سامانه کارسنج
                </div>

                <div class="panel-body text-center">
                    <form class="form" method="POST" action="https://www.karsanj.net/login.php">

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="control-label text-center">نام کاربری</label>
                            <input id="username" type="text" class="form-control text-center" name="username" required
                                   autofocus value="">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">گذرواژه</label>
                            <input id="password" type="password" class="form-control text-center" name="password"
                                   required autofocus autocomplete="off">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input id="salTahsili" class="hidden" name="x_year" value="1398">

                        <input class="hidden" name="submit" value="ورود به سامانه">

                        <div class="form-group">
                            <div>
                                <button name="login" type="submit" class="btn btn-primary" value=" ورود به سامانه">
                                    ورود
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

            {{-- PEYVAND --}}
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    پیوندهای مفید
                </div>

                <br>

                <a href="https://khamenei.ir">
                    <img class="col-md-12" loading="lazy" alt="khamenei.ir" src="/img/links/khamenei.webp">
                </a>
                <br>
                <br>
                <br>

                <a href="http://nojavan.khamenei.ir">
                    <img class="col-md-12" loading="lazy" alt="nojavan.khamenei.ir" src="/img/links/nojavan.webp">
                </a>
                <br>
                <br>
                <br>

                <a href="http://beest.ir">
                    <img class="col-md-12" loading="lazy" alt="beest.ir" src="/img/links/basij.webp">
                </a>
                <br>
                <br>
                <br>


                <a href="http://ayandehsazan.ir">
                    <img class="col-md-12" loading="lazy" alt="ayandehsazan.ir" src="/img/links/ayandehsazan.webp">
                </a>
                <br>
                <br>
                <br>

                <a href="https://monta.ir">
                    <img class="col-md-12" loading="lazy" alt="monta.ir" src="/img/links/monta.webp">
                </a>
                <br>
                <br>
                <br>

                <div class="panel-body text-center row">

                </div>

            </div>

        </div>

        {{-- BANNER --}}
        <div class="col-md-7">
            <div id="myCarousel2" data-interval="4000" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($galleries as $gallery)
                        <li data-target="#myCarousel2" data-slide-to="{{$gallery->id}}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($galleries as $gallery)
                        <div class="item {{ $loop->first ? ' active' : '' }}">
                            <a href="{{route('news_single',['type'=>$gallery->type,'id'=>$gallery->id])}}">
                                <img loading="lazy" src="/img/news/{{$gallery->id}}/1.webp" style="width:100%;">
                                <div class="carousel-caption d-md-block">
                                    <h5 style="mix-blend-mode: difference">{{$gallery->title}}</h5>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">قبلی</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">بعدی</span>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            {{-- NEWS --}}
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    آخرین اخبار دبیرستان
                    <span class="glyphicon glyphicon-th-list" style="color: crimson" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        @foreach($news as $new)

                            <div class="text-center" dir="rtl">
                                {{$new->title}}
                                <a href="{{route('news_single',['type'=>$new->type,'id'=>$new->id])}}">
                                    <span class="label label-success " dir="rtl">
                                        <span style="color:#2c2c2d">
                                            مشاهده
                                        </span>
                                    </span>
                                </a>
                                <span class="label label-danger">
                                    {{str_replace('1397/','97/',str_replace('-','/',str_before($new->date,' ')))}}
                                </span>
                                @if(!$loop->last)
                                    <hr style="background-color:darkseagreen; height:2px;">
                                @endif
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

            {{-- GALLERY --}}
            <div id="myCarousel" data-interval="3000" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($sliders as $slider)
                        <li data-target="#myCarousel" data-slide-to="{{$slider->id}}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($sliders as $slider)
                        <div class="item {{ $loop->first ? ' active' : '' }}">
                            <a href="{{$slider->link}}">
                                <img loading="lazy" src="/img/slider/{{$slider->id}}.webp" style="width:100%;">
                                <div class="carousel-caption d-md-block">
                                    <h5 style="mix-blend-mode: difference">{{$slider->head}}</h5>
                                    <p style="mix-blend-mode: difference">{{$slider->body}}</p>
                                </div>
                            </a>
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

    </div>
@endsection
