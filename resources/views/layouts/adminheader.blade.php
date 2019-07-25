<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header">
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
        <i class="ti-menu ti-close"></i>
      </a>
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <div class="navbar-brand">
        <a href="/" class="logo">
          <!-- Logo icon -->
          <b class="logo-icon">
            <img src="../../assets/admin/images/logo-icon.png" alt="homepage" class="dark-logo" />
              <!-- Light Logo icon -->
            <img src="../../assets/admin/images/logo-light-icon.png" alt="homepage" class="light-logo" />
          </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span class="logo-text">
            <!-- dark Logo text -->
            <img src="../../assets/admin/images/logo-text.png" alt="homepage" class="dark-logo" />
            <!-- Light Logo text -->
            <img src="../../assets/admin/images/logo-light-text.png" class="light-logo" alt="homepage" />
          </span>
        </a>
        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
          <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
        </a>
      </div>
      <!-- ============================================================== -->
      <!-- Toggle which is visible on mobile only -->
      <!-- ============================================================== -->
      <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="ti-more"></i>
      </a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav float-left mr-auto">
          <li class="nav-item d-none d-md-block">
            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
              <i class="mdi mdi-menu font-24"></i>
            </a>
          </li> 
          <!-- ============================================================== -->
          <!-- Search -->
          <!-- ============================================================== -->
          <li class="nav-item search-box">
            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-magnify font-20 mr-1"></i>
                <div class="ml-1 d-none d-sm-block">
                  <span>Search</span>
                </div>
              </div>
            </a>
            <form class="app-search position-absolute">
              <input type="text" class="form-control" placeholder="Search &amp; enter">
              <a class="srh-btn">
                <i class="ti-close"></i>
              </a>
            </form>
          </li>
      </ul>
      <!-- ============================================================== -->
      <!-- Right side toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav float-right">
        
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="../../assets/admin/images/users/2.png" alt="user" class="rounded-circle" width="40">
                      <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}} <i class="mdi mdi-chevron-down"></i></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                      <span class="with-arrow">
                          <span class="bg-primary"></span>
                      </span>
                      <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                          <div class="">
                              <img src="../../assets/admin/images/users/2.png" alt="user" class="rounded-circle" width="60">
                          </div>
                          <div class="m-l-10">
                              <h4 class="m-b-0">{{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}</h4>
                              <p class=" m-b-0">{{Sentinel::getUser()->email}}</p>
                          </div>
                      </div>
                      <div class="profile-dis scrollable">
                          <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-user m-r-5 m-l-5"></i> 
                            My Profile
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript:void(0)">
                              <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                          <div class="dropdown-divider"></div>
                          
                          <form  action="{{ route('auth.logout') }}" method="post" id="logout-form">
                              {{ csrf_field() }}
                              <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>    
                              
                          </form>
                          <div class="dropdown-divider"></div>
                      </div>
                  </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
          </ul>
      </div>
  </nav>
</header>