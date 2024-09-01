@extends('frontend.layouts.app')
@section('title', app_name() . ' | Login')
@section('after-styles')
{{ Html::style(mix('css/login.css')) }}
@endsection 
@section('content')
<div class="login-page">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="login-banner">
                        <div class="text">XmlFeed Login</div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default1">
                    @if(isset($error))
                    <div class="alert alert-danger">
                        <strong>Failed:</strong> {{$error}}
                    </div>
                    @endif
                    <div class="panel-heading"><span class="black-text">Sign In</span></div>
                    <div class="">
                        {{ Form::open(['route' => 'frontend.xmlfeed', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                {{ Form::text('username', null,['class' => 'form-control icon-padding','max-length'=>'191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.username')]) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                {{ Form::password('password', ['class' => 'form-control icon-padding', 'max-length'=>'191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        <div class="form-group">
                            <div class="col-md-12">
                                {{ Form::submit('Sign In', ['class' => 'log-in-button', 'style' => '']) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        {{ Form::close() }}
                    </div><!-- panel body -->
                </div><!-- panel -->
            </div> 
        </div> <!-- row -->
    </div><!-- container -->
</div><!-- login -->
@endsection