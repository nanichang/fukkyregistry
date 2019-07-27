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
    <link href="{{ URL::asset('/assets/css/cloud.css') }}" rel="stylesheet">
    @yield('styles')
    
    <script src="{{ URL::asset('/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="40px" height="24px" viewBox="0 0 40 24" enable- xml:space="preserve">
      <defs>
        <path id="Cloud" d="M33.85,14.388c-0.176,0-0.343,0.034-0.513,0.054c0.184-0.587,0.279-1.208,0.279-1.853c0-3.463-2.809-6.271-6.272-6.271
      c-0.38,0-0.752,0.039-1.113,0.104C24.874,2.677,21.293,0,17.083,0c-5.379,0-9.739,4.361-9.739,9.738
      c0,0.418,0.035,0.826,0.084,1.229c-0.375-0.069-0.761-0.11-1.155-0.11C2.811,10.856,0,13.665,0,17.126
      c0,3.467,2.811,6.275,6.272,6.275c0.214,0,27.156,0.109,27.577,0.109c2.519,0,4.56-2.043,4.56-4.562
      C38.409,16.43,36.368,14.388,33.85,14.388z"/>
      </defs>
    </svg>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="assets/js/map.js"></script>
    @yield('scripts')
  </body>
</html>
