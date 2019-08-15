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
                <h1>Wedding gifts convenient for you and your wedding guests</h1>
                <h2>Wedding Gifts</h2>
                <p>Let your wishes be fulfilled</p>
                <a href="{{ route('auth.register') }}">BUILD YOUR REGISTRY</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="slider_layer_image">
                <img src="assets/img/slide/wedding-Gift-Small.jpeg" alt="">
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
                <h1>Shop All</h1>
                <h2>Free Checklist</h2>
                <p>Items purchased by your guests </p>
                <a href="{{ route('auth.register') }}">BUILD YOUR REGISTRY</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="slider_layer_image">
                <img src="assets/img/slide/gift-ideas-for-groom-bride.jpg" alt="">
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
    <div style="text-align: center;">
      <h2>Varieties of gift items available</h2>
    </div>
    <div class="banner_area_inner d-flex">
      <div class="col_4">
        <div class="single_banner">
          <a href="#"><img src="assets/img/banner/1.png" alt=""></a>
        </div>
      </div>
      <div class="col_4">
        <div class="single_banner">
          <a href="#"><img src="assets/img/banner/2.png" alt=""></a>
        </div>
      </div>
      <div class="col_4">
        <div class="single_banner">
          <a href="#"><img src="assets/img/banner/3.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
  
  <br/>
  
 <!--About us start-->
<div class="about-us bg-gray mt-110 mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-description">
                    <div class="about-content">
                        <h3>about us</h3>
                        <div class="about-read">
                            <p class="text-1">
                                Lorem ipsum dolor sit amet, consectetur adipissed do eiusmod tempor incididunt
                            </p>
                            <p class="text-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisthe nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conseqenim ipsam voluptatem quia volupta
                            </p>
                            <p class="text-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tdidunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-fun-fact">
        <div class="about-fun-fact-inner white-overlay">
            <div class="fun-factor">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<!--About us end-->
  
@endsection
