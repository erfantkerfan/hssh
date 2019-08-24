@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center row" style="direction: rtl">
            <br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        فرم درج مطلب آموزشی
                    </div>

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                          action="{{ route('educational_create') }}">
                        {{ csrf_field() }}

                        <div class="panel-body" dir="rtl">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-2 control-label pull-right">تیتر مطلب:</label>
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

                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="col-md-2 control-label pull-right">متن مطلب:</label>
                                <div class="col-md-9 col-md-offset-1">
                                    <textarea dir="rtl" style="resize: vertical"
                                              class="form-control form-group pull-left" name="text" rows="5"
                                              autofocus>{{ old('text') }}</textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('text') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="control-label sr-only">نوع</label>

                                <div class="col-md-3 col-md-offset-4">
                                    <select id="type" type="text" class="form-control" name="type" autofocus>
                                        <option value="" selected>انتخاب کنید</option>
                                        <option value="501">نمونه سوالات ریاضی دهم</option>
                                        <option value="504">نمونه سوالات تجربی دهم</option>
                                        <option value="505">نمونه سوالات ریاضی یازدهم</option>
                                        <option value="506">نمونه سوالات تجربی یازدهم</option>
                                        <option value="502">مشاوره</option>
                                        <option value="503">برنامه نویسی</option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-5 control-label pull-right">
                                    آپلود فایل:
                                    (با هر پسوند کمتر از 50 مگابایت)
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
                                    ثبت مطلب
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection