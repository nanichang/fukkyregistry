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
  
  <style>
  

.progressContainer {
  position: relative;
  width: 300px;
  height: 100vh;
  margin: 0 auto;
  overflow: hidden;
  padding: 2rem;
  color: #fff;
  background: #392A60;
  -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

.progress {
  position: relative;
  padding: 0 1rem 0 3.5rem;
  margin: 2rem 0 0;
  list-style: none;
}

.progress__item {
  position: relative;
  min-height: 75px;
  counter-increment: list;
  padding-left: 0.5rem;
}
.progress__item:before {
  content: "";
  position: absolute;
  left: -1.5rem;
  top: 33px;
  height: 60%;
  width: 1px;
  border-left: 1px solid #fff;
}
.progress__item:after {
  content: counter(list);
  position: absolute;
  top: 0;
  left: -2.5rem;
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: transparent;
  color: #fff;
  font-weight: 400;
  font-size: 13px;
  line-height: 2rem;
  text-align: center;
  border: 1px solid #fff;
}
.progress__item:last-child:before {
  border: none;
}
.progress__item.progress__item--completed {
  opacity: 0.6;
  color: #fff;
}
.progress__item.progress__item--completed:after {
  content: "\2713";
  font-weight: 400;
  background: #fff;
  color: #392A60;
}
.progress__item.progress__item--active:after {
  background: #fff;
  color: #392A60;
}

.progress__title {
  padding: 0.4rem 0 0.5rem;
  margin: 0;
  font-size: 1.5rem;
}

.progress__info {
  font-size: 13px;
}
  
  </style>
 <!--About us start-->
<div class="about-us bg-gray mt-110 mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-description">
                    <div class="about-content">
                        <h3>HOW IT WORKS</h3>
                        <div class="progressContainer">
                          <ul class="progress">
                            <li class="progress__item progress__item--completed">
                              <p class="progress__title">Step 1</p>
                              <p class="progress__info">Register</p>
                            </li>
                            <li class="progress__item progress__item--active">
                              <p class="progress__title">Step 2</p>
                              <p class="progress__info">Create a wishlist</p>
                            </li>
                            <li class="progress__item">
                              <p class="progress__title">Step 3</p>
                              <p class="progress__info">Share your wishlist link to your friends</p>
                            </li>
                             <li class="progress__item">
                              <p class="progress__title">Step 3</p>
                              <p class="progress__info">Your wedding gifts will be presented on your wedding day</p>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-fun-fact">
        <div class="about-fun-fact-inner">
            <div class="fun-factor">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<!--About us end-->
  
@endsection
