@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-primary" dir="rtl">
                    <div class="panel-heading text-center">لیست پیام های دریافتی</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr class="bg-info">
                                    <th class="text-center">شماره ردیف دیتابیس</th>
                                    <th class="text-center">تاریخ ثبت</th>
                                    <th class="text-center">نام و نام خانوادگی</th>
                                    <th class="text-center">متن پیام</th>
                                    <th class="text-center">ایمیل</th>
                                    <th class="text-center">IP</th>
                                    <th class="text-center">حذف پیام</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <th class="text-center">{{$message->id}}</th>
                                        <th class="text-center">{{str_replace('-','/',$message->date)}}</th>
                                        <th class="text-center">{{$message->name}}</th>
                                        <th class="text-center">{{$message->text}}</th>
                                        <th class="text-center">{{$message->email}}</th>
                                        <th class="text-center">{{$message->IP}}</th>
                                        <th class="text-center">
                                            <a href="{{Route('message_delete',['id'=>$message->id])}}">
                                                <span style="color: #d9534f" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center"> {{$messages->links()}} </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">ثبت نامی های دهم</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped" dir="rtl">
                                <thead>
                                <tr class="bg-info">
                                    <th class="text-center">تاریخ ثبت</th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">نام خانوادگی</th>
                                    <th class="text-center">رشته</th>
                                    <th class="text-center">تلفن</th>
                                    <th class="text-center">موبایل</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($r10s as $r10)
                                    <tr>
                                        <th class="text-center">{{str_before(str_replace('-','/',Verta($r10->created_at)),' ')}}</th>
                                        <th class="text-center">{{$r10->f_name}}</th>
                                        <th class="text-center">{{$r10->l_name}}</th>
                                        <th class="text-center">{{$r10->field}}</th>
                                        <th class="text-center">{{$r10->phone}}</th>
                                        <th class="text-center">{{$r10->mobile}}</th>
                                        <th class="text-center">
                                            <a href="{{Route('register_delete',['id'=>$r10->id])}}">
                                                <span style="color: #d9534f" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">ثبت نامی های یازدهم</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped" dir="rtl">
                                <thead>
                                <tr class="bg-info">
                                    <th class="text-center">تاریخ ثبت</th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">نام خانوادگی</th>
                                    <th class="text-center">رشته</th>
                                    <th class="text-center">تلفن</th>
                                    <th class="text-center">موبایل</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($r11s as $r11)
                                    <tr>
                                        <th class="text-center">{{str_before(str_replace('-','/',Verta($r11->created_at)),' ')}}</th>
                                        <th class="text-center">{{$r11->f_name}}</th>
                                        <th class="text-center">{{$r11->l_name}}</th>
                                        <th class="text-center">{{$r11->field}}</th>
                                        <th class="text-center">{{$r11->phone}}</th>
                                        <th class="text-center">{{$r11->mobile}}</th>
                                        <th class="text-center">
                                            <a href="{{Route('register_delete',['id'=>$r10->id])}}">
                                                <span style="color: #d9534f" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">ادمین های سایت</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped" dir="rtl">
                                <thead>
                                <tr class="bg-info">
                                    <th class="text-center">نام کاربری</th>
                                    <th class="text-center">آخرین ورود</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th class="text-center">{{$user->username}}</th>
                                        <th class="text-center">
                                            {{str_after($user->last_login,' ')}}
                                            {{str_replace('-','/',str_before($user->last_login,' '))}}
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <a href="{{Route('news_form')}}">
                            <button type="button" class="btn btn-success">
                                درج محتوا جدید
                            </button>
                        </a>
                        تمام محتواهای درج شده
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($news as $new)
                                <div class="text-right" dir="rtl">
                                    {{$new->title}}
                                    <a href="{{route('news_single',['type'=>$new->type,'id'=>$new->id])}}">
                                        <span class="badge badge-success badge-pill" dir="rtl">
                                            <span style="color:#2c2c2d">
                                                مشاهده
                                            </span>
                                              
                                        </span>
                                    </a>
                                    <span class="badge badge-warning badge-pill" dir="rtl">
                                            <span style="color:#2c2c2d">
                                                @if($new->files)
                                                    {{$new->files}}
                                                @else
                                                    بدون
                                                @endif
                                                عکس
                                            </span>
                                        </span>
                                    @auth
                                        <a href="{{route('news_delete',['id'=>$new->id])}}" onclick="return confirm('از حذف این خبر اطمینان دارید؟')">
                                            <span class="badge badge-danger pull-left badge-pill" dir="rtl">
                                                  حذف خبر
                                            </span>
                                        </a>
                                    @endauth
                                    @if(!$loop->last)
                                        <hr style="background-color:darkseagreen; height:2px;">
                                    @endif
                                </div>

                            @endforeach
                        </div>
                        <div class="text-center"> {{$news->links()}} </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection