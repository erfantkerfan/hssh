@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-6 col-md-offset-3">

            <div class="text-center panel panel-success" dir="rtl">
                <div class="panel-heading">
                    نتایج قرعه کشی
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        {{ csrf_field() }}
                        <div dir="ltr">

                            <div class="form-group{{ $errors->has('erfan') ? ' has-error' : '' }}">
                                <label for="erfan" class="col-md-4 control-label sr-only">عرفان</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="erfan" type="text" class="form-control text-center" name="erfan"
                                           value="{{ 'erfan = '.$erfan }}"
                                           required disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('hossein') ? ' has-error' : '' }}">
                                <label for="hossein" class="col-md-4 control-label sr-only">حسین</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="hossein" type="text" class="form-control text-center" name="hossein"
                                           value="{{ 'hossein = '.$hossein }}"
                                           required disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reza') ? ' has-error' : '' }}">
                                <label for="reza" class="col-md-4 control-label sr-only">رضا</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="reza" type="text" class="form-control text-center" name="reza"
                                           value="{{ 'reza = '.$reza }}"
                                           required disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('alireza') ? ' has-error' : '' }}">
                                <label for="alireza" class="col-md-4 control-label sr-only">علیرضا</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="alireza" type="text" class="form-control text-center" name="alireza"
                                           value="{{ 'alireza = '.$alireza }}"
                                           required disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loser') ? ' has-error' : '' }}">
                                <label for="loser" class="col-md-4 control-label sr-only">علیرضا</label>

                                <div class="col-md-6 col-md-offset-3">
                                    <input id="loser" type="text" class="form-control text-center" name="loser"
                                           style="color: red" value="{{ 'loser = '.$loser }}"
                                           required disabled>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection