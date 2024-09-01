@extends('frontend.layouts.app')
@section('title', app_name() . ' | Login')
@section('after-styles')
{{ Html::style(mix('css/login.css')) }}
@endsection 
@section('content')
<div class="login-page">
    <!--<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="login-banner">
                        <div class="text">Login</div>
                    </div>
                </div>
            </div>
        </div> 
    </div>-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default1">
                    <div class="panel-heading"><span class="black-text"> Welcome to</span> Freezylist</div> 
                    <div class="">
                        {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <span class="col-md-12 text text-danger">{{implode('<br>', $errors->get('email'))}}</span>
                            <div class="col-md-12">
                                <span class="input-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                {{ Form::email('email', null, ['class' => 'form-control icon-padding', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                                @if(count($errors->get('email')) > 0)
                                
                                @endif
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                {{ Form::password('password', ['class' => 'form-control icon-padding', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                                @if(count($errors->get('password')) > 0)
                                <span class="text text-danger">{{implode('<br>', $errors->get('password'))}}</span>
                                @endif
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="forget">
                                    {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
                                </div>
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                {{ Form::submit('Sign In', ['class' => 'log-in-button', 'style' => '']) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="signup-text pull-left" href="{{ route('frontend.userCreate') }}">Create User Account</a>
                                <a class="signup-text pull-right" href="{{ route('frontend.businessCreate') }}">Register My Business</a>
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        {{ Form::close() }}
                        <div class="row text-center">
                            {!! $socialite_links !!}
                        </div>
                    </div><!-- panel body -->
                </div><!-- panel -->
            </div> 
        </div> <!-- row -->
    </div><!-- container -->
</div><!-- login -->
@endsection
@section('after-scripts')
<script>
    $(document).ready(function () {
        $('form').validate({
            rules: {
                email: true
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter valid email address"
                },
                password: "Please enter your password"
            }
        });
    });
</script>
@endsection