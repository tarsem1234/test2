@extends ('frontend.layouts.app')
@section ('title', ('Privacy Policy'))
@section('after-styles')
{{ Html::style(mix('css/contact.css')) }}
@endsection
@section('content')
<div class="contact-page"> 
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="contact-banner">
                        <div class="text">Privacy Policy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.common-home-icon.common_home_icon')
    <div class="container margin-bottom">
        <div class="row">
        <div class="col-lg-12">
            <?php echo $page->content; ?>
        </div>
        </div>
    </div>
</div>
@endsection