@extends('backend.layouts.app')

@if( isset($category) )
@section ('title', ('Edit Category'))
@else
@section ('title', ('Create Category'))
@endif

@section('after-styles')
{{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection


@section('page-header')
<h1>{{isset($category)?"Edit Category":"Add New Category"}}</h1>
@endsection

@section('content')
<div class="box box-success" id="edit-add-pages">
   <div class="box-header with-border">
      @if( isset($category) )
      <h3 class="box-title">Edit Category</h3>
      @else
      <h3 class="box-title">Create Category</h3>
      @endif
      <div class="box-tools pull-right">

      </div>
   </div>

   <div class="box-body">
      <div class="container">
         @if( isset($category) )
         {{ Form::model($category,['url' => route('admin.categories.update', $category['id']) ,'method' => 'PUT','class' => 'form-horizontal','files' => 'true']) }}
         @else
         {{ Form::open(['route' => 'admin.categories.store' ,'method' => 'POST','class' => 'form-horizontal','files' => 'true']) }}
         @endif
         <div class="row form-group">
            <div class="col-sm-2">
               {{ Form::label('Category', 'Category Name:') }}
            </div>
            <div class="col-sm-8">
               {{ Form::text('category', null,  ['class' => 'form-control title-input','required'=>'required', 'maxlength' => '191', 'placeholder' => 'Category Name']) }}
               @if(count($errors->get('category')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('category') }}</span>
               @endif
            </div>
         </div>
         <div class="row form-group">
            <div class="col-sm-2">
               {{ Form::label('description', 'Category Description:') }}
            </div>
            <div class="col-sm-8">
               {{ Form::textarea('description',null,['id' => 'ckeditor' ,'class' => 'form-control textarea','required'=>'required', 'maxlength' => '191', 'placeholder' => 'Category Description']) }}
               @if(count($errors->get('description')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('description') }}</span>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>

<div class="box box-info  create-edit-cancel-btn">
   @if( isset($category) )
   {{ Form::submit('Update', ['class' => 'btn btn-primary edit-create-btn']) }}
   @else
   {{ Form::submit('Create', ['class' => 'btn btn-primary edit-create-btn']) }}
   @endif
   <a href="{{route("admin.categories.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ Form::close() }}

@endsection

@section('after-scripts')
{{ Html::script("ckeditor/ckeditor.js") }}

<script>
   $(function () {
     CKEDITOR.editorConfig = function (config) {
            config.toolbar = [
                {name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']},
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']},
                {name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField']},
                '/',
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat']},
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language']},
                {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']},
                '/',
                {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
                {name: 'colors', items: ['TextColor', 'BGColor']},
                {name: 'tools', items: ['Maximize', 'ShowBlocks']},
                {name: 'about', items: ['About']}
            ];
        };
        CKEDITOR.replace('ckeditor');
   });
</script>
@endsection