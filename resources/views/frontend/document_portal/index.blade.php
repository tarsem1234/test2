@extends ('frontend.layouts.app')

@section ('title', ('Document Portal'))

@section('after-styles')
{{ Html::style(mix('css/terms-conditions.css')) }}
@endsection

@section('content')
<div class="row">
   <div class="terms-conditions-bg-img">
      <img src="{{ asset('/storage/site-images/common_banner.jpg') }}" class="img-responsive" />
      <div class="terms-conditions-text">
         <a>
            <h1>Document Portal</h1>
         </a>
      </div>
   </div>
</div>
@include('frontend.common-home-icon.common_home_icon')

@endsection

@section('after-scripts')

<script>
    $(function () {

    });


</script>
@endsection
