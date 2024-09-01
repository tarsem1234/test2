{{ Form::open(['route' => 'frontend.contact.send','class' => 'form-horizontal form-we-help-you','files' => 'true']) }}
@include('frontend.common-home-icon.common_home_icon')
<div class="form-div"> 
   <div class="container">
      <div class="heading">
         <h2>How can we help?</h2> 
         <!--<p>Let's Talk</p>-->
      </div>
      <div class="row inputs-field-textarea">
         <div class="col-sm-12 input-text-row">
            <div class="col-sm-6 col-xs-12 input-text">
               {{ Form::text('name', null,  ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Name']) }}
            </div>
            <div class="col-sm-6 col-xs-12 input-text">
               {{ Form::text('email', null,  ['class' => 'form-control ', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Email']) }}
            </div>
         </div>
         <div class="col-sm-12 input-text-row">
            <div class="col-sm-6 col-xs-12 input-text">
               {{ Form::number('phone', null,  ['class' => 'form-control ', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Phone']) }}
            </div>
            <div class="col-sm-6 col-xs-12 input-text">
               {{ Form::text('address', null,  ['class' => 'form-control ', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Address']) }}
            </div>
         </div>
         <div class="col-sm-12 textarea-comment">
            {{ Form::textarea('comment', null,['class' => 'form-control ', 'required' => 'required' , 'placeholder' => 'Comment']) }}
         </div>
         @if (config('access.captcha.registration'))
                        <div class="form-group contact-captcha col-sm-12 textarea-comment">
                            <div class="col-md-4 col-md-offset-0">
                                {!! Form::captcha('captcha', ['data-callback'=>'recaptcha_callback']) !!}
                                {{ Form::hidden('captcha_status', 'true') }}
                            </div><!--col-md-6-->
                            <div id="captchaError"></div>
                        </div><!--form-group-->
         @endif

         <div class="text-center col-sm-12 textarea-comment">
         {{ Form::submit('Send', ['class' => 'btn btn-send']) }}
         </div>
      </div>
   </div>
</div>
{{ Form::close() }} 


