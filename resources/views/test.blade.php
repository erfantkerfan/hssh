@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-6 col-md-offset-3">

            <div class="text-center panel panel-success" dir="rtl">
                <div class="panel-heading">
                    فرم قرعه کشی
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('minimilitia') }}">
                        {{ csrf_field() }}
                        <div dir="ltr">

                            {{--<div class="form-group{{ $errors->has('perperson') ? ' has-error' : '' }}">--}}
                                {{--<label for="perperson" class="col-md-4 control-label sr-only">عرفان</label>--}}

                                {{--<div class="col-md-6 col-md-offset-3">--}}
                                    {{--<input id="perperson" type="number" class="form-control text-center" name="perperson" value="{{ old('perperson') }}"--}}
                                           {{--required autofocus placeholder="perperson">--}}

                                    {{--@if ($errors->has('perperson'))--}}
                                        {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('perperson') }}</strong>--}}
                                {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group{{ $errors->has('erfan') ? ' has-error' : '' }}">
                                <label for="erfan" class="col-md-4 control-label sr-only">عرفان</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="erfan" type="number" class="form-control text-center" name="erfan" value="{{ old('erfan') }}"
                                           required autofocus placeholder="عرفان">

                                    @if ($errors->has('erfan'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('erfan') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('hossein') ? ' has-error' : '' }}">
                                <label for="hossein" class="col-md-4 control-label sr-only">حسین</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="hossein" type="number" class="form-control text-center" name="hossein" value="{{ old('hossein') }}"
                                           required autofocus placeholder="حسین">

                                    @if ($errors->has('hossein'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('hossein') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reza') ? ' has-error' : '' }}">
                                <label for="reza" class="col-md-4 control-label sr-only">رضا</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="reza" type="number" class="form-control text-center" name="reza" value="{{ old('reza') }}"
                                           required autofocus placeholder="رضا">

                                    @if ($errors->has('reza'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('reza') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('alireza') ? ' has-error' : '' }}">
                                <label for="alireza" class="col-md-4 control-label sr-only">علیرضا</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="alireza" type="number" class="form-control text-center" name="alireza" value="{{ old('alireza') }}"
                                           required autofocus placeholder="علیرضا">

                                    @if ($errors->has('alireza'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('alireza') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group  col-md-12">
                            <button type="submit" class="btn btn-success">
                                قرعه کشی
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection