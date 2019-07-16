@extends('layouts.master')

@section('title')
  Home | Fukky Registries
@endsection

@section('content')
  <div class="slider_wrapper">
    <div class="slider-active owl-carousel">
      <!--Single Slide-->
      <div class="single__slider bg-opacity" style="background-image:url(assets/img/slide/1.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <div class="slider-content slider-text-animation">
                <h1>Best Deal</h1>
                <h2>15% - 20% Off</h2>
                <p>Simply dummy text of the printing and typesetting. </p>
                <a href="#">Buy Now</a>                                 
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="slider_layer_image">
                <img src="assets/img/slide/layer_img_1.png" alt="">
              </div>
            </div>
          </div>  
        </div>
      </div>
          <!--Single slide end--> 
          <!--Single Slide-->
          <div class="single__slider bg-opacity" style="background-image:url(assets/img/slide/2.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="slider-content slider-text-animation">
                    <h1>Best Deal</h1>
                    <h2>15% - 20% Off</h2>
                    <p>Simply dummy text of the printing and typesetting. </p>
                    <a href="#">Buy Now</a>                                 
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="slider_layer_image">
                    <img src="assets/img/slide/layer_img_1.png" alt="">
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <!--Single slide end--> 
          <!--Single Slide-->
          <div class="single__slider bg-opacity" style="background-image:url(assets/img/slide/1.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="slider-content slider-text-animation">
                    <h1>Best Deal</h1>
                    <h2>15% - 20% Off</h2>
                    <p>Simply dummy text of the printing and typesetting. </p>
                    <a href="#">Buy Now</a>                                 
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="slider_layer_image">
                    <img src="assets/img/slide/layer_img_1.png" alt="">
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <!--Single slide end-->    
        </div>
      </div>
      <!-- slider-area-end -->
     
       <!--Banner area start-->
      <div class="banner_area pt-50">
        <div class="banner_area_inner d-flex">
          <div class="col_4">
            <div class="single_banner">
              <a href="#"><img src="assets/img/banner/1.jpg" alt=""></a>
            </div>
          </div>
          <div class="col_4">
            <div class="single_banner">
              <a href="#"><img src="assets/img/banner/2.jpg" alt=""></a>
            </div>
          </div>
          <div class="col_4">
            <div class="single_banner">
              <a href="#"><img src="assets/img/banner/3.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
       <!--Banner area end-->
       
       
      <!--Hot Deal product start-->
      <div class="hot_details_product pt-110 pb-107">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-3 col-md-3 col-12">
              <div class="section_title">
                <h2>Best Products</h2>
              </div>
            </div>
          </div>
          <div class="row mt-60">
            <div class="col-lg-12 col-md-12 ">
              <div class="tab-content">
                <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                  <div class="row">
                    @foreach($products as $product)
                      <div class="col-lg-3 col-md-4" style="margin-bottom: 25px;">
                        <div class="single__product">
                          <div class="produc_thumb">
                            <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                          </div>
                          <div class="product_hover">
                            <div class="product_action">
                              <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                              <a href="{{ route('wishlist.add', $product->id) }}" title="Add To Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                            </div>
                            <div class="product__desc">
                              <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                              <div class="price_amount">
                                <span class="current_price">${{ $product->current_price }}</span>
                                <span class="discount_price">{{ $product->discount_price }}</span>
                                <span class="old_price">$3700.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
      <!--Hot Deal product end-->  
  
  <!--Full Width  banner start-->
  <div class="full_width_banner pb-110">
    <div class="single_banner">
      <a href="#"><img src="assets/img/banner/8.jpg" alt="Shop Banner"></a>
    </div>
  </div>
  <!--Full Width Banner end-->
       
  <!--Latest Post start-->
  <div class="latest_post pb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <h2>Latest News</h2>
          </div>
        </div>
      </div>
      <div class="row mt-60">
        <div class="col-lg-4 col-md-6">
          <div class="single_blog_post mb-40">
            <div class="post_thumbnail">
              <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt=""></a>
            </div>
            <div class="post_content_meta">
              <div class="post_meta">
                <ul>            
                  <li>Posted March 20.</li>
                  <li>400+ View </li>
                  <li><a href="#"> 20+ Like</a></li>
                </ul>
              </div>
              <div class="blog_post_desc">
                <h2><a href="blog-details.html">Froome racing to spoil Yates’s pink Giro dream</a></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... </p>
              </div>
              <div class="read_more_btn">
                <a href="blog-details.html">Read More <span><i class="zmdi zmdi-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>            
      </div>
    </div>         
  </div>
  <!--Latest Post end-->
      
  <!--Newsletter section start -->
  <div class="newsletter_section ptb-80">
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
