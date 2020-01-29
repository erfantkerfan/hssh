@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="text-center panel panel-success" dir="rtl">
                <div class="panel-heading">
                    فرم پیش ثبت نام دبیرستان
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-6">

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label sr-only">شماره تماس ثابت</label>

                                <div class="col-md-12">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                           value="{{ old('phone') }}"
                                           required autofocus placeholder="شماره تماس ثابت 66666666">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_mobile') ? ' has-error' : '' }}">
                                <label for="father_mobile" class="col-md-4 control-label sr-only">شماره موبایل
                                    پدر</label>

                                <div class="col-md-12">
                                    <input id="father_mobile" type="text" class="form-control" name="father_mobile"
                                           value="{{ old('father_mobile') }}"
                                           required autofocus placeholder="شماره موبایل پدر 09120000000">

                                    @if ($errors->has('father_mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('father_mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_mobile') ? ' has-error' : '' }}">
                                <label for="mother_mobile" class="col-md-4 control-label sr-only">شماره موبایل
                                    مادر</label>

                                <div class="col-md-12">
                                    <input id="mother_mobile" type="text" class="form-control" name="mother_mobile"
                                           value="{{ old('mother_mobile') }}"
                                           required autofocus placeholder="شماره موبایل مادر 09120000000">

                                    @if ($errors->has('mother_mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mother_mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="col-md-4 control-label sr-only">شماره موبایل دانش
                                    آموز</label>

                                <div class="col-md-12">
                                    <input id="mobile" type="text" class="form-control" name="mobile"
                                           value="{{ old('mobile') }}"
                                           autofocus placeholder="شماره موبایل دانش آموز (اختیاری)">

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('in_touch') ? ' has-error' : '' }}">
                                <label for="in_touch" class="col-md-4 control-label sr-only">نحوه آشنایی با
                                    مجموعه</label>

                                <div class="col-md-12">
                                    <input id="in_touch" type="text" class="form-control" name="in_touch"
                                           value="{{ old('in_touch') }}"
                                           required autofocus placeholder="نحوه آشنایی با مجموعه">

                                    @if ($errors->has('in_touch'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('in_touch') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('filler') ? ' has-error' : '' }}">
                                <label for="filler" class="col-md-4 control-label sr-only">تکمیل کننده فرم</label>

                                <div class="col-md-12">
                                    <select id="filler" type="text" class="form-control" name="filler" required
                                            autofocus>
                                        <option value="" selected>تکمیل کننده فرم</option>
                                        <option value="مادر">مادر</option>
                                        <option value="پدر">پدر</option>
                                        <option value="دانش آموز">دانش آموز</option>
                                    </select>

                                    @if ($errors->has('filler'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('filler') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
                                <label for="f_name" class="col-md-4 control-label sr-only">نام</label>

                                <div class="col-md-12">
                                    <input id="f_name" type="text" class="form-control" name="f_name"
                                           value="{{ old('f_name') }}"
                                           required autofocus placeholder="نام به فارسی">

                                    @if ($errors->has('f_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('l_name') ? ' has-error' : '' }}">
                                <label for="l_name" class="col-md-4 control-label sr-only">نام خانوادگی</label>

                                <div class="col-md-12">
                                    <input id="l_name" type="text" class="form-control" name="l_name"
                                           value="{{ old('l_name') }}"
                                           required autofocus placeholder="نام خانوادگی به فارسی">

                                    @if ($errors->has('l_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                                <label for="district" class="col-md-4 control-label sr-only">منطقه محل سکونت</label>

                                <div class="col-md-12">
                                    <input id="district" type="text" class="form-control" name="district"
                                           value="{{ old('district') }}"
                                           required autofocus placeholder="منطقه محل سکونت">

                                    @if ($errors->has('district'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                                <label for="school" class="col-md-4 control-label sr-only">دبیرستان فعلی محل
                                    تحصیل</label>

                                <div class="col-md-12">
                                    <input id="school" type="text" class="form-control" name="school"
                                           value="{{ old('school') }}"
                                           required autofocus placeholder="دبیرستان فعلی محل تحصیل">

                                    @if ($errors->has('school'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('average') ? ' has-error' : '' }}">
                                <label for="average" class="col-md-4 control-label sr-only">معدل نیم سال اول</label>

                                <div class="col-md-12">
                                    <input id="average" type="text" class="form-control" name="average"
                                           value="{{ old('average') }}"
                                           required autofocus placeholder="معدل نیم سال اول">

                                    @if ($errors->has('average'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('average') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <label for="grade" class="col-md-4 control-label sr-only">پایه تحصیلی</label>

                                <div class="col-md-12">
                                    <select id="grade" type="text" class="form-control" name="grade" required autofocus>
                                        <option value="" selected>پایه تحصیلی</option>
                                        <option value="دهم">دهم</option>
                                        <option value="یازدهم">یازدهم</option>
                                        <option value="دوازدهم">دوازدهم</option>
                                    </select>

                                    @if ($errors->has('grade'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('field') ? ' has-error' : '' }}">
                                <label for="field" class="col-md-4 control-label sr-only">رشته تحصیلی</label>

                                <div class="col-md-12">
                                    <select id="field" type="text" class="form-control" name="field" required autofocus>
                                        <option value="" selected>رشته تحصیلی</option>
                                        <option value="ریاضی">ریاضی</option>
                                        <option value="تجربی">تجربی</option>
                                    </select>

                                    @if ($errors->has('field'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('field') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(env("APP_ENV")!="local")
                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <label class="justify-content-center control-label sr-only">ربات نیستم</label>
                                <div class="col-md-10 justify-content-center">
                                    <div data-sitekey="{{ config('services.captcha.NOCAPTCHA_SITEKEY') }}" class="g-recaptcha"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="form-group  col-md-12">
                            <button type="submit" class="btn btn-success">
                                ثبت نام اولیه
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection