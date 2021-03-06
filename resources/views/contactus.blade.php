@extends('layouts.app')

@section('content')
    <style>
        .fa {

        }

        .fa:hover {
            opacity: 0.7;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: grey;
            color: white;
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="col-md-12">

            <div class="col-md-6">
                <div class="text-center panel" dir="rtl" style="background-color: #DFF0D8;border-radius: 10%">
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

                        <b style="color: #2EA1D8">
                            <span class="fa fa-telegram" aria-hidden="true"></span>
                            کانال ما در تلگرام:
                        </b>
                        <a href="tg://resolve?domain=hsshohada2">hsshohada2@</a>
                        <br>
                        <br>

                        <b style="color: #D92B85">
                            <span class="fa fa-instagram" aria-hidden="true"></span>
                            صفحه ما در اینستاگرام:
                        </b>
                        <a href="https://www.instagram.com/hsshohada/">hsshohada</a>
                        <br>
                        <br>
                    </h4>
                </div>
                <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5448.517938528335!2d51.34771491302115!3d35.70879892289547!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e4a4a6858f3cc34!2z2K_YqNuM2LHYs9iq2KfZhiDYs9uM2K_Yp9mE2LTZh9iv2KcgKCDYuSkg2YXYqtmI2LPYt9mHINiv2YjZhQ!5e0!3m2!1sen!2sus!4v1570090668979!5m2!1sen!2sus"
                        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-6">

                <div class="text-center panel panel-success" dir="rtl">
                    <div class="panel-heading">
                        فرم تماس با ما
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('message_create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label sr-only">نام و نام خانوادگی</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}"
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
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}"
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
                                    <textarea placeholder="متن پیام شما" dir="rtl" style="resize: vertical"
                                              class="form-control" name="text" rows="5"
                                              autofocus>{{ old('text') }}</textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}"
                                 dir="ltr">
                                <label class="col-md-4 control-label sr-only">ربات نیستم</label>
                                {{--<div class="col-md-8 col-md-offset-2" style="overflow:hidden">--}}
                                <div class="col-md-8 col-md-offset-2">
                                    <div data-sitekey="{{ config('services.captcha.NOCAPTCHA_SITEKEY') }}"
                                         class="g-recaptcha"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
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


    <footer class="footer">
        <strong>
            طراحی توسط
            <span class="glyphicon glyphicon-copyright-mark"></span>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Erfan_Gholizade">
                عرفان قلی زاده
            </button>
            1397
        </strong>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Erfan_Gholizade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">تماس با من</h4>
                </div>
                <div class="modal-body">
                    <a style="text-decoration: none" href="tg://resolve?domain=erfantkerfan">
                        <p>
                            <span class="fa fa-telegram"
                                  style="padding: 20px; font-size: 30px; width: 30px; text-align: center; text-decoration: none; margin: 10px 10px; border-radius: 50%;background: white; color: #55ACEE;"></span>
                                                تلگرام       
                                    erfantkerfan
                        </p>
                    </a>

                    <a style="text-decoration: none" href="mailto:erfantkerfan@yahoo.com?subject=طراحی سایت">
                        <p>
                        <span class="fa fa-yahoo"
                              style="padding: 20px; font-size: 30px; width: 30px; text-align: center; text-decoration: none; margin: 10px 10px; border-radius: 50%;background: white; color: #430297;"></span>
                                                ایمیل       
                                    erfantkerfan@yahoo.com
                        </p>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection