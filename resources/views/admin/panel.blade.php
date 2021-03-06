@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
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
                                                <span style="color: #d9534f" class="glyphicon glyphicon-trash"
                                                      aria-hidden="true"></span>
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

                @foreach($preregisters as $grade)
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" dir="rtl">
                            پیش ثبت نام های {{$grade->garde}}
                            <a href="{{Route('pdf',['id'=>$grade->garde])}}">
                                <button type="button" class="btn btn-sm btn-success">
                                    دانلود pdf
                                </button>
                            </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" dir="rtl">
                                    <thead>
                                    <tr class="bg-info">
                                        <th class="text-center">شماره</th>
                                        <th class="text-center">تاریخ ثبت</th>
                                        <th class="text-center">نام</th>
                                        <th class="text-center">نام خانوادگی</th>
                                        <th class="text-center">رشته</th>
                                        <th class="text-center">منطقه</th>
                                        <th class="text-center">مدرسه</th>
                                        <th class="text-center">معدل</th>
                                        <th class="text-center">پدر</th>
                                        <th class="text-center">مادر</th>
                                        <th class="text-center">منزل</th>
                                        <th class="text-center">دانش آموز</th>
                                        <th class="text-center">پرکننده فرم</th>
                                        <th class="text-center">نحوه آشنایی</th>
                                        <th class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($grade->value as $student)
                                        <tr>
                                            <th class="text-center">{{$loop->iteration}}</th>
                                            <th class="text-center">{{str_before(str_replace('-','/',Verta($student->created_at)),' ')}}</th>
                                            <th class="text-center">{{$student->f_name}}</th>
                                            <th class="text-center">{{$student->l_name}}</th>
                                            <th class="text-center">{{$student->field}}</th>
                                            <th class="text-center">{{$student->district}}</th>
                                            <th class="text-center">{{$student->school}}</th>
                                            <th class="text-center">{{$student->average}}</th>
                                            <th class="text-center">{{$student->father_mobile}}</th>
                                            <th class="text-center">{{$student->mother_mobile}}</th>
                                            <th class="text-center">{{$student->phone}}</th>
                                            <th class="text-center">{{$student->mobile}}</th>
                                            <th class="text-center">{{$student->filler}}</th>
                                            <th class="text-center">{{$student->in_touch}}</th>
                                            <th class="text-center">
                                                <a href="{{Route('register_delete',['id'=>$student->id])}}">
                                                    <span style="color: #d9534f" class="glyphicon glyphicon-trash"
                                                          aria-hidden="true"></span>
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
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
                                        <td class="text-center">{{$user->username}}</td>
                                        <td class="text-center">
                                            @if ($user == Auth::user())
                                                {{Verta::parse($user->last_login)->formatDifference(Verta::now())}}
                                            @else
                                                {{Verta::parse($user->login)->formatDifference(Verta::now())}}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <a href="{{Route('slider')}}">
                            <button type="button" class="btn btn-sm btn-success">
                                درج بنر جدید
                            </button>
                        </a>
                             تمام بنرهای درج شده
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <table class="table table-striped" dir="rtl">
                                <thead>
                                <tr class="bg-info">
                                    <th class="text-center">#</th>
                                    <th class="text-center">شناساگر</th>
                                    <th class="text-center">تیتر</th>
                                    <th class="text-center">متن</th>
                                    <th class="text-center">عکس</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td class="text-center">{{$slider->id}}</td>
                                        <td class="text-center">{{$slider->name}}</td>
                                        <td class="text-center">{{$slider->head}}</td>
                                        <td class="text-center">{{$slider->body}}</td>
                                        <td class="text-center">
                                            <a href="/img/slider/{{$slider->id}}.webp" >
                                                <button type="submit" class="btn btn-sm btn-success">مشاهده</button>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form method="post" action="{{ route('slider') }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <input type="hidden" class="form-control" name="id" id="id"
                                                       value="{{$slider->id}}">
                                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                            </form>
                                        </td>
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
                            <button type="button" class="btn btn-sm btn-success">
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
                                        <span class="label label-success " dir="rtl">
                                            <span style="color:#2c2c2d">
                                                مشاهده
                                            </span>
                                              
                                        </span>
                                    </a>
                                    <span class="label label-warning " dir="rtl">
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
                                        <a href="{{route('news_delete',['id'=>$new->id])}}"
                                           onclick="return confirm('از حذف این خبر اطمینان دارید؟')">
                                            <span class="label label-danger pull-left " dir="rtl">
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

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <a href="{{Route('educational_form')}}">
                            <button type="button" class="btn btn-sm btn-success">
                                درج محتوا آموزشی
                            </button>
                        </a>
                             تمام محتواهای آموزشی
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($educationals as $educational)
                                <div class="text-right" dir="rtl">
                                    {{$educational->title}}
                                    <a href="{{route('educational_single',['type'=>$educational->type,'id'=>$educational->id])}}">
                                        <span class="label label-success " dir="rtl">
                                            <span style="color:#2c2c2d">
                                                مشاهده
                                            </span>
                                              
                                        </span>
                                    </a>
                                    <span class="label label-warning " dir="rtl">
                                            <span style="color:#2c2c2d">
                                                @if($educational->file)
                                                    {{$educational->file}}
                                                @else
                                                    بدون فایل
                                                @endif
                                            </span>
                                        </span>
                                    @auth
                                        <a href="{{route('educational_delete',['id'=>$educational->id])}}"
                                           onclick="return confirm('از حذف این فایل اطمینان دارید؟')">
                                            <span class="label label-danger pull-left " dir="rtl">
                                                  حذف فایل
                                            </span>
                                        </a>
                                    @endauth
                                    @if(!$loop->last)
                                        <hr style="background-color:darkseagreen; height:2px;">
                                    @endif
                                </div>

                            @endforeach
                        </div>
                        <div class="text-center"> {{$educationals->links()}} </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <a href="{{Route('video_form')}}">
                            <button type="button" class="btn btn-sm btn-success">
                                درج محتوا ویدئویی
                            </button>
                        </a>
                             تمام محتواهای ویدئویی
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($videos as $video)
                                <div class="text-right" dir="rtl">
                                    {{$video->title}}
                                    <span class="label label-warning " dir="ltr">
                                            <span style="color:#2c2c2d">
                                                @if($video->file)
                                                    {{$video->file}}
                                                @else
                                                    بدون فایل
                                                @endif
                                            </span>
                                        </span>
                                    @auth
                                        <a href="{{route('video_delete',['id'=>$video->id])}}"
                                           onclick="return confirm('از حذف این فایل اطمینان دارید؟')">
                                            <span class="label label-danger pull-left " dir="rtl">
                                                  حذف فایل
                                            </span>
                                        </a>
                                    @endauth
                                    @if(!$loop->last)
                                        <hr style="background-color:darkseagreen; height:2px;">
                                    @endif
                                </div>

                            @endforeach
                        </div>
                        <div class="text-center"> {{$videos->links()}} </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection