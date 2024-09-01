@extends('backend.layouts.app')

@if( isset($service) )
@section ('title', ('Edit Service'))
@else
@section ('title', ('Create Service'))
@endif

@section('page-header')
<h1>Service Management</h1>    
@endsection

@section('content')
<div class="box box-success" id="edit-add-pages">
   <div class="box-header with-border"> 
      @if( isset($service) )
      <h3 class="box-title">Edit Service</h3>
      @else
      <h3 class="box-title">Create Service</h3>
      @endif
      <div class="box-tools pull-right">

      </div>  
   </div>
   <div class="box-body">     
      <div class="container">
         @if( isset($service) )
         {{ Form::open(['url' => route('admin.services.update', $service['id']) ,'method' => 'PUT','class' => 'form-horizontal','files' => 'true']) }}
         @else
         {{ Form::open(['route' => 'admin.services.store' ,'method' => 'POST','class' => 'form-horizontal','files' => 'true']) }}
         @endif

         <div class="row form-group">
            <div class="col-sm-2">
               @if( isset($service) )
               {{ Form::label('service', 'Title:') }}
               @else
               {{ Form::label('service', 'Service Name:') }}
               @endif
            </div> 
            <div class="col-sm-5">
               {{ Form::text('service', isset($service)? $service['service']:null,  ['class' => 'form-control title-input','required'=>'required', 'maxlength' => '191', 'placeholder' => 'Service Name']) }}
               @if(count($errors->get('service')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('service') }}</span>
               @endif
            </div>
         </div>     
         <div class="row form-group">                                   
            <div class="col-sm-2">
               {{ Form::label('industry', 'Industry:') }}
            </div>
            <div class="col-sm-5">
               <select name="industry" id="select_industry" class="form-control title-input" required>
                  @if( isset($service) )
                  <option value="{{ $service->industry->id }}" disabled selected hidden>{{ $service->industry->industry }}</option>
                  @foreach($industries as $industry)
                  <option value="{{ $industry->id }}">{{ $industry->industry }}</option>
                  @endforeach 
                  @else

                  @if( isset($industries) )
                  <option value="" disabled selected hidden>Select Industry</option>
                  @foreach($industries as $industry)
                  <option value="{{ $industry->id }}">{{ $industry->industry }}</option>
                  @endforeach 
                  @endif
                  @endif
               </select>
               @if(count($errors->get('industry')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('industry') }}</span>
               @endif
            </div>
         </div>
      </div>                                                   
   </div>
</div>    

<div class="box box-info  create-edit-cancel-btn">
   @if( isset($service) )
   {{ Form::submit('Update', ['class' => 'btn btn-primary edit-create-btn']) }}
   @else
   {{ Form::submit('Create', ['class' => 'btn btn-primary edit-create-btn']) }}
   @endif
   <a href="{{route("admin.services.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ Form::close() }}    

@endsection

@section('after-scripts')

<script>

</script>
@endsection


