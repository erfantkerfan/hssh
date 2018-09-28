@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        اخبار دبیرستان
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($news as $new)
                                <div class="text-right" dir="rtl">
                                    {{$new->title}}
                                    <a href="{{route('news_single',['id'=>$new->id])}}">
                                        <span class="badge badge-success badge-pill" dir="rtl">
                                            <span style="color:#2c2c2d">
                                                مشاهده خبر
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