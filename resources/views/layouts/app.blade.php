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
</head>
<body class="bg{{mt_rand(1,10)}}" style="font-family:'Font'">

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse" aria-expanded="false">
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
                    <li class="different"><a href="{{ route('login') }}">ورود <span style="color: dodgerblue"
                                                                                    class="glyphicon glyphicon-log-in"
                                                                                    aria-hidden="true"></span></a></li>
                @else
                    <li class="dropdown different">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true">
                            {{ Auth::user()->username }}
                            <span style="color: dodgerblue" class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="text-center">

                                <a class="dropdown-item" href="{{Route('panel')}}">
                                    پنل ادمین
                                    <span style="color: deepskyblue" class="glyphicon glyphicon-user"
                                          aria-hidden="true"></span>
                                </a>

                                <a class="dropdown-item text-center" href="{{ route('password') }}">
                                    تغییر رمز عبور
                                    <span style="color: green" class="glyphicon glyphicon-lock"
                                          aria-hidden="true"></span>
                                </a>

                                <a class="dropdown-item text-center" href="/phpmyadmin">
                                    ورود به دیتابیس
                                    <span style="color: mediumpurple" class="glyphicon glyphicon-file"
                                          aria-hidden="true"></span>
                                </a>

                                <a class="dropdown-item text-center" href="{{ route('backup') }}">
                                    دانلود پشتیبان دیتابیس
                                    <span style="color: mediumpurple" class="glyphicon glyphicon-file"
                                          aria-hidden="true"></span>
                                </a>

                                <a class="dropdown-item" style="color: red;" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    خروج
                                    <span style="color: red" class="glyphicon glyphicon-log-out"
                                          aria-hidden="true"></span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="different"><a href="{{ route('contactus') }}">تماس با ما <span style="color: red"
                                                                                          class="glyphicon glyphicon-earphone"
                                                                                          aria-hidden="true"></span></a>
                </li>

                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       aria-haspopup="true">
                        درباره ما<span class="caret"></span>
                        <span style="color:yellowgreen" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            <a href="{{ route('about_goals') }}">اهداف <span style="color:green"
                                                                             class="glyphicon glyphicon-flag"
                                                                             aria-hidden="true"></span></a>

                            {{--ToDo: get these routes updated--}}
                            {{--                                <a href="{{ route('about_chart') }}">ساختار <span style="color:firebrick" class="glyphicon glyphicon-th" aria-hidden="true"></span></a>--}}

                            {{--                                <a href="{{ route('about_staff') }}">کادر اجرایی <span style="color:brown" class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a>--}}

                            <a href="{{ route('about_assets') }}">ویژگی ها <span style="color:yellow"
                                                                                 class="glyphicon glyphicon-star"
                                                                                 aria-hidden="true"></span></a>

                            <a href="{{ route('teachers') }}">کادر آموزشی <span style="color:black"
                                                                                class="glyphicon glyphicon-pencil"
                                                                                aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </li>

                <li class="different"><a href="{{ route('register_form') }}">پیش ثبت نام <span style="color: green"
                                                                                               class="glyphicon glyphicon-user"
                                                                                               aria-hidden="true"></span></a>
                </li>

                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       aria-haspopup="true">
                        پرورشی<span class="caret"></span>
                        <span style="color:slateblue" class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            {{--<a href="{{ route('news_category',['type'=>'401']) }}">--}}
                            {{--<span class="label label-success pull-left panel-title">--}}
                            {{--{{App\News::where('type','401')->count()}}--}}
                            {{--</span>--}}
                            {{--...خبردار--}}
                            {{--</a>--}}

                            <a href="{{ route('news_category',['type'=>'402']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','402')->count()}}
                                    </span>
                                قرآن کریم و احکام
                            </a>

                            <a href="{{ route('news_category',['type'=>'403']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','403')->count()}}
                                    </span>
                                khamenei.ir
                            </a>

                            <a href="{{ route('news_category',['type'=>'404']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','404')->count()}}
                                    </span>
                                همکلاسی آسمانی
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       aria-haspopup="true">
                        به روایت تصویر<span class="caret"></span>
                        <span style="color: #c7254e" class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            <a href="{{ route('video',['type'=>'99']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Video::where('type','99')->count()}}
                                </div>
                                ویدئو ها
                            </a>

                            <a href="{{ route('news_category',['type'=>'307']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','307')->count()}}
                                    </span>
                                آموزشی
                            </a>

                            <a href="{{ route('news_category',['type'=>'301']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','301')->count()}}
                                    </span>
                                اردوها
                            </a>

                            <a href="{{ route('news_category',['type'=>'302']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','302')->count()}}
                                    </span>
                                مراسم
                            </a>

                            <a href="{{ route('news_category',['type'=>'306']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','306')->count()}}
                                    </span>
                                جهادی
                            </a>

                            <a href="{{ route('news_category',['type'=>'303']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','303')->count()}}
                                    </span>
                                فوق برنامه
                            </a>

                            <a href="{{ route('news_category',['type'=>'304']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','304')->count()}}
                                    </span>
                                جلسات
                            </a>

                            <a href="{{ route('news_category',['type'=>'305']) }}">
                                    <span class="label label-success pull-left panel-title">
                                        {{App\News::where('type','305')->count()}}
                                    </span>
                                سایر
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="dropdown different">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       aria-haspopup="true">
                        فایل های آموزشی<span class="caret"></span>
                        <span style="color: #42bec9" class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="text-center">

                            <a href="{{ route('educational_category',['type'=>'501']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','501')->count()}}
                                </div>
                                نمونه سوالات ریاضی دهم
                            </a>

                            <a href="{{ route('educational_category',['type'=>'504']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','504')->count()}}
                                </div>
                                نمونه سوالات تجربی دهم
                            </a>

                            <a href="{{ route('video',['type'=>'10']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Video::where('type','10')->count()}}
                                </div>
                                فایل های ویدئویی دهم
                                <span style="color: #42bec9" class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                            </a>

                            <a href="{{ route('educational_category',['type'=>'505']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','505')->count()}}
                                </div>
                                نمونه سوالات ریاضی یازدهم
                            </a>

                            <a href="{{ route('educational_category',['type'=>'506']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','506')->count()}}
                                </div>
                                نمونه سوالات تجربی یازدهم
                            </a>

                            <a href="{{ route('video',['type'=>'11']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Video::where('type','11')->count()}}
                                </div>
                                فایل های ویدئویی یازدهم
                                <span style="color: #42bec9" class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                            </a>

                            <a href="{{ route('educational_category',['type'=>'507']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','507')->count()}}
                                </div>
                                نمونه سوالات ریاضی دوازدهم
                            </a>

                            <a href="{{ route('educational_category',['type'=>'508']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','508')->count()}}
                                </div>
                                نمونه سوالات تجربی دوازدهم
                            </a>

                            <a href="{{ route('video',['type'=>'12']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Video::where('type','12')->count()}}
                                </div>
                                       
                                فایل های ویدئویی دوازدهم
                                <span style="color: #42bec9" class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                                                
                            </a>

                            <a href="{{ route('educational_category',['type'=>'509']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','509')->count()}}
                                </div>
                                نمونه سوالات آزمون ورودی
                            </a>

                            <a href="{{ route('video',['type'=>'9']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Video::where('type','9')->count()}}
                                </div>
                                فایل های ویدئویی آزمون ورودی
                                <span style="color: #42bec9" class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                            </a>

                            <a href="{{ route('educational_category',['type'=>'502']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','502')->count()}}
                                </div>
                                مشاوره
                            </a>

                            <a href="{{ route('educational_category',['type'=>'503']) }}">
                                <div class="label label-success pull-left panel-title">
                                    {{App\Educational::where('type','503')->count()}}
                                </div>
                                برنامه نویسی
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="different"><a href="{{ route('home') }}">صفحه اصلی <span style="color: black"
                                                                                    class="glyphicon glyphicon-home"
                                                                                    aria-hidden="true"></span></a></li>
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