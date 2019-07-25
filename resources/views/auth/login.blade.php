@extends('layouts.master')

@section('content')
  <div class="breadcrumb_section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_inner">
            <ul>
              <li><a href="#">Home</a></li>
              <li><i class="zmdi zmdi-chevron-right"></i></li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- accont area start -->
  <div class="account_area ptb-100">
    <div class="container">
      <div class="row">
        <!--login area start-->
        <div class="col-lg-3 col-md-3">
            
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="account_form">
            <div class="login_title">
              <h2>login</h2>
            </div>
            @if(session('error'))
              <div class="alert alert-danger alert-dismissable"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('error') }}
              </div>
            @endif

            @if(session('success'))
              <div class="alert alert-success alert-dismissable"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
              </div>
            @endif
            <div class="login_form login">
              <form action="{{ route('auth.post.login') }}" method="post">
                {{ csrf_field() }}
                <div class="login_input">
                  <label>Username or email <span>*</span></label>
                  <input type="text" name="email">
                </div>
                <div class="login_input">
                  <label>Passwords  <span>*</span></label>
                  <input type="password" name="password">
                </div>
                <div class="login_submit">
                  <button type="submit">login</button>
                  <label for="remember">
                    <input id="remember" type="checkbox">
                    Remember me
                  </label>
                  <a href="#">Lost your password?</a>
                </div>
              </form>
            </div>
            <p style="text-align: center;">
              Don't have an account? <a href="{{ route('auth.register') }}">Register here</a>
            </p>
           </div>    
        </div>
        <!--login area start-->
        <div class="col-lg-3 col-md-3">
            
        </div>
      </div>
    </div>
  </div>
  <!-- accont area end -->

  <!--Newsletter section start-->
  <div class="newsletter_section ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12">
          <div class="newsletter_text">
            <h2>Get All Updates</h2>
            <p>Sign up our newsleter today. Also get allert for new product.</p>
          </div>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="newsletter_form">
            <form action="#">
              <input type="email" placeholder="Type your email">
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Newsletter section end -->
@endsection