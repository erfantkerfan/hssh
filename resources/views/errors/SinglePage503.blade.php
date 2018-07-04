<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (Request::secure())
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @endif

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        @font-face {
            font-family:'Font';
            @if (Request::secure())
            src: url( {{secure_asset('fonts/'.config('app.font'))}} );
            @else
            src: url( {{asset('fonts/'.config('app.font'))}} );
        @endif
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 95vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 60px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .number{letter-spacing:-10px;line-height:128px;font-size:128px;font-weight:300}
        .font-red{display:inline-block;color:#ec8c8c;text-align:left}
    </style>
</head>
<body style="font-family:'Font'">
<div class="flex-center position-ref full-height">

    <div class="content">
        @if (Request::secure())
            <img class="col-md-6" src="{{secure_asset('img/maintenance boy.gif')}}">
        @else
            <img class="col-md-6" src="{{asset('img/maintenance boy.gif')}}">
        @endif
        <div dir="rtl" class="title m-b-md">
            این صفحه در حال بروزرسانی میباشد.
        </div>
        <div class="number font-red"> 503 </div>
    </div>

</div>
</body>
</html>
