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
        .bg1 {
            background: repeating-linear-gradient(158deg, rgba(84, 84, 84, 0.03) 0%, rgba(84, 84, 84, 0.03) 20%, rgba(219, 219, 219, 0.03) 20%, rgba(219, 219, 219, 0.03) 40%, rgba(54, 54, 54, 0.03) 40%, rgba(54, 54, 54, 0.03) 60%, rgba(99, 99, 99, 0.03) 60%, rgba(99, 99, 99, 0.03) 80%, rgba(92, 92, 92, 0.03) 80%, rgba(92, 92, 92, 0.03) 100%), linear-gradient(45deg, rgba(221, 221, 221, 0.02) 0%, rgba(221, 221, 221, 0.02) 14.286%, rgba(8, 8, 8, 0.02) 14.286%, rgba(8, 8, 8, 0.02) 28.572%, rgba(52, 52, 52, 0.02) 28.572%, rgba(52, 52, 52, 0.02) 42.858%, rgba(234, 234, 234, 0.02) 42.858%, rgba(234, 234, 234, 0.02) 57.144%, rgba(81, 81, 81, 0.02) 57.144%, rgba(81, 81, 81, 0.02) 71.42999999999999%, rgba(239, 239, 239, 0.02) 71.43%, rgba(239, 239, 239, 0.02) 85.71600000000001%, rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%), linear-gradient(109deg, rgba(33, 33, 33, 0.03) 0%, rgba(33, 33, 33, 0.03) 12.5%, rgba(147, 147, 147, 0.03) 12.5%, rgba(147, 147, 147, 0.03) 25%, rgba(131, 131, 131, 0.03) 25%, rgba(131, 131, 131, 0.03) 37.5%, rgba(151, 151, 151, 0.03) 37.5%, rgba(151, 151, 151, 0.03) 50%, rgba(211, 211, 211, 0.03) 50%, rgba(211, 211, 211, 0.03) 62.5%, rgba(39, 39, 39, 0.03) 62.5%, rgba(39, 39, 39, 0.03) 75%, rgba(55, 55, 55, 0.03) 75%, rgba(55, 55, 55, 0.03) 87.5%, rgba(82, 82, 82, 0.03) 87.5%, rgba(82, 82, 82, 0.03) 100%), linear-gradient(348deg, rgba(42, 42, 42, 0.02) 0%, rgba(42, 42, 42, 0.02) 20%, rgba(8, 8, 8, 0.02) 20%, rgba(8, 8, 8, 0.02) 40%, rgba(242, 242, 242, 0.02) 40%, rgba(242, 242, 242, 0.02) 60%, rgba(42, 42, 42, 0.02) 60%, rgba(42, 42, 42, 0.02) 80%, rgba(80, 80, 80, 0.02) 80%, rgba(80, 80, 80, 0.02) 100%), linear-gradient(120deg, rgba(106, 106, 106, 0.03) 0%, rgba(106, 106, 106, 0.03) 14.286%, rgba(67, 67, 67, 0.03) 14.286%, rgba(67, 67, 67, 0.03) 28.572%, rgba(134, 134, 134, 0.03) 28.572%, rgba(134, 134, 134, 0.03) 42.858%, rgba(19, 19, 19, 0.03) 42.858%, rgba(19, 19, 19, 0.03) 57.144%, rgba(101, 101, 101, 0.03) 57.144%, rgba(101, 101, 101, 0.03) 71.42999999999999%, rgba(205, 205, 205, 0.03) 71.43%, rgba(205, 205, 205, 0.03) 85.71600000000001%, rgba(53, 53, 53, 0.03) 85.716%, rgba(53, 53, 53, 0.03) 100.002%), linear-gradient(45deg, rgba(214, 214, 214, 0.03) 0%, rgba(214, 214, 214, 0.03) 16.667%, rgba(255, 255, 255, 0.03) 16.667%, rgba(255, 255, 255, 0.03) 33.334%, rgba(250, 250, 250, 0.03) 33.334%, rgba(250, 250, 250, 0.03) 50.001000000000005%, rgba(231, 231, 231, 0.03) 50.001%, rgba(231, 231, 231, 0.03) 66.668%, rgba(241, 241, 241, 0.03) 66.668%, rgba(241, 241, 241, 0.03) 83.33500000000001%, rgba(31, 31, 31, 0.03) 83.335%, rgba(31, 31, 31, 0.03) 100.002%), linear-gradient(59deg, rgba(224, 224, 224, 0.03) 0%, rgba(224, 224, 224, 0.03) 12.5%, rgba(97, 97, 97, 0.03) 12.5%, rgba(97, 97, 97, 0.03) 25%, rgba(143, 143, 143, 0.03) 25%, rgba(143, 143, 143, 0.03) 37.5%, rgba(110, 110, 110, 0.03) 37.5%, rgba(110, 110, 110, 0.03) 50%, rgba(34, 34, 34, 0.03) 50%, rgba(34, 34, 34, 0.03) 62.5%, rgba(155, 155, 155, 0.03) 62.5%, rgba(155, 155, 155, 0.03) 75%, rgba(249, 249, 249, 0.03) 75%, rgba(249, 249, 249, 0.03) 87.5%, rgba(179, 179, 179, 0.03) 87.5%, rgba(179, 179, 179, 0.03) 100%), linear-gradient(241deg, rgba(58, 58, 58, 0.02) 0%, rgba(58, 58, 58, 0.02) 25%, rgba(124, 124, 124, 0.02) 25%, rgba(124, 124, 124, 0.02) 50%, rgba(254, 254, 254, 0.02) 50%, rgba(254, 254, 254, 0.02) 75%, rgba(52, 52, 52, 0.02) 75%, rgba(52, 52, 52, 0.02) 100%), linear-gradient(90deg, #FFF, #FFF);
        }

        .bg2 {
            background: repeating-linear-gradient(0deg, rgba(16, 130, 178, 0.58) 0%, rgba(16, 130, 178, 0.58) 13%, rgba(49, 137, 167, 0.58) 13%, rgba(49, 137, 167, 0.58) 42%, rgba(81, 143, 157, 0.58) 42%, rgba(81, 143, 157, 0.58) 49%, rgba(114, 150, 146, 0.58) 49%, rgba(114, 150, 146, 0.58) 58%, rgba(147, 157, 135, 0.58) 58%, rgba(147, 157, 135, 0.58) 69%, rgba(180, 164, 124, 0.58) 69%, rgba(180, 164, 124, 0.58) 74%, rgba(212, 170, 114, 0.58) 74%, rgba(212, 170, 114, 0.58) 78%, rgba(245, 177, 103, 0.58) 78%, rgba(245, 177, 103, 0.58) 100%), linear-gradient(90deg, rgb(180, 56, 238) 0%, rgb(180, 56, 238) 11%, rgb(190, 82, 231) 11%, rgb(190, 82, 231) 22%, rgb(201, 109, 225) 22%, rgb(201, 109, 225) 46%, rgb(211, 135, 218) 46%, rgb(211, 135, 218) 60%, rgb(222, 161, 212) 60%, rgb(222, 161, 212) 65%, rgb(232, 187, 205) 65%, rgb(232, 187, 205) 87%, rgb(243, 214, 199) 87%, rgb(243, 214, 199) 92%, rgb(253, 240, 192) 92%, rgb(253, 240, 192) 100%);
        }

        .bg3 {
            background: repeating-linear-gradient(45deg, rgb(111, 71, 237) 0%, rgb(111, 71, 237) 21%, rgb(101, 92, 233) 21%, rgb(101, 92, 233) 30%, rgb(91, 112, 229) 30%, rgb(91, 112, 229) 35%, rgb(82, 133, 226) 35%, rgb(82, 133, 226) 51%, rgb(72, 154, 222) 51%, rgb(72, 154, 222) 72%, rgb(62, 174, 218) 72%, rgb(62, 174, 218) 81%, rgb(52, 195, 214) 81%, rgb(52, 195, 214) 100%);
        }

        .bg4 {
            background: repeating-linear-gradient(0deg, rgba(16, 130, 178, 0.58) 0%, rgba(16, 130, 178, 0.58) 13%, rgba(49, 137, 167, 0.58) 13%, rgba(49, 137, 167, 0.58) 42%, rgba(81, 143, 157, 0.58) 42%, rgba(81, 143, 157, 0.58) 49%, rgba(114, 150, 146, 0.58) 49%, rgba(114, 150, 146, 0.58) 58%, rgba(147, 157, 135, 0.58) 58%, rgba(147, 157, 135, 0.58) 69%, rgba(180, 164, 124, 0.58) 69%, rgba(180, 164, 124, 0.58) 74%, rgba(212, 170, 114, 0.58) 74%, rgba(212, 170, 114, 0.58) 78%, rgba(245, 177, 103, 0.58) 78%, rgba(245, 177, 103, 0.58) 100%), linear-gradient(90deg, rgb(180, 56, 238) 0%, rgb(180, 56, 238) 11%, rgb(190, 82, 231) 11%, rgb(190, 82, 231) 22%, rgb(201, 109, 225) 22%, rgb(201, 109, 225) 46%, rgb(211, 135, 218) 46%, rgb(211, 135, 218) 60%, rgb(222, 161, 212) 60%, rgb(222, 161, 212) 65%, rgb(232, 187, 205) 65%, rgb(232, 187, 205) 87%, rgb(243, 214, 199) 87%, rgb(243, 214, 199) 92%, rgb(253, 240, 192) 92%, rgb(253, 240, 192) 100%);
        }

        .bg5 {
            background: repeating-linear-gradient(158deg, rgba(253, 253, 253, 0.03) 0%, rgba(253, 253, 253, 0.03) 50%, rgba(64, 64, 64, 0.03) 50%, rgba(64, 64, 64, 0.03) 100%), linear-gradient(77deg, rgba(39, 39, 39, 0.01) 0%, rgba(39, 39, 39, 0.01) 50%, rgba(91, 91, 91, 0.01) 50%, rgba(91, 91, 91, 0.01) 100%), linear-gradient(311deg, rgba(19, 19, 19, 0.03) 0%, rgba(19, 19, 19, 0.03) 50%, rgba(214, 214, 214, 0.03) 50%, rgba(214, 214, 214, 0.03) 100%), linear-gradient(233deg, rgba(250, 250, 250, 0.03) 0%, rgba(250, 250, 250, 0.03) 50%, rgba(118, 118, 118, 0.03) 50%, rgba(118, 118, 118, 0.03) 100%), linear-gradient(227deg, rgba(216, 216, 216, 0.02) 0%, rgba(216, 216, 216, 0.02) 50%, rgba(69, 69, 69, 0.02) 50%, rgba(69, 69, 69, 0.02) 100%), linear-gradient(151deg, rgba(205, 205, 205, 0.02) 0%, rgba(205, 205, 205, 0.02) 50%, rgba(20, 20, 20, 0.02) 50%, rgba(20, 20, 20, 0.02) 100%), linear-gradient(7deg, rgba(169, 169, 169, 0.02) 0%, rgba(169, 169, 169, 0.02) 50%, rgba(231, 231, 231, 0.02) 50%, rgba(231, 231, 231, 0.02) 100%), linear-gradient(244deg, rgba(204, 204, 204, 0.01) 0%, rgba(204, 204, 204, 0.01) 50%, rgba(200, 200, 200, 0.01) 50%, rgba(200, 200, 200, 0.01) 100%), linear-gradient(90deg, rgb(37, 116, 27), rgb(185, 232, 75));
        }

        .bg6 {
            background: repeating-linear-gradient(45deg, rgb(64, 140, 190) 0%, rgb(64, 140, 190) 7%, rgb(62, 107, 145) 7%, rgb(62, 107, 145) 9%, rgb(49, 99, 131) 9%, rgb(49, 99, 131) 11%, rgb(116, 172, 211) 11%, rgb(116, 172, 211) 26%, rgb(125, 182, 214) 26%, rgb(125, 182, 214) 34%, rgb(40, 90, 136) 34%, rgb(40, 90, 136) 41%, rgb(39, 123, 190) 41%, rgb(39, 123, 190) 100%);
        }

        .bg7 {
            background: repeating-linear-gradient(246deg, rgba(234, 234, 234, 0.04) 0%, rgba(234, 234, 234, 0.04) 33.3%, rgba(69, 69, 69, 0.04) 33.3%, rgba(69, 69, 69, 0.04) 66.6%, rgba(189, 189, 189, 0.04) 66.6%, rgba(189, 189, 189, 0.04) 99.89999999999999%), linear-gradient(81deg, rgba(126, 126, 126, 0.05) 0%, rgba(126, 126, 126, 0.05) 33.3%, rgba(237, 237, 237, 0.05) 33.3%, rgba(237, 237, 237, 0.05) 66.6%, rgba(74, 74, 74, 0.05) 66.6%, rgba(74, 74, 74, 0.05) 99.89999999999999%), linear-gradient(14deg, rgba(3, 3, 3, 0.08) 0%, rgba(3, 3, 3, 0.08) 33.3%, rgba(156, 156, 156, 0.08) 33.3%, rgba(156, 156, 156, 0.08) 66.6%, rgba(199, 199, 199, 0.08) 66.6%, rgba(199, 199, 199, 0.08) 99.89999999999999%), linear-gradient(323deg, rgba(82, 82, 82, 0.06) 0%, rgba(82, 82, 82, 0.06) 33.3%, rgba(179, 179, 179, 0.06) 33.3%, rgba(179, 179, 179, 0.06) 66.6%, rgba(212, 212, 212, 0.06) 66.6%, rgba(212, 212, 212, 0.06) 99.89999999999999%), linear-gradient(32deg, rgba(70, 70, 70, 0.02) 0%, rgba(70, 70, 70, 0.02) 33.3%, rgba(166, 166, 166, 0.02) 33.3%, rgba(166, 166, 166, 0.02) 66.6%, rgba(53, 53, 53, 0.02) 66.6%, rgba(53, 53, 53, 0.02) 99.89999999999999%), linear-gradient(38deg, rgba(129, 129, 129, 0.09) 0%, rgba(129, 129, 129, 0.09) 33.3%, rgba(38, 38, 38, 0.09) 33.3%, rgba(38, 38, 38, 0.09) 66.6%, rgba(153, 153, 153, 0.09) 66.6%, rgba(153, 153, 153, 0.09) 99.89999999999999%), linear-gradient(63deg, rgba(51, 51, 51, 0.02) 0%, rgba(51, 51, 51, 0.02) 33.3%, rgba(12, 12, 12, 0.02) 33.3%, rgba(12, 12, 12, 0.02) 66.6%, rgba(158, 158, 158, 0.02) 66.6%, rgba(158, 158, 158, 0.02) 99.89999999999999%), linear-gradient(227deg, rgba(63, 63, 63, 0.03) 0%, rgba(63, 63, 63, 0.03) 33.3%, rgba(9, 9, 9, 0.03) 33.3%, rgba(9, 9, 9, 0.03) 66.6%, rgba(85, 85, 85, 0.03) 66.6%, rgba(85, 85, 85, 0.03) 99.89999999999999%), linear-gradient(103deg, rgba(247, 247, 247, 0.07) 0%, rgba(247, 247, 247, 0.07) 33.3%, rgba(93, 93, 93, 0.07) 33.3%, rgba(93, 93, 93, 0.07) 66.6%, rgba(208, 208, 208, 0.07) 66.6%, rgba(208, 208, 208, 0.07) 99%), linear-gradient(0deg, #0b91d7, #6efc29)
        }
        .bg8 {
            background: repeating-linear-gradient(90deg, rgba(196, 196, 196, 0.05) 0%, rgba(196, 196, 196, 0.05) 10%,rgba(245, 245, 245, 0.05) 10%, rgba(245, 245, 245, 0.05) 23%,rgba(72, 72, 72, 0.05) 23%, rgba(72, 72, 72, 0.05) 27%,rgba(231, 231, 231, 0.05) 27%, rgba(231, 231, 231, 0.05) 28%,rgba(192, 192, 192, 0.05) 28%, rgba(192, 192, 192, 0.05) 39%,rgba(105, 105, 105, 0.05) 39%, rgba(105, 105, 105, 0.05) 47%,rgba(216, 216, 216, 0.05) 47%, rgba(216, 216, 216, 0.05) 100%),linear-gradient(90deg, rgba(98, 98, 98, 0.07) 0%, rgba(98, 98, 98, 0.07) 6%,rgba(13, 13, 13, 0.07) 6%, rgba(13, 13, 13, 0.07) 10%,rgba(31, 31, 31, 0.07) 10%, rgba(31, 31, 31, 0.07) 25%,rgba(2, 2, 2, 0.07) 25%, rgba(2, 2, 2, 0.07) 33%,rgba(170, 170, 170, 0.07) 33%, rgba(170, 170, 170, 0.07) 39%,rgba(203, 203, 203, 0.07) 39%, rgba(203, 203, 203, 0.07) 87%,rgba(254, 254, 254, 0.07) 87%, rgba(254, 254, 254, 0.07) 100%),linear-gradient(90deg, rgba(180, 180, 180, 0.03) 0%, rgba(180, 180, 180, 0.03) 10%,rgba(178, 178, 178, 0.03) 10%, rgba(178, 178, 178, 0.03) 15%,rgba(22, 22, 22, 0.03) 15%, rgba(22, 22, 22, 0.03) 27%,rgba(149, 149, 149, 0.03) 27%, rgba(149, 149, 149, 0.03) 32%,rgba(85, 85, 85, 0.03) 32%, rgba(85, 85, 85, 0.03) 45%,rgba(100, 100, 100, 0.03) 45%, rgba(100, 100, 100, 0.03) 57%,rgba(228, 228, 228, 0.03) 57%, rgba(228, 228, 228, 0.03) 65%,rgba(178, 178, 178, 0.03) 65%, rgba(178, 178, 178, 0.03) 100%),linear-gradient(90deg, rgba(239, 239, 239, 0.02) 0%, rgba(239, 239, 239, 0.02) 1%,rgba(192, 192, 192, 0.02) 1%, rgba(192, 192, 192, 0.02) 2%,rgba(151, 151, 151, 0.02) 2%, rgba(151, 151, 151, 0.02) 19%,rgba(62, 62, 62, 0.02) 19%, rgba(62, 62, 62, 0.02) 90%,rgba(143, 143, 143, 0.02) 90%, rgba(143, 143, 143, 0.02) 91%,rgba(137, 137, 137, 0.02) 91%, rgba(137, 137, 137, 0.02) 98%,rgba(216, 216, 216, 0.02) 98%, rgba(216, 216, 216, 0.02) 100%),linear-gradient(90deg, rgba(91, 91, 91, 0.02) 0%, rgba(91, 91, 91, 0.02) 5%,rgba(56, 56, 56, 0.02) 5%, rgba(56, 56, 56, 0.02) 30%,rgba(79, 79, 79, 0.02) 30%, rgba(79, 79, 79, 0.02) 73%,rgba(81, 81, 81, 0.02) 73%, rgba(81, 81, 81, 0.02) 92%,rgba(68, 68, 68, 0.02) 92%, rgba(68, 68, 68, 0.02) 100%),linear-gradient(90deg, rgba(60, 60, 60, 0.06) 0%, rgba(60, 60, 60, 0.06) 8%,rgba(21, 21, 21, 0.06) 8%, rgba(21, 21, 21, 0.06) 21%,rgba(127, 127, 127, 0.06) 21%, rgba(127, 127, 127, 0.06) 22%,rgba(250, 250, 250, 0.06) 22%, rgba(250, 250, 250, 0.06) 55%,rgba(119, 119, 119, 0.06) 55%, rgba(119, 119, 119, 0.06) 60%,rgba(120, 120, 120, 0.06) 60%, rgba(120, 120, 120, 0.06) 61%,rgba(222, 222, 222, 0.06) 61%, rgba(222, 222, 222, 0.06) 100%),linear-gradient(90deg, rgba(64, 64, 64, 0.07) 0%, rgba(64, 64, 64, 0.07) 18%,rgba(57, 57, 57, 0.07) 18%, rgba(57, 57, 57, 0.07) 21%,rgba(125, 125, 125, 0.07) 21%, rgba(125, 125, 125, 0.07) 26%,rgba(252, 252, 252, 0.07) 26%, rgba(252, 252, 252, 0.07) 40%,rgba(64, 64, 64, 0.07) 40%, rgba(64, 64, 64, 0.07) 47%,rgba(21, 21, 21, 0.07) 47%, rgba(21, 21, 21, 0.07) 67%,rgba(119, 119, 119, 0.07) 67%, rgba(119, 119, 119, 0.07) 100%),linear-gradient(90deg, rgb(17, 117, 250),rgb(248, 47, 141),rgb(121, 67, 171))
        }
    </style>
</head>
<body class="bg{{['1','2','3','4','5','6','7','8'][array_rand(['1','2','3','4','5','6','7','8'])]}}" style="font-family:'Font'">

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