@extends('layouts.master')

@section('content')
  <!--Breadcrumb section-->
  <div class="breadcrumb_section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_inner">
            <ul>
              <li><a href="#">Home</a></li>
              <li><i class="zmdi zmdi-chevron-right"></i></li>
              <li>Shop</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Breadcrumb section end-->

  <!--shop area start-->
  <div class="shop_area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-8 col-12">
          <div class="shop_sidebar">                                   
            <div class="sidebar_widget mb-50">
              <div class="widget_title">
                <h3>Categories</h3>
              </div>
              <div class="widget_categories">
                <ul>
                  <li><a href="#">Adventure Tourers <span class="caet_count">(6)</span></a></li>
                  <li><a href="#">Learner LAMS <span class="caet_count">(8)</span></a></li>
                  <li><a href="#"> Minibikes<span class="caet_count">(7)</span></a></li>
                  <li><a href="#"> Naked<span class="caet_count">(10)</span></a></li>
                  <li><a href="#">Competition<span class="caet_count">(5)</span></a></li>
                  <li><a href="#">Trail<span class="caet_count">(12)</span></a></li>
                  <li><a href="#">Scooters<span class="caet_count">(15)</span></a></li>
                </ul>
              </div>
            </div>
                                    
            <div class="sidebar_widget mb-50">
              <div class="widget_title">
                <h3>Brands</h3>
              </div>
              <div class="widget_brand">
                <ul>
                  <li><a href="#">Yamaha</a></li>
                  <li><a href="#">Hero</a></li>
                  <li><a href="#">Kawasaki</a></li>
                  <li><a href="#">Suzuki</a></li>
                  <li><a href="#">Fz</a></li>
                  <li><a href="#">Discover</a></li>
                  <li><a href="#">Hunk</a></li>
                  <li><a href="#">Ducati</a></li>
                </ul>
              </div>
            </div>                                    
          </div>
        </div>
        
        <div class="col-lg-9 col-md-12 col-12 shop_details">
          <div class="row">
            <div class="col-12">
              <!-- Shop Top Bar Start -->
              <div class="shop-top-bar d-flex justify-content-between align-items-center">

                <div class="shop_top_left d-flex align-items-center">
                  <!-- Product View Mode -->
                  <div class="product-view-mode nav" role="tablist" >
                    <a class="active" href="#grid_view" data-toggle="tab" role="tab" aria-controls="grid_view"><i class="fa fa-th"></i></a>
                    <a href="#list_view" data-toggle="tab" role="tab" aria-controls="list_view"><i class="fa fa-list"></i></a>
                  </div>

                  <!-- Product Showing -->
                  <div class="product-showing d-flex">
                    <p>Showing</p>
                    <select name="showing" class="nice-select">
                      <option value="1">8</option>
                      <option selected value="2">12</option>
                      <option value="3">16</option>
                      <option value="4">20</option>
                      <option value="5">24</option>
                    </select>
                  </div>

                  <!-- Product Short -->
                  <div class="product-short d-flex">
                    <p>Short by</p>
                    <select name="sortby" class="nice-select">
                      <option value="trending">Trending items</option>
                      <option value="sales">Best sellers</option>
                      <option value="rating">Best rated</option>
                      <option value="date">Newest items</option>
                      <option value="price-asc">Price: low to high</option>
                      <option value="price-desc">Price: high to low</option>
                    </select>
                  </div>

                </div>
                <!-- Product Pages -->
                <div class="product-pages">
                  <p>Pages 1 of 25</p>
                </div>
              </div><!-- Shop Top Bar End -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="tab-content">
                <div class="tab-pane active show fade" id="grid_view" role="tabpanel">
                  <div class="row">
                    @foreach($products as $product)
                      <div class="col-lg-4 col-md-6 col-12">
                        <div class="single__product">
                          <!-- <span class="pro_badge">Sale</span> -->
                          <div class="produc_thumb">
                            <a href="#"><img src="assets/img/product/{{ $product->id }}.jpg" alt=""></a>
                          </div>
                          <div class="product_hover">
                            <div class="product_action">
                              <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                              <a href="{{ route('wishlist.store', $product->slug) }}" title="Add To Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                            </div>
                            <div class="product__desc">
                              <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                              <div class="price_amount">
                                <span class="current_price">${{ $product->current_price }}</span>
                                <!-- <span class="discount_price">-15%</span> -->
                                <!-- <span class="old_price">$3700.00</span> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                
                <div class="tab-pane fade" id="list_view" role="tabpanel">
                  <div class="row">
                    @foreach($products as $product)
                      <div class="col-12 mb-40">
                        <div class="row">
                          
                            <div class="col-lg-4">
                              <div class="single_Product_list">
                                <div class="single__product">
                                  <span class="pro_badge">Sale</span>
                                  <div class="produc_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/{{ $product->id }}.jpg" alt=""></a>
                                  </div>
                                  <div class="product_hover">
                                    <div class="product_action">
                                      <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                      <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                      <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-8">
                              <div class="product__desc">
                                <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                <div class="product_rating">
                                  <a href="#"><i class="zmdi zmdi-star"></i></a>
                                  <a href="#"><i class="zmdi zmdi-star"></i></a>
                                  <a href="#"><i class="zmdi zmdi-star"></i></a>
                                  <a href="#"><i class="zmdi zmdi-star"></i></a>
                                  <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                </div>
                                <div class="price_amount">
                                  <span class="current_price">${{ $product->current_price }}</span>
                                  <!-- <span class="discount_price">-08%</span> -->
                                  <!-- <span class="old_price">$3700.00</span> -->
                                </div>
                                <p> {!! $product->description !!} </p>
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
          <div class="row pagination_box mt-70">
            <div class="col-12">
              <div class="pagination">
                <ul>
                  <li><a href="#"><i class="zmdi zmdi-chevron-left"></i> prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="active">4</li>
                  <li>..</li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#">next<i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div> 
        </div>
      </div>            
    </div>
  </div>
                <!--shop area end-->


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