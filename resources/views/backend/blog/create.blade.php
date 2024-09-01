@extends('backend.layouts.app')

@if( isset($blog) )
@section ('title', ('Edit Blog'))
@else
@section ('title', ('Create Blog'))
@endif

@section('page-header')
<h1>Blog Management</h1>    
@endsection

@section('content')
<div class="box box-success" id="edit-add-pages">
    <div class="box-header with-border"> 
        @if( isset($blog) )
        <h3 class="box-title">Edit Blog</h3>
        @else
        <h3 class="box-title">Create Blog</h3> 
        @endif
        <div class="box-tools pull-right">

        </div>  
    </div>
    <div class="box-body">
        <div class="container">
            @if( isset($blog) )
            {{ Form::open(['url' => route('admin.blogs.update', $blog['id']) ,'method' => 'PUT','id'=>'create-edit-blog','class' => 'form-horizontal','files' => 'true']) }}
            @else
            {{ Form::open(['route' => 'admin.blogs.store' ,'method' => 'POST','id'=>'create-edit-blog','class' => 'form-horizontal','files' => 'true']) }}
            @endif
            <div class="row form-group">
                <div class="col-sm-2">
                    {{ Form::label('blog_title', 'Title:') }}
                </div> 
                <div class="col-sm-8">
                    {{ Form::text('blog_title', isset($blog)? $blog['title']:null,  ['class' => 'form-control title-input', 'maxlength' => '191', 'placeholder' => 'Title','required'=>'required']) }}
                    @if(count($errors->get('blog_title')) > 0)
                    <span class="backend-errors alert-danger">{{ $errors->first('blog_title') }}</span>
                    @endif
                </div>
            </div>   
            <div class="row form-group">
                <div class="col-sm-2">
                    {{ Form::label('blog_description', 'Description:') }}
                </div>
                <div class="col-sm-8">
                    {{ Form::textarea('blog_description', isset($blog)? $blog['description']:null,['class' => 'form-control textarea','required'=>'required', 'maxlength' => '191', 'placeholder' => 'Description']) }}
                    @if(count($errors->get('blog_description')) > 0)
                    <span class="backend-errors alert-danger">{{ $errors->first('blog_description') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">  
                <div class="col-sm-2">
                    {{ Form::label('blog_content', 'Content:') }}
                </div>
                <div class="col-sm-8">
                    {{ Form::textarea('blog_content', isset($blog)? $blog['content']:null,['class' => 'form-control ', 'id' => 'ckeditor' , 'required' => 'required']) }}
                    @if(count($errors->get('blog_content')) > 0)
                    <span class="backend-errors alert-danger">{{ $errors->first('blog_content') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-2">
                    {{ Form::label('blog_image', 'Image:') }}
                </div>
                <div class="col-sm-5">
                    @if( isset($blog) )
                    <div class="image-div">
                        <img src="{{ asset('storage'.'/'. $blog->image )}}" class="img-responsive">
                    </div>
                    {{ Form::file('blog_image',null, ['class' => 'form-control','required' => 'required']) }}
                    @else
                    {{ Form::file('blog_image',null, ['class' => 'form-control','required' => 'required']) }}
                    @endif
                    @if(count($errors->get('blog_image')) > 0)
                    <span class="backend-errors alert-danger">{{ $errors->first('blog_image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="box box-info  create-edit-cancel-btn">
    @if( isset($blog) )
    {{ Form::submit('Update', ['class' => 'btn btn-primary edit-create-btn']) }}
    @else
    {{ Form::submit('Create', ['class' => 'btn btn-primary edit-create-btn']) }}
    @endif
    <a href="{{route("admin.blogs.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ Form::close() }}    

@endsection

@section('after-scripts')
{{ Html::script("ckeditor/ckeditor.js") }}

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>-->
<script>
    $(document).ready(function () {
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

//      alert('test');
//      $(document).on('click', '.edit-create-btn', function () {
//       form = $('#question-signer-rent-action input, textarea,select');
//      form.validate();
////         $(".backend-errors").show();
//
//      });
//         e.preventDefault();
//      $(".error").hide();
//        $(document).on('click', '.edit-create-btn', function () {
//       
//      });

    });
</script>
@endsection


