@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">

            <div class="col-md-6 text-center panel" dir="rtl" style="background-color: #d0d2db">
                <h4>
                    <b style="color: #0062cc">
                        آدرس مدرسه:
                    </b>
                    بزرگراه شیخ فضل الله نوری، بلوار شهید تیموری،
                    <br>
                    <br>
                    خیابان شهید درویش وند، پلاک 30
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        شماره تماس مدرسه: 
                    </b>
                    66008864-021
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        شماره تماس: 
                    </b>
                    09106776236
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        :لینک کانال در پیام رسان سروش
                    </b>
                    <a href="https://sapp.ir/hsshohada2">@hsshohada2</a>
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        :لینک کانال در پیام رسان بله
                    </b>
                    <a href="https://ble.im/hsshohada2">@hsshohada2</a>
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        :لینک کانال در روبیکا
                    </b>
                    <a href="http://rubika.ir/hsshohada2">@hsshohada2</a>
                    <br>
                    <br>
                    <b style="color: #0062cc">
                        :لینک کانال در پیام رسان تلگرام
                    </b>
                    <a href="https://t.me/hsshohada2">@hsshohada2</a>
                    <br>
                    <br>
                </h4>
            </div>

            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9163.39773905597!2d51.343288998879025!3d35.70776085261836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dff96f3a028e9%3A0x7ef61f3805d2abef!2z2K_YqNuM2LHYs9iq2KfZhiDYrdi22LHYqiDYs9uM2K8g2KfZhNi02YfYr9in2LnZhNuM2Ycg2KfZhNiz2YTYp9mFIC0g2K_ZiNix2Ycg2K_ZiNmF!5e0!3m2!1sen!2sus!4v1537965334222" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-1 col-md-offset-2">
                <a href="{{Route('message_form')}}">
                    <button name="online_payment" value="1" type="submit" class="btn btn-success">
                        ارسال پیام به ما
                    </button>
                </a>
            </div>

        </div>
    </div>
@endsection