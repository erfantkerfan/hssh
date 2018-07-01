@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading text-center">ثبت نامی های دهم</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr class="bg-info">
                    <th class="text-center">شماره ردیف دیتابیس</th>
                    <th class="text-center">تاریخ ثبت</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">نام خانوادگی</th>
                    <th class="text-center">رشته</th>
                    <th class="text-center">تلفن</th>
                    <th class="text-center">موبایل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($r10s as $r10)
                <tr>
                    <th class="text-center">{{$r10->id}}</th>
                    <th class="text-center">{{str_replace(' ','   ',str_replace('-','/',Verta($r10->created_at)))}}</th>
                    <th class="text-center">{{$r10->f_name}}</th>
                    <th class="text-center">{{$r10->l_name}}</th>
                    <th class="text-center">{{$r10->field}}</th>
                    <th class="text-center">{{$r10->phone}}</th>
                    <th class="text-center">{{$r10->mobile}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading text-center">ثبت نامی های یازدهم</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr class="bg-info">
                    <th class="text-center">شماره ردیف دیتابیس</th>
                    <th class="text-center">تاریخ ثبت</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">نام خانوادگی</th>
                    <th class="text-center">رشته</th>
                    <th class="text-center">تلفن</th>
                    <th class="text-center">موبایل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($r11s as $r11)
                    <tr>
                        <th class="text-center">{{$r11->id}}</th>
                        <th class="text-center">{{str_replace(' ','   ',str_replace('-','/',Verta($r11->created_at)))}}</th>
                        <th class="text-center">{{$r11->f_name}}</th>
                        <th class="text-center">{{$r11->l_name}}</th>
                        <th class="text-center">{{$r11->field}}</th>
                        <th class="text-center">{{$r11->phone}}</th>
                        <th class="text-center">{{$r11->mobile}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection