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
                        <div class="">

                            <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
                                <label for="f_name" class="col-md-4 control-label sr-only">نام</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}"
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

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="l_name" type="text" class="form-control" name="l_name" value="{{ old('l_name') }}"
                                           required autofocus placeholder="نام خانوادگی به فارسی">

                                    @if ($errors->has('l_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <label for="grade" class="col-md-4 control-label sr-only">پایه تحصیلی</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <select id="grade" type="text" class="form-control" name="grade" required autofocus>
                                        <option value="" selected>پایه تحصیلی را انتخاب کنید</option>
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

                                <div class="col-md-6 col-md-offset-3">
                                    <select id="field" type="text" class="form-control" name="field" required autofocus>
                                        <option value="" selected>رشته تحصیلی را انتخاب کنید</option>
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

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label sr-only">شماره ثابت</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                           required autofocus placeholder="شماره تماس 66666666">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="col-md-4 control-label sr-only">شماره موبایل</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}"
                                           required autofocus placeholder="شماره موبایل 09120000000">

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="text-center text-danger">
                            در صورت ثبت نام موفق به صفحه اصلی باز خواهید گشت و از ثبت نام مجدد خودداری کنید.
                            <br>
                            <br>
                        </div>

                        <div class="form-group  col-md-12">
                            <button type="submit" class="btn btn-success">
                                ثبت اطلاعات
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection