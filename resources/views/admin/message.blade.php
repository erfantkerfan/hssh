@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">لیست پیام های دریافتی</div>
            <div class="panel-body">
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
        </div>
    </div>
@endsection