@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-2">

            <div class="panel panel-info">
                <div class="panel-heading text-center">ورود به سامانه کارسنج</div>

                <div class="panel-body text-center">
                    <form class="form" method="POST" action="https://www.karsanj.net/login.php">

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="control-label text-center">نام کاربری</label>
                                <input id="username" type="text" class="form-control text-center" name="username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">گذرواژه</label>
                                <input id="password" type="password" class="form-control text-center" name="password" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                        </div>

                        <input  class="hidden" name="x_year" value="1397">

                        <input  class="hidden" name="submit" value="ورود به سامانه">

                        <div class="form-group">
                            <div>
                                <button name="online_payment" value="1" type="submit" class="btn btn-primary">
                                    ورود
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

            <div class="panel panel-info">
                <div class="panel-heading text-center">پیوندهای مفید</div>

                <br>

                <a href="http://nojavan.khamenei.ir">
                    <img  class="col-md-12" alt="http://nojavan.khamenei.ir" src="/img/links/1.png">
                </a>
                <br>
                <br>
                <br>

                <a href="http://www.khamenei.ir/">
                    <img  class="col-md-12" alt="http://www.khamenei.ir/" src="/img/links/2.png">
                </a>
                <br>
                <br>
                <br>

                <a href="http://www.ayandehsazan.ir/">
                    <img  class="col-md-12" alt="http://www.ayandehsazan.ir/" src="/img/links/3.png">
                </a>

                <div class="panel-body text-center row">

                </div>

            </div>

            {{--<div class="panel panel-primary">--}}
            {{--<a data-toggle="collapse" href="#karsanj">--}}
            {{--<div class="panel-heading">ورود به منتا</div>--}}
            {{--</a>--}}
            {{--</div>--}}

        </div>

        <div class="col-md-8">
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
                        <img src="/img/slider/{{$slider}}.jpg" style="width:100%;">
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
