<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fukky Registries</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- all css here -->    

    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/bundle.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/responsive.css') }}" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <link href="{{ URL::asset('/assets/css/cloud.css') }}" rel="stylesheet">
    @yield('styles')
    
    <script src="{{ URL::asset('/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
  </head>
  <body>
      <!-- Add your site or application content here -->
      
    <div class="exporso_wrapper">
      @include('layouts.header')
      <!-- slider-area-start -->
      
      @yield('content')
      
      <!--Footer start-->
      @include('layouts.footer')
      <!--Footer end-->
    </div>
    
    <!-- all js here -->
    <script src="{{ URL::asset('/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/popper.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/main.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
          break;
        }
      @endif
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="assets/js/map.js"></script>
    @yield('scripts')
  </body>
</html>
