<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="/img/icon.gif" type="image/gif">
    <link href="/css/googleapis.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <style type="text/css">
        @font-face {
            font-family:'Font';
            src: url('/fonts/BTITRBOLD.ttf');
        }
        @font-face {
            font-family: 'IranNastaliq';
            src: url('/fonts/IranNastaliq.eot?#') format('eot'),
            url('/fonts/IranNastaliq.ttf') format('truetype'),
            url('/fonts/IranNastaliq.woff') format('woff');
        }
        .iran{
            font-family:IranNastaliq,'IranNastaliq',tahoma;
            font-size:12px;
        }
        body, html {
            height: 100%;
            margin: 0;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: dimgrey;
            color: white;
            text-align: center;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .bg {
            background-image: url("/img/bg.png");
            height: 100%;
            background-position: center;
            background-repeat: repeat-y;
            background-size: cover;
        }
        .carousel {
            border-radius: 20px 20px 20px 20px;
            overflow: hidden;
        }
        li.different{
            border:none;
            position: relative;
        }
        li.different:hover{
            border: none;
        }
        li:hover {
            border-bottom: 5px solid #FFFFFF;
        }
        .different::after{
            content: '';
            position: absolute;
            width: 0px;
            height: 5px;
            left: 50%;
            bottom:0;
            background-color: darkblue;
            transition: all ease-in-out .2s;
        }
        .different:hover::after{
            width: 100%;
            left: 0;
        }
    </style>
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body class="bg" style="font-family:'Font'">

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                        <img style="width:12%" src="/img/icon.gif">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="different"><a href="{{ route('contactus') }}">تماس با ما <span style="color: red" class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>

                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                             درباره ما<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="text-center">

                                <a href="{{ route('about_goals') }}">اهداف <span style="color:green" class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>

                                <a href="{{ route('about_chart') }}">ساختار <span style="color:firebrick" class="glyphicon glyphicon-th" aria-hidden="true"></span></a>

                                <a href="{{ route('about_staff') }}">کادر اجرایی <span style="color:brown" class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a>

                                <a href="{{ route('about_dep') }}">کادر آموزشی <span style="color:black" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                <a href="{{ route('about_assets') }}">ویژگی ها <span style="color:yellow" class="glyphicon glyphicon-star" aria-hidden="true"></span></a>

                            </li>
                        </ul>

                    <li class="different"><a href="{{ route('register_form') }}">پیش ثبت نام <span style="color: green" class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                    <li class="different"><a href="{{ route('home') }}">صفحه اصلی <span style="color: black" class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="flex-center">
        <div class="content">
            <div class="title">
                <div class="iran text-center">
                    <h2>
                    دبیرستان حضرت سید الشهداعلیه السلام منطقه ۲ - دوره دوم
                    </h2>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    {{--<footer class="footer">--}}
        {{--<strong style="color:white">--}}
            {{--آدرس--}}
            {{--:--}}
            {{--بزرگراه شیخ فضل الله نوری، بلوار شهید تیموری، خیابان شهید درویش وند، پلاک 30--}}
        {{--</strong>--}}
    {{--</footer>--}}
</body>
</html>