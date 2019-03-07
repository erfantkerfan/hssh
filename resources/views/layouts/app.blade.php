<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124216933-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-124216933-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="دبیرستان, حضرت, سیدالشهدا, علیه السلام, مدرسه , دوره دوم">
    <meta name="description" content="دبیرستان حضرت سیدالشهدا علیه السلام">

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
    {{-- ToDo: minimiza un-localized-cache --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{--for-bootstrap-new-badge--}}
    <style>
        .badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-default{background-color:#636c72}.badge-default[href]:focus,.badge-default[href]:hover{background-color:#4b5257}.badge-primary{background-color:#0275d8}.badge-primary[href]:focus,.badge-primary[href]:hover{background-color:#025aa5}.badge-success{background-color:#5cb85c}.badge-success[href]:focus,.badge-success[href]:hover{background-color:#449d44}.badge-info{background-color:#5bc0de}.badge-info[href]:focus,.badge-info[href]:hover{background-color:#31b0d5}.badge-warning{background-color:#f0ad4e}.badge-warning[href]:focus,.badge-warning[href]:hover{background-color:#ec971f}.badge-danger{background-color:#d9534f}.badge-danger[href]:focus,.badge-danger[href]:hover{background-color:#c9302c}
    </style>
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
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--<img src="/img/icon.gif">--}}
                {{--</a>--}}
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-left">
                    @guest
                        <li class="different"><a href="{{ route('login') }}">ورود <span style="color: dodgerblue" class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                    @else
                        <li class="dropdown different">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->username }}
                                <span style="color: dodgerblue" class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="text-center">

                                    <a class="dropdown-item" href="{{Route('panel')}}">
                                    پنل ادمین
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </a>

                                    <a class="dropdown-item" style="color: red;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                        <span style="color: red" class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="different"><a href="{{ route('contactus') }}">تماس با ما <span style="color: red" class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>

                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                             درباره ما<span class="caret"></span>
                            <span style="color:yellowgreen" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
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
                    </li>

                    <li class="different"><a href="{{ route('register_form') }}">پیش ثبت نام <span style="color: green" class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>

                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            پرورشی<span class="caret"></span>
                            <span style="color:slateblue" class="glyphicon glyphicon-education" aria-hidden="true"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="text-center">

                                <a href="{{ route('news_category',['type'=>'401']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','401')->count()}}
                                    </div>
                                    ...خبردار
                                </a>

                                <a href="{{ route('news_category',['type'=>'402']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','402')->count()}}
                                    </div>
                                    قرآن کریم
                                </a>

                                <a href="{{ route('news_category',['type'=>'403']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','403')->count()}}
                                    </div>
                                    راه بندگی
                                </a>

                                <a href="{{ route('news_category',['type'=>'404']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','404')->count()}}
                                    </div>
                                    همکلاسی آسمانی
                                </a>

                                <a href="{{ route('news_category',['type'=>'405']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','405')->count()}}
                                    </div>
                                    نوجوان
                                </a>

                                <a href="{{ route('news_category',['type'=>'406']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','406')->count()}}
                                    </div>
                                    مسابقه فرهنگی
                                </a>

                                <a href="{{ route('news_category',['type'=>'407']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','407')->count()}}
                                    </div>
                                    مسابقه علمی
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            به روایت تصویر<span class="caret"></span>
                            <span style="color: #c7254e" class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="text-center">

                                <a href="{{ route('news_category',['type'=>'301']) }}">
                                    <div class="badge badge-success pull-left pull-left">
                                        {{App\News::where('type','301')->count()}}
                                    </div>
                                    اردوها
                                </a>

                                <a href="{{ route('news_category',['type'=>'302']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','302')->count()}}
                                    </div>
                                    مراسم
                                </a>

                                <a href="{{ route('news_category',['type'=>'303']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','303')->count()}}
                                    </div>
                                    فوق برنامه
                                </a>

                                <a href="{{ route('news_category',['type'=>'304']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','304')->count()}}
                                    </div>
                                    جلسات
                                </a>

                                <a href="{{ route('news_category',['type'=>'305']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\News::where('type','305')->count()}}
                                    </div>
                                    سایر
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            فایل های آموزشی<span class="caret"></span>
                            <span style="color: #42bec9" class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="text-center">

                                <a href="{{ route('educational_category',['type'=>'501']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','501')->count()}}
                                    </div>
                                    نمونه سوالات ریاضی دهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'504']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','504')->count()}}
                                    </div>
                                    نمونه سوالات تجربی دهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'505']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','505')->count()}}
                                    </div>
                                    نمونه سوالات ریاضی یازدهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'506']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','506')->count()}}
                                    </div>
                                    نمونه سوالات تجربی یازدهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'502']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','502')->count()}}
                                    </div>
                                    مشاوره
                                </a>

                                <a href="{{ route('educational_category',['type'=>'503']) }}">
                                    <div class="badge badge-success pull-left">
                                        {{App\Educational::where('type','503')->count()}}
                                    </div>
                                    برنامه نویسی
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li class="different"><a href="{{ route('home') }}">صفحه اصلی <span style="color: black" class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="flex-center">
        <div class="content">
            <div class="title">
                <div class="iran text-center">
                    <h2 dir="rtl">
                    مجتمع آموزشی فرهنگی حضرت سید الشهدا علیه السلام(دوره دوم)
                    </h2>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('alert'))
        <div class="flex-center" dir="rtl">
            <div class="text-center">
                <div class="alert alert-success alert-dismissible show" role="alert">
                    <h4 class="alert-heading">پیام سیستم</h4>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">
                        <span class="fa fa-times-circle" style="color:red;">
                        </span>
                    </a>
                    <p>{{Session::get('alert')}}</p>
                </div>
            </div>
        </div>
    @endif

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