@extends('layouts.app')

@section('content')
    <style type="text/css">
        .title {
            font-size: 24px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        input[type=password] {
            padding:10px;
            font-size:18px;
            font-weight: 200;
            border:1px solid #859aaa;
            margin-top:20px;
            width: 100%;
            text-align: center;
            border-radius: 3px;
        }
    </style>
<div class="container text-center">
    <div class="content text-center col-md-3 col-md-offset-4">
        <div class="title">پسورد را وارد کنید</div>
        <form action="{{ url("qwertyuiop") }}" method="post">
            {{ csrf_field() }}

            <input type="password" name="password" autofocus>

        </form>

    </div>
</div>
@endsection