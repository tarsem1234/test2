@extends('frontend.layouts.app')
@section ('title', ('Change-Password'))
@section('after-styles')
{{ Html::style(mix('css/login.css')) }}
@endsection 
@section('content')
<div class="login-page password dashboard-page register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default1">
                    <div class="panel-heading"><span class="black-text">Change</span> Password</div>
                    <div class="">
                        {{ Form::open(['route' => ['frontend.password.change'], 'class' => 'form-horizontal', 'method' => 'post']) }}
                        <!--{{ Form::label('old_password', trans('validation.attributes.frontend.old_password'), ['class' => 'col-md-4 control-label']) }}-->
                        <div class="form-group">
                            <div class="col-md-12">
                                {{ Form::password('old_password', ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.old_password')]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <!--{{ Form::label('password', trans('validation.attributes.frontend.new_password'), ['class' => 'col-md-4 control-label']) }}-->
                            <div class="col-md-12">
                                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.new_password')]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <!--{{ Form::label('password_confirmation', trans('validation.attributes.frontend.new_password_confirmation'), ['class' => 'col-md-4 control-label']) }}-->
                            <div class="col-md-12">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.new_password_confirmation')]) }}
                            </div>
                        </div>
                        <div class="form-group text-center btns-green-blue">
                            <div class="col-md-12">
                                {{ Form::submit(trans('labels.general.buttons.update'), ['class' => 'log-in-button', 'id' => 'change-password']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('after-scripts')
<script>

$(document).ready(function () {
    $('form').validate({
        rules: {
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            }
        },
        messages: {
            old_password: {
                required: "Please fill in your old password"
            },
            password: {
                required: "Please fill in the password",
                minlength: "Password must be atleast 6 characters long"
            },
            password_confirmation: {
                required: "Please fill password again",
                minlength: "Password must be atleast 6 characters long",
                equalTo: "Please enter the same password as above"
            }
        }
    });
});

</script>
@endsection