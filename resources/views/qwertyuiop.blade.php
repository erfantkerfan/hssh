@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading text-center">خلاصه وضعیت با احتساب تراکنش های تایید شده</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr class="bg-info">
                    <th class="text-center">شماره ردیف</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">نام خانوادگی</th>
                    <th class="text-center">پایه</th>
                    <th class="text-center">رشته</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ss as $s)
                <tr>
                    <th class="text-center">{{$s->id}}</th>
                    <th class="text-center">{{$s->f_name}}</th>
                    <th class="text-center">{{$s->l_name}}</th>
                    <th class="text-center">{{$s->grade}}</th>
                    <th class="text-center">{{$s->field}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection