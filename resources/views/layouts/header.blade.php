<header>
  <div class="header_middle">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-3">
          <div class="logo">
            <a href="/"><img src="assets/img/logo/Fukki.png" width="80px"></a>
          </div>
        </div>
        <div class="col-lg-7 col-md-8">
          <div class="category_search">
            <form action="#">
              <div class="category_search_inner">
                <div class="search">
                  <input type="text" placeholder="Search Keyword Here">
                </div>
                <div class="submit">
                  <button type="submit"><i class="zmdi zmdi-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12">
          <div class="menu d-none d-lg-block ">
            <nav>
              <ul>                                                  
                <li><a href="/">HOME</a></li>
                <li><a href="{{ route('home.aboutUs') }}">About</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li><a href="{{ route('home.contactUs') }}">CONTACT </a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="header_right_info">
            <ul>              
              @if(Sentinel::check())
                <li>
                  <a href="{{ route('wishlist.index') }}">
                    Wishlist
                    <span> <i class="zmdi zmdi-favorite-outline"></i> (0) </span>
                  </a>
                </li>
                <li> <a href="{{ route('auth.login') }}" onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;">Logout</a></li>
                <form  action="{{ route('auth.logout') }}" method="post" id="logout-form">
                  {{ csrf_field() }}
                  <!-- <li><a href="#">Logout</a> </li>                    -->
                </form>
              @else
                <li> <a href="{{ route('auth.login') }}"><strong>Login</strong></a></li>
                <li> <a href="{{ route('auth.register') }}"><strong>Register</strong></a></li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-12 d-lg-none">
          <!--Mobile menu murkup start-->
          <div class="mobile-menu-area d-lg-none">
            <div class="mobile-menu clearfix">
              <nav>
                <ul>                                                  
                  <li><a href="/">HOME </a></li>
                  <li><a href="about-us.html">About</a></li>
                  <li><a href="shop.html">Shop</a>
                    <ul>
                      <li><a href="shop.html">Shop </a></li>
                      <li><a href="shop-list-right-sidebar.html">shop Right Sidebar</a></li>
                      <li><a href="shop-without-sidebar.html">shop without Sidebar</a></li>
                      <li><a href="product-details.html">Product Details </a></li>
                      <li><a href="product-details-sidebar.html">Product Details Sidebar </a></li>
                      <li><a href="checkout.html">Checkout </a></li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                      <li><a href="my-account.html">My Account</a></li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a>
                    <ul>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact-us.html">CONTACT </a></li>
                  <li ><a href="#">Features</a>
                    <ul >
                      <li><a href="#">Column1</a>
                        <ul >
                          <li><a href="shop.html">Shop </a></li>
                          <li><a href="shop-list.html">Shop List</a></li>
                          <li><a href="shop-right-sidebar.html">Shop Right Sidebar </a></li>
                          <li><a href="shop-without-sidebar.html">Shop without Sidebar </a></li>
                          <li><a href="shop-list-without-sidebar.html">Shop List without Sidebar </a></li>
                          <li><a href="product-details.html">Product Details</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Column2</a>
                        <ul>
                          <li><a href="product-details-sidebar.html">product Details Sidebar</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                          <li><a href="wishlist.html">wishlist</a></li>
                          <li><a href="my-account.html">My account</a></li>
                          <li><a href="login.html">login</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Column3</a>
                        <ul>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                          <li><a href="about-us.html">About Us </a></li>
                          <li><a href="contact-us.html">Contact Us </a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!--Mobile menu murkup End-->
        </div>
      </div>
    </div>
  </div>
  
</header>