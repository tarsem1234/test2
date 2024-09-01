@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.change_password'))

@section('page-header')
<h1>
    @if (count($user->roles) > 0)
    @if(in_array(config('constant.inverse_user_type.Business'), array_column($user->roles->toArray(), 'id')))
    {{ trans('labels.backend.access.users.business_management') }}
    @elseif(in_array(config('constant.inverse_user_type.User'), array_column($user->roles->toArray(), 'id')))
    {{ trans('labels.backend.access.users.user_management') }}
    @elseif(in_array(config('constant.inverse_user_type.Administrator'), array_column($user->roles->toArray(), 'id')))
    {{ trans('labels.backend.access.users.admin_management') }}
    @elseif(in_array(config('constant.inverse_user_type.Support'), array_column($user->roles->toArray(), 'id')))
    Support Management
    @endif
    @endif
</h1>
@endsection

@section('content')
{{ Form::open(['route' => ['admin.access.user.change-password.post', $user], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'patch']) }}

<div class="box box-success">
   <div class="box-header with-border">
      <h3 class="box-title">{{ trans('labels.backend.access.users.change_password_for', ['user' => getFullName($user)]) }}</h3>

      <div class="box-tools pull-right">
         @include('backend.access.includes.partials.user-header-buttons')
      </div><!--box-tools pull-right-->
   </div><!-- /.box-header -->

   <div class="box-body">
      <div class="form-group">
         {{ Form::label('password', trans('validation.attributes.backend.access.users.password'), ['class' => 'col-lg-2 control-label', 'placeholder' => trans('validation.attributes.backend.access.users.password')]) }}
         <div class="col-lg-10">
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus']) }}
            @if(count($errors->get('password')) > 0)
            <span class="backend-errors alert-danger">{{ $errors->first('password') }}</span>
            @endif
         </div><!--col-lg-10-->
      </div><!--form control-->

      <div class="form-group">
         {{ Form::label('password_confirmation', trans('validation.attributes.backend.access.users.password_confirmation'), ['class' => 'col-lg-2 control-label', 'placeholder' => trans('validation.attributes.backend.access.users.password_confirmation')]) }}
         <div class="col-lg-10">
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
            @if(count($errors->get('password_confirmation')) > 0)
            <span class="backend-errors alert-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
         </div><!--col-lg-10-->
      </div><!--form control-->
   </div><!-- /.box-body -->
</div><!--box-->

<div class="box box-info">
   <div class="box-body">
      <div class="pull-left">
         <a href="{{ URL::previous() }}" class="btn btn-danger btn-xs">Cancel</a>
      </div><!--pull-left-->

      <div class="pull-right">
         {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-success btn-xs']) }}
      </div><!--pull-right-->

      <div class="clearfix"></div>
   </div><!-- /.box-body -->
</div><!--box-->

{{ Form::close() }}
@endsection
