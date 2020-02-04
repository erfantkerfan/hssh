@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center row" style="direction: rtl">
            <br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        فرم درج بنر
                    </div>

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                          action="{{ route('slider') }}">
                        {{ csrf_field() }}

                        <div class="panel-body" dir="rtl">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label pull-right">شناساگر بنر:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea dir="rtl" style="resize: none" class="form-control form-group pull-left"
                                              name="name" rows="2" required autofocus>{{ old('name') }}</textarea>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('head') ? ' has-error' : '' }}">
                                <label for="head" class="col-md-2 control-label pull-right">تیتر بنر:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea dir="rtl" style="resize: none" class="form-control form-group pull-left"
                                              name="head" rows="2" autofocus>{{ old('head') }}</textarea>

                                    @if ($errors->has('head'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('head') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-2 control-label pull-right">متن بنر:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea dir="rtl" style="resize: none" class="form-control form-group pull-left"
                                              name="body" rows="2" autofocus>{{ old('body') }}</textarea>

                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="col-md-2 control-label pull-right">لینک بنر:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea style="resize: none" class="form-control form-group pull-left"
                                              name="link" rows="2" autofocus>{{ old('link') }}</textarea>

                                    @if ($errors->has('link'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-5 control-label pull-right">
                                    آپلود عکس:
                                    (با پسوند jpg و کمتر از 3 مگابایت)
                                </label>
                                <div class="col-md-6 col-md-offset-1">
                                    <input type="file" class="form-control" name="file">

                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
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
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-7">--}}
{{--<div class="card">--}}
{{--<div class="card-header text-center">آپلود  اعلامیه</div>--}}
{{--<div class="card-body text-right" dir="rtl">--}}
{{--<form method="POST"  enctype="multipart/form-data" action="{{ route('slider') }}">--}}
{{--{{ csrf_field() }}--}}
{{--<div class="form-group">--}}
{{--<input type="text" class="form-control" name="name" id="name" placeholder="نام اعلامیه" value="{{ old('name') }}">--}}
{{--@if ($errors->has('name'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('name') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="text" class="form-control" name="head" id="head" placeholder="تیتر" value="{{ old('head') }}">--}}
{{--@if ($errors->has('head'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('head') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="text" class="form-control" name="body" id="body" placeholder="متن" value="{{ old('body') }}">--}}
{{--@if ($errors->has('body'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('body') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="file" class="form-control-file" name="file" id="file">--}}
{{--@if ($errors->has('file'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('file') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<button type="submit" class="btn btn-primary">آپلود</button>--}}
{{--نسبت اندازه تصویر و پسوند jpg رعایت شود--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}