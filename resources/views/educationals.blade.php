@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        {{ $title }}
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($educationals as $educational)
                                <div class="text-right" dir="rtl">
                                    {{$educational->title}}
                                    <a href="{{route('educational_single',['type'=>$educational->type,'id'=>$educational->id])}}">
                                        <span class="badge badge-success badge-pill" dir="rtl">
                                            <span style="color:#2c2c2d">
                                                مشاهده
                                            </span>
                                        </span>
                                    </a>
                                    <span class="badge badge-warning badge-pill" dir="rtl">
                                            <span style="color:#2c2c2d">
                                                @if($educational->file)
                                                    فایل با پسوند
                                                    {{$educational->file}}
                                                @else
                                                    بدون فایل
                                                @endif
                                            </span>
                                        </span>
                                    @auth
                                        <a href="{{route('educational_delete',['id'=>$educational->id])}}" onclick="return confirm('از حذف این مطلب اطمینان دارید؟')">
                                            <span class="badge badge-danger pull-left badge-pill" dir="rtl">
                                                  حذف مطلب
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
            </div>
        </div>
    </div>
@endsection