<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{mix("/css/app.css")}}" rel="stylesheet" type="text/css">
    <style type="text/css">
        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
<h5 style="text-align: center;">
    لیست پیش ثبت نام های
    {{$grade}}
</h5>

<table class="table table-striped" dir="rtl">
    <thead>
    <tr class="bg-info">
        <th>شماره</th>
        <th>تاریخ ثبت</th>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>رشته</th>
        <th>منطقه</th>
        <th>مدرسه</th>
        <th>معدل</th>
        <th>پدر</th>
        <th>مادر</th>
        <th>منزل</th>
        <th>دانش آموز</th>
        <th>پرکننده فرم</th>
        <th>نحوه آشنایی</th>
    </tr>
    </thead>
    <tbody>
    @foreach($preregisters as $student)
        <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{str_before(str_replace('-','/',Verta($student->created_at)),' ')}}</th>
            <th>{{$student->f_name}}</th>
            <th>{{$student->l_name}}</th>
            <th>{{$student->field}}</th>
            <th>{{$student->district}}</th>
            <th>{{$student->school}}</th>
            <th>{{$student->average}}</th>
            <th>{{$student->father_mobile}}</th>
            <th>{{$student->mother_mobile}}</th>
            <th>{{$student->phone}}</th>
            <th>{{$student->mobile}}</th>
            <th>{{$student->filler}}</th>
            <th>{{$student->in_touch}}</th>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>