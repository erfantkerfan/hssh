@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading text-center">لیست مخفی ثبت نامی ها بدون شماره</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr class="bg-info">
                    <th class="text-center">شماره ردیف دیتابیس</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">نام خانوادگی</th>
                    <th class="text-center">پایه</th>
                    <th class="text-center">رشته</th>
                    <th class="text-center">تلفن</th>
                    <th class="text-center">موبایل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <th class="text-center">{{$user->id}}</th>
                    <th class="text-center">{{$user->f_name}}</th>
                    <th class="text-center">{{$user->l_name}}</th>
                    <th class="text-center">{{$user->grade}}</th>
                    <th class="text-center">{{$user->field}}</th>
                    <th class="text-center">{{$user->phone}}</th>
                    <th class="text-center">{{$user->mobile}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection