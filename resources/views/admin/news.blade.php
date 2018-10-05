@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center row" style="direction: rtl">
            <br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        فرم درج خبر
                    </div>

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('news_create') }}">
                        {{ csrf_field() }}

                            <div class="panel-body" dir="rtl">

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-2 control-label pull-right">تیتر خبر:</label>
                                    <div class="col-md-9 col-md-offset-1">
                                        <textarea dir="rtl" style="resize: vertical" class="form-control form-group pull-left" name="title" rows="2" required autofocus>{{ old('title') }}</textarea>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                    <label for="text" class="col-md-2 control-label pull-right">متن خبر:</label>
                                    <div class="col-md-9 col-md-offset-1">
                                        <textarea dir="rtl" style="resize: vertical" class="form-control form-group pull-left" name="text" rows="5" autofocus>{{ old('text') }}</textarea>

                                        @if ($errors->has('text'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('text') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div  class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label for="type" class="control-label sr-only">نوع</label>

                                    <div class="col-md-2 col-md-offset-5" >
                                        <select id="type" type="text" class="form-control" name="type" autofocus>
                                            <option value="" selected>انتخاب کنید</option>
                                            {{--<option value="201">خبر</option>--}}
                                            <option value="301">گالری:اردو</option>
                                            <option value="302">گالری:مراسم</option>
                                            <option value="303">گالری:فوق برنامه</option>
                                            <option value="304">گالری:جلسات</option>
                                            <option value="305">گالری:سایر</option>
                                            <option value="401">پرورشی:خبردار</option>
                                            <option value="402">پرورشی:قرآن کریم</option>
                                            <option value="403">پرورشی:راه بندگی</option>
                                            <option value="404">پرورشی:همکلاسی آسمانی</option>
                                            <option value="405">پرورشی:نوجوان</option>
                                            <option value="406">پرورشی:مسابقه فرهنگی</option>
                                            <option value="407">پرورشی:مسابقه علمی</option>
                                        </select>

                                        @if ($errors->has('grade'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('grade') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                                    <label for="img" class="col-md-5 control-label pull-right">
                                        آپلود عکس:
                                        (با پسوند jpg و مجموعا کمتر از 50 مگابایت)
                                    </label>
                                    <div class="col-md-6 col-md-offset-1">
                                        <input type="file" class="form-control" name="img[]" multiple>

                                        @if ($errors->has('img'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('img') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success">
                                        ثبت اطلاعات
                                    </button>
                                </div>

                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection