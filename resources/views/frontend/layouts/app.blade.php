<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>@yield('title', app_name())</title>

      <!-- Meta -->
      <meta name="description" content="@yield('meta_description', '')">
      <meta name="keywords" content="@yield('meta_keywords', '')">
      <!--@yield('meta')-->

      <!-- Styles -->
      @yield('before-styles')
      {!! Html::element('link')->attribute('rel', 'stylesheet')->attribute('href', mix('css/common.css')) !!}
      {!! Html::element('link')->attribute('rel', 'stylesheet')->attribute('href', mix('css/custom.css')) !!}
      


      @yield('after-styles')

      <!-- Scripts -->
      <script>
         window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
      </script>
   </head>

   <body class="skin-{{ config('frontend.theme') }} {{ config('frontend.layout') }}">
      @include('includes.partials.logged-in-as')

      <div class="wrapper">
         @include('frontend.includes.header')

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">                   
            <!-- Main content -->
            <section class="content">
               <div class="loader" style="display: none;">
                  <div class="ajax-spinner ajax-skeleton"></div>
               </div><!--loader-->

               @include('includes.partials.messages')
               @yield('content')
            </section><!-- /.content -->
         </div><!-- /.content-wrapper -->

         @include('frontend.includes.footer')
      </div><!-- ./wrapper -->

      <!-- JavaScripts -->
      @yield('before-scripts')
      <script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
      <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Include jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

      {!! Html::element('link')->attribute('rel', 'text/javascript')->attribute('href', mix('js/frontend.js')) !!}
      
      @yield('after-scripts')

      <script>
        $(document).ready(function () {
          $(':input[type=number]').on('mousewheel', function (e) {
              $(this).blur();
          });
        });
        $(window).on('load',function(){
            setTimeout(function () {
                $('.alert-success, .alert-danger, .alert-warning').fadeOut('slow');
            }, 5000);
        });
      </script>
   </body>

</html>