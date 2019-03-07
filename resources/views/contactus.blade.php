@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">

            <div class="col-md-6">
                <div class="text-center panel"  dir="rtl" style="background-color: #DFF0D8;border-radius: 10%">
                    <h4>
                        <b style="color: #3C763D">
                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                            آدرس مدرسه:
                        </b>
                        بزرگراه شیخ فضل الله نوری، بلوار شهید تیموری،
                        <br>
                        <br>
                        خیابان شهید درویش وند، پلاک 30
                        <br>
                        <br>
                        <b style="color: #3C763D">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            شماره تماس مدرسه: 
                        </b>
                        66008864-021
                        <br>
                        <br>
                        <b style="color: #3C763D">
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                            کانال ما در تلگرام:
                        </b>
                        <a href="https://t.me/hsshohada2">hsshohada2@</a>
                        <br>
                        <br>
                    </h4>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9163.39773905597!2d51.343288998879025!3d35.70776085261836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dff96f3a028e9%3A0x7ef61f3805d2abef!2z2K_YqNuM2LHYs9iq2KfZhiDYrdi22LHYqiDYs9uM2K8g2KfZhNi02YfYr9in2LnZhNuM2Ycg2KfZhNiz2YTYp9mFIC0g2K_ZiNix2Ycg2K_ZiNmF!5e0!3m2!1sen!2sus!4v1537965334222" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-6">

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
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                               required autofocus placeholder="ایمیل مثل name@company.com">

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
    </div>
@endsection