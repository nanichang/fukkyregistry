@extends ('layouts.master')

@section('content')
<div class=" bg-gray mt-110 mb-105">
  <div class="breadcrumb_section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_inner">
            <ul>
              <li><a href="#">Home</a></li>
              <li><i class="zmdi zmdi-chevron-right"></i></li>
              <li>Register</li>
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
        <!--register area start-->
        <div class="col-lg-3 col-md-3">
          
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="login_title">
            <h2>BUILD YOUR REGISTRY</h2>
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

          <div class="login_form form_register ">
            <form action="{{ route('auth.post.register') }}" method="post">
              {{ csrf_field() }}
              <div class="login_input">
                <label>Couple's Firstnames <span>*</span></label>
                <input type="text" name="full_name" required>
              </div>
              <div class="login_input">
                <label>Email address <span>*</span></label>
                <input type="text" name="email" required>
              </div>
              <div class="login_input">
                <label>password <span>*</span></label>
                <input type="password" name="password" required>
              </div>
              <div class="login_input">
                <label> Confirm password <span>*</span></label>
                <input type="password" name="confirm_password" required>
              </div>

              <div hidden class="login_input">
                <label> Account Type <span>*</span></label>
                <select name="user_type" required>
                  <option>Select Account Type</option>
                  <option value="registry">Registry</option>
                  <option value="member">Normal User</option>
                </select>
              </div>

              <div class="login_submit">
                <button type="submit">Continue</button>
              </div>
            </form>
          </div>
          <p style="text-align: center;">
            Already have an account? <a href="{{ route('auth.login') }}">Login here</a>
          </p>
        </div>
        <div class="col-lg-3 col-md-3">
          
        </div>
        <!--register area end-->
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
</div>
  
  <!--Newsletter section end -->
@endsection