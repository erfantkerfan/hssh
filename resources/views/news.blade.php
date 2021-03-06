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
            </div>
        </div>
    </div>
@endsection