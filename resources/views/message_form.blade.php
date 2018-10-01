@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="text-center panel panel-success" dir="rtl">
                <div class="panel-heading">
                    فرم تماس با ما
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('message_create') }}">
                        {{ csrf_field() }}
                        <div class="">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label sr-only">نام و نام خانوادگی</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                           required autofocus placeholder="نام و نام خانوادگی به فارسی">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label sr-only">ایمیل</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="email" dir="ltr" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                           required autofocus placeholder="مثل name@company.com">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="col-md-1 control-label pull-right sr-only">متن پیام شما</label>
                                <div class="col-md-8 col-md-offset-2">
                                    <textarea  placeholder="متن پیام شما" dir="rtl" style="resize: vertical" class="form-control" name="text" rows="5" autofocus>{{ old('text') }}</textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('text') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="text-center text-danger">
                            در صورت ارسال پیام موفق به صفحه اصلی باز خواهید گشت و از ارسال مجدد خودداری کنید.
                            <br>
                        </div>
                        <div class="text-center text-danger">
                            پاسخ پیام شما به ایمیل شما ارسال خواهد شد.
                            <br>
                            <br>
                        </div>

                        <div class="form-group  col-md-12">
                            <button type="submit" class="btn btn-success">
                                ثبت پیام
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection