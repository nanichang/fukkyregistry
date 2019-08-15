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
  <div class="latest_post pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>How Fukky Registry Works - It's Easy!</h2>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-md-6">
                Step 1
            </div>
            <div class="col-md-6">
                Video
            </div>
        </div>
    </div>
</div>
@endsection
