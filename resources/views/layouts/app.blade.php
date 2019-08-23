<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="دبیرستان, حضرت, سیدالشهدا, علیه السلام, مدرسه , دوره دوم">
    <meta name="description" content="دبیرستان حضرت سیدالشهدا علیه السلام">

    <!-- Links -->
    <link rel="icon" href="{{asset("/img/icon.gif")}}" type="image/gif">
    <link href="{{mix("/css/app.css")}}" rel="stylesheet" type="text/css">

    <script src="{{mix("js/app.js")}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .bg2{
            background-image: linear-gradient(158deg, rgba(84, 84, 84, 0.03) 0%, rgba(84, 84, 84, 0.03) 20%,rgba(219, 219, 219, 0.03) 20%, rgba(219, 219, 219, 0.03) 40%,rgba(54, 54, 54, 0.03) 40%, rgba(54, 54, 54, 0.03) 60%,rgba(99, 99, 99, 0.03) 60%, rgba(99, 99, 99, 0.03) 80%,rgba(92, 92, 92, 0.03) 80%, rgba(92, 92, 92, 0.03) 100%),linear-gradient(45deg, rgba(221, 221, 221, 0.02) 0%, rgba(221, 221, 221, 0.02) 14.286%,rgba(8, 8, 8, 0.02) 14.286%, rgba(8, 8, 8, 0.02) 28.572%,rgba(52, 52, 52, 0.02) 28.572%, rgba(52, 52, 52, 0.02) 42.858%,rgba(234, 234, 234, 0.02) 42.858%, rgba(234, 234, 234, 0.02) 57.144%,rgba(81, 81, 81, 0.02) 57.144%, rgba(81, 81, 81, 0.02) 71.42999999999999%,rgba(239, 239, 239, 0.02) 71.43%, rgba(239, 239, 239, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(109deg, rgba(33, 33, 33, 0.03) 0%, rgba(33, 33, 33, 0.03) 12.5%,rgba(147, 147, 147, 0.03) 12.5%, rgba(147, 147, 147, 0.03) 25%,rgba(131, 131, 131, 0.03) 25%, rgba(131, 131, 131, 0.03) 37.5%,rgba(151, 151, 151, 0.03) 37.5%, rgba(151, 151, 151, 0.03) 50%,rgba(211, 211, 211, 0.03) 50%, rgba(211, 211, 211, 0.03) 62.5%,rgba(39, 39, 39, 0.03) 62.5%, rgba(39, 39, 39, 0.03) 75%,rgba(55, 55, 55, 0.03) 75%, rgba(55, 55, 55, 0.03) 87.5%,rgba(82, 82, 82, 0.03) 87.5%, rgba(82, 82, 82, 0.03) 100%),linear-gradient(348deg, rgba(42, 42, 42, 0.02) 0%, rgba(42, 42, 42, 0.02) 20%,rgba(8, 8, 8, 0.02) 20%, rgba(8, 8, 8, 0.02) 40%,rgba(242, 242, 242, 0.02) 40%, rgba(242, 242, 242, 0.02) 60%,rgba(42, 42, 42, 0.02) 60%, rgba(42, 42, 42, 0.02) 80%,rgba(80, 80, 80, 0.02) 80%, rgba(80, 80, 80, 0.02) 100%),linear-gradient(120deg, rgba(106, 106, 106, 0.03) 0%, rgba(106, 106, 106, 0.03) 14.286%,rgba(67, 67, 67, 0.03) 14.286%, rgba(67, 67, 67, 0.03) 28.572%,rgba(134, 134, 134, 0.03) 28.572%, rgba(134, 134, 134, 0.03) 42.858%,rgba(19, 19, 19, 0.03) 42.858%, rgba(19, 19, 19, 0.03) 57.144%,rgba(101, 101, 101, 0.03) 57.144%, rgba(101, 101, 101, 0.03) 71.42999999999999%,rgba(205, 205, 205, 0.03) 71.43%, rgba(205, 205, 205, 0.03) 85.71600000000001%,rgba(53, 53, 53, 0.03) 85.716%, rgba(53, 53, 53, 0.03) 100.002%),linear-gradient(45deg, rgba(214, 214, 214, 0.03) 0%, rgba(214, 214, 214, 0.03) 16.667%,rgba(255, 255, 255, 0.03) 16.667%, rgba(255, 255, 255, 0.03) 33.334%,rgba(250, 250, 250, 0.03) 33.334%, rgba(250, 250, 250, 0.03) 50.001000000000005%,rgba(231, 231, 231, 0.03) 50.001%, rgba(231, 231, 231, 0.03) 66.668%,rgba(241, 241, 241, 0.03) 66.668%, rgba(241, 241, 241, 0.03) 83.33500000000001%,rgba(31, 31, 31, 0.03) 83.335%, rgba(31, 31, 31, 0.03) 100.002%),linear-gradient(59deg, rgba(224, 224, 224, 0.03) 0%, rgba(224, 224, 224, 0.03) 12.5%,rgba(97, 97, 97, 0.03) 12.5%, rgba(97, 97, 97, 0.03) 25%,rgba(143, 143, 143, 0.03) 25%, rgba(143, 143, 143, 0.03) 37.5%,rgba(110, 110, 110, 0.03) 37.5%, rgba(110, 110, 110, 0.03) 50%,rgba(34, 34, 34, 0.03) 50%, rgba(34, 34, 34, 0.03) 62.5%,rgba(155, 155, 155, 0.03) 62.5%, rgba(155, 155, 155, 0.03) 75%,rgba(249, 249, 249, 0.03) 75%, rgba(249, 249, 249, 0.03) 87.5%,rgba(179, 179, 179, 0.03) 87.5%, rgba(179, 179, 179, 0.03) 100%),linear-gradient(241deg, rgba(58, 58, 58, 0.02) 0%, rgba(58, 58, 58, 0.02) 25%,rgba(124, 124, 124, 0.02) 25%, rgba(124, 124, 124, 0.02) 50%,rgba(254, 254, 254, 0.02) 50%, rgba(254, 254, 254, 0.02) 75%,rgba(52, 52, 52, 0.02) 75%, rgba(52, 52, 52, 0.02) 100%),linear-gradient(90deg, #FFF,#FFF)
        }
    </style>
</head>
<body class="bg2" style="font-family:'Font'">

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
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-left">
                    @guest
                        <li class="different"><a href="{{ route('login') }}">ورود <span style="color: dodgerblue" class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
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
                                        <span style="color: deepskyblue" class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </a>

                                    <a class="dropdown-item text-center" href="{{ route('password') }}">
                                        تغییر رمز عبور
                                        <span style="color: green" class="glyphicon glyphicon-lock" aria-hidden="true"></span>
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

                                {{--ToDo: get these routes updated--}}
{{--                                <a href="{{ route('about_chart') }}">ساختار <span style="color:firebrick" class="glyphicon glyphicon-th" aria-hidden="true"></span></a>--}}

{{--                                <a href="{{ route('about_staff') }}">کادر اجرایی <span style="color:brown" class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a>--}}

                                <a href="{{ route('teachers') }}">کادر آموزشی <span style="color:black" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

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
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','401')->count()}}
                                    </span>
                                    ...خبردار
                                </a>

                                <a href="{{ route('news_category',['type'=>'402']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','402')->count()}}
                                    </span>
                                    قرآن کریم و احکام
                                </a>

                                <a href="{{ route('news_category',['type'=>'403']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','403')->count()}}
                                    </span>
                                    khamenei.ir
                                </a>

                                <a href="{{ route('news_category',['type'=>'404']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','404')->count()}}
                                    </span>
                                    همکلاسی آسمانی
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
                                    <span class="label label-success pull-left pull-left">
                                        {{App\News::where('type','301')->count()}}
                                    </span>
                                    اردوها
                                </a>

                                <a href="{{ route('news_category',['type'=>'302']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','302')->count()}}
                                    </span>
                                    مراسم
                                </a>

                                <a href="{{ route('news_category',['type'=>'303']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','303')->count()}}
                                    </span>
                                    فوق برنامه
                                </a>

                                <a href="{{ route('news_category',['type'=>'304']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','304')->count()}}
                                    </span>
                                    جلسات
                                </a>

                                <a href="{{ route('news_category',['type'=>'305']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\News::where('type','305')->count()}}
                                    </span>
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
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','501')->count()}}
                                    </span>
                                    نمونه سوالات ریاضی دهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'504']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','504')->count()}}
                                    </span>
                                    نمونه سوالات تجربی دهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'505']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','505')->count()}}
                                    </span>
                                    نمونه سوالات ریاضی یازدهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'506']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','506')->count()}}
                                    </span>
                                    نمونه سوالات تجربی یازدهم
                                </a>

                                <a href="{{ route('educational_category',['type'=>'502']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','502')->count()}}
                                    </span>
                                    مشاوره
                                </a>

                                <a href="{{ route('educational_category',['type'=>'503']) }}">
                                    <span class="label label-success pull-left">
                                        {{App\Educational::where('type','503')->count()}}
                                    </span>
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
                    <h4 class="alert-heading">پیام سیستم:</h4>
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