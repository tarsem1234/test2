@extends('frontend.layouts.app')
@section ('title', ('Contact Us'))
@section('after-styles')
{{ Html::style(mix('css/contact.css')) }}
@endsection  
@section('content')
<style>
    #cap_error { display: none; }
</style>
<div class="contact-page body-color"> 
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="contact-banner">
                        <div class="text">Contact</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div id="form_text_main">
                    <div class="row">
                        <div class="head-img">
                        </div>
                    </div>
                    <h2>How can we help?</h2>
                    
                    </br>

                    <div class="">
                        {{ Form::open(['route' => 'frontend.contact.send', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <div class="col-md-4">
                                {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.name')]) }}
                            </div><!--col-md-4-->
                            <div class="col-md-4">
                                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                            </div><!--col-md-4-->
                            <div class="col-md-4">
                                {{ Form::number('phone', '', ['class' => 'form-control',  'min="0"', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.phone')]) }}
                            </div><!--col-md-4-->
                        </div><!--form-group-->
                        <div class="form-group address">               
                            <div class="col-md-12">
                                {{ Form::text('address', null, ['class' => 'form-control text-height', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.address')]) }}
                            </div><!--col-md-12-->
                        </div><!--form-group--> 
                        <div class="form-group">               
                            <div class="col-md-12">
                                {{ Form::textarea('comment', null, ['class' => 'form-control text-height', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.comment')]) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        @if (config('access.captcha.registration'))
                        <div class="form-group contact-captcha">
                            <div class="col-md-4 col-md-offset-0">
                                {!! NoCaptcha::display() !!}
                                {{ Form::hidden('captcha_status', 'true') }}
                            </div><!--col-md-6-->
                            <div id="captchaError"></div>
                        </div><!--form-group-->
                        @endif
                        <div class="form-group">
                            <div class="col-md-12">
                                {{ Form::submit(trans('labels.frontend.contact.button'), ['class' => 'contact-button']) }}
                            </div><!--col-md-12-->
                        </div><!--form-group-->
                        {{ Form::close() }}
                    </div><!-- panel body -->
                </div><!-- panel -->
            </div><!-- col-md-12 -->
        </div>
        </div><!-- con-md-12 -->
        
            <div class="container location">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="left-div">             
                    <div class="icon-text">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <h4>Location</h4>
                        <p>NARWHAL REALTY, INC Resident Agents Inc.8 The Green, STE R Dover, DE 19901</p>                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-div">             
                    <div class="icon-text">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p>info@freezylist.com</p>                       
                    </div>
                </div>
            </div>    
        </div>
    </div>
        
</div>
@endsection

@section('after-scripts')
<script>
    $(document).ready(function(){
        $('form').validate({
            rules: {
                email: {
                    email: true
                }
            },
            messages: {
                name: "Please fill your name",
                email: {
                    required: "Please fill your email id",
                    email: "Please enter correct email id"
                },
                phone: "Please enter your phone number",
                address: "Please fill your address",
                comment: "Please enter a few lines"
            }
        });
        $('form').on('submit', function(e) {
            if(grecaptcha.getResponse() == "") {
                e.preventDefault();
//                console.log("hi");
                $('#captchaError').html('<label class="error">Please prove you are not a Robot</label>');
            } else {
                $('#captchaError').hide();
            }
        });
//        $('.recaptcha-checkbox').click(function(){
//            if($(this).hasClass('recaptcha-checkbox-checked')){
//                $('#captchaError').hide();
//            } else { }
//        });

//        var iFrameElem = $('.g-recaptcha iframe').contents();
//        iFrameElem.find($('.recaptcha-checkbox')).click(function(){
//            console.log("abc");
//        });

    });
    var recaptchaCallback = function () {
        console.log('recaptcha is ready'); // showing
        grecaptcha.render("recaptcha", {
            sitekey: '6Ldn9GgUAAAAABCm-PeXaauq8WqXpvaH0RRRkJw_',
            callback: function () {
                console.log('recaptcha callback');
            }
        });
    }
</script>
@if (config('access.captcha.registration'))
{!! NoCaptcha::renderJs('recaptcha_callback') !!}
<script>
    function recaptcha_callback() {
        $('#captchaError').hide();
    }
</script>
@endif
@endsection
