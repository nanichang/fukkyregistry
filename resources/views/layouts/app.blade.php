
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/admin/images/favicon.png">
  <title>Admin - Dashboard</title>
  <!-- Custom CSS -->

  <link href="{{ URL::asset('/assets/admin/libs/morris.js/morris.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/admin/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/admin/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/admin/dist/css/style.min.css') }}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  @yield('styles')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper">
        @include('layouts.adminheader')
        
        @include('layouts.aside')
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Admin Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                @yield('content')
            </div>
            
            @include('layouts.adminfooter')
            
        </div>
        
    </div>
        
    <div class="chat-windows"></div>

    <script src="{{ URL::asset('/assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/admin/dist/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/dist/js/app.init.mini-sidebar.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/dist/js/app-style-switcher.js') }}"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    
    <script src="{{ URL::asset('/assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/extra-libs/sparkline/sparkline.js') }}"></script>
    
    
    <!--Wave Effects -->
    <script src="{{ URL::asset('/assets/admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
  
    <script src="{{ URL::asset('/assets/admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::asset('/assets/admin/dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ URL::asset('/assets/admin/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!--c3 charts -->
    <script src="{{ URL::asset('/assets/admin/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/extra-libs/c3/c3.min.js') }}"></script>
    
    <!-- chartjs -->
    <script src="{{ URL::asset('/assets/admin/libs/chart.js/dist/chart.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/admin/dist/js/pages/dashboards/dashboard2.js') }}"></script>
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
    @yield('scripts')
</body>

</html>