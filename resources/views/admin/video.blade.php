@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center row" style="direction: rtl">
            <br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        فرم درج مطلب ویدئویی
                    </div>

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                          action="{{ route('video_create') }}">
                        {{ csrf_field() }}

                        <div class="panel-body" dir="rtl">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-2 control-label pull-right">تیتر ویدئو:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea dir="rtl" style="resize: vertical"
                                              class="form-control form-group pull-left" name="title" rows="2" required
                                              autofocus>{{ old('title') }}</textarea>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-4 control-label pull-right">
                                    نام فایل ویدئویی با پسوند:
                                    <br>
                                    (قبلا روی سرور آپلود شده باشد)
                                </label>

                                <div class="col-md-7 col-md-offset-1">
                                    <textarea dir="ltr" style="resize: none"
                                              class="form-control form-group pull-left" name="file" rows="2" required
                                              autofocus>{{ old('file') }}</textarea>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="control-label sr-only">نوع</label>

                                <div class="col-md-3 col-md-offset-4">
                                    <select id="type" type="text" class="form-control" name="type" autofocus>
                                        <option value="" selected>انتخاب کنید</option>
                                        <option value="9">فایل های ویدئویی آزمون ورودی</option>
                                        <option value="10">فایل های ویدئویی دهم</option>
                                        <option value="11">فایل های ویدئویی یازدهم</option>
                                        <option value="12">فایل های ویدئویی دوازدهم</option>
                                        <option value="99">فایل های ویدئویی متفرقه</option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success">
                                    ثبت ویدئو
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection