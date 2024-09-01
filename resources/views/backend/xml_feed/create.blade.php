@extends ('backend.layouts.app')
@section ('title', ('xml-feed'))
@section('page-header')
<h1>XML Feed User</h1>
@endsection
@section('content')
<div class="box box-success" id="edit-add-pages">
   <div class="box-header with-border">
        <h3 class="box-title"> {{ isset($xmlUser) ? 'Edit Xml Feed User' : 'Create XML Feed User' }} </h3>
        <div class="box-tools pull-right">

      </div>
   </div>
   <div class="box-body">
      <div class="container">
          @if(isset($xmlUser))
         {{ Form::open(['url' => route('admin.xmlFeedUpdate') ,'method' => 'POST','class' => 'form-horizontal','files' => 'true']) }}
         <input type="hidden" value="{{encrypt($xmlUser->id)}}" name="xml_user_id">
         @else
         {{ Form::open(['route' => 'admin.xmlFeedStore' ,'method' => 'POST','class' => 'form-horizontal','files' => 'true']) }}
         @endif
         <div class="row form-group">
            <div class="col-sm-2">
               {{ Form::label('username', 'Username:') }}
            </div>
            <div class="col-sm-5">
               {{ Form::text('username', isset($xmlUser)? $xmlUser['username']:null,  ['class' => 'form-control title-input','required'=>'required',    'maxlength' => '191', 'placeholder' => 'Username']) }}
               @if(count($errors->get('username')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('username') }}</span>
               @endif
            </div>
         </div>
         <div class="row form-group">
            <div class="col-sm-2">
               {{ Form::label('Password', 'Password:') }}
            </div>
            <div class="col-sm-5">
                <input type="password" name="password" class="form-control title-input" required maxlength="191" placeholder="Password">
               @if(count($errors->get('password')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('password') }}</span>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>
<div class="box box-info  create-edit-cancel-btn">
   @if( isset($xmlUser) )
   {{ Form::submit('Update', ['class' => 'btn btn-primary edit-create-btn']) }}
   @else
   {{ Form::submit('Create', ['class' => 'btn btn-primary edit-create-btn']) }}
   @endif
   <a href="{{route("admin.xmlFeedIndex")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ Form::close() }}

@endsection

@section('after-scripts')

<script>

</script>
@endsection