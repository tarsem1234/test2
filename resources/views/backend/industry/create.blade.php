@extends('backend.layouts.app')

@if( isset($industry) )
@section ('title', ('Edit Industry'))
@else
@section ('title', ('Create Industry'))
@endif

@section('after-styles')
{{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('page-header')
<h1>Industry Management</h1>    
@endsection

@section('content')
<div class="box box-success" id="edit-add-pages">
   <div class="box-header with-border"> 
      @if( isset($industry) )
      <h3 class="box-title">Edit Industry</h3>
      @else
      <h3 class="box-title">Create Industry</h3>
      @endif
      <div class="box-tools pull-right">

      </div>  
   </div>
   <div class="box-body">
      <div class="container">
         @if( isset($industry) )
         {{ Form::open(['url' => route('admin.industries.update', $industry['id']) ,'method' => 'PUT','class' => 'form-horizontal','files' => 'true']) }}
         @else
         {{ Form::open(['route' => 'admin.industries.store' ,'method' => 'POST','class' => 'form-horizontal','files' => 'true']) }}
         @endif
         <div class="row form-group">
            <div class="col-sm-2">
               @if( isset($industry) )
               {{ Form::label('industry', 'Title:') }}
               @else
               {{ Form::label('industry', 'Industry Name:') }}
               @endif
            </div>
            <div class="col-sm-5">
               {{ Form::text('industry', isset($industry)? $industry['industry']:null,  ['class' => 'form-control title-input','required'=>'required',    'maxlength' => '191', 'placeholder' => 'Industry Name']) }}
               @if(count($errors->get('industry')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('industry') }}</span>
               @endif
            </div>
         </div>             
      </div>
   </div>    
</div>
<div class="box box-info  create-edit-cancel-btn">
   @if( isset($industry) )
   {{ Form::submit('Update', ['class' => 'btn btn-primary edit-create-btn']) }}
   @else
   {{ Form::submit('Create', ['class' => 'btn btn-primary edit-create-btn']) }}
   @endif
   <a href="{{route("admin.industries.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ Form::close() }}    

@endsection

@section('after-scripts')

<script>

</script>
@endsection


