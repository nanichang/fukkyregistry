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
  </body>
</html>
