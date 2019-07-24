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
              <li>Wishlist</li>
              <li><i class="zmdi zmdi-chevron-right"></i></li>
              <li>Checkout</li>
              <li><i class="zmdi zmdi-chevron-right"></i></li>
              <li>user->first_name</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="checkout-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="coupon-accordion">
            <!-- ACCORDION START -->
            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
            <div id="checkout-login" class="coupon-content">
              <div class="coupon-info">
                <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                <form action="#">
                  <p class="form-row-first">
                    <label>Username or email <span class="required">*</span></label>
                    <input type="text" />
                  </p>
                  <p class="form-row-last">
                    <label>Password  <span class="required">*</span></label>
                    <input type="text" />
                  </p>
                    <p class="form-row">          
                      <input type="submit" value="Login" />
                      <label>
                        <input type="checkbox" />
                        Remember me 
                      </label>
                    </p>
                    <p class="lost-password">
                      <a href="#">Lost your password?</a>
                    </p>
                </form>
              </div>
            </div>
            <!-- ACCORDION END -->  
            <!-- ACCORDION START -->
            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
            <div id="checkout_coupon" class="coupon-checkout-content">
              <div class="coupon-info">
                <form action="#">
                  <p class="checkout-coupon">
                    <input type="text" placeholder="Coupon code" />
                    <input type="submit" value="Apply Coupon" />
                  </p>
                </form>
              </div>
            </div>
            <!-- ACCORDION END -->            
          </div>
        </div>
      </div>
      <form action="{{ route('wishlist.purchase.process', [$user->slug, $wishlist->slug]) }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-6 col-md-12 col-12">
            <!-- <form action="#"> -->
              <div class="checkbox-form">           
                <h3>Billing Details</h3>
                <div class="row">
                  <div class="col-md-12">
                    <div class="country-select">
                      <label>Country <span class="required">*</span></label>
                      <select name="country">
                        <option value="Nigeria">Nigeria</option>
                      </select>                     
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>First Name <span class="required">*</span></label>                 
                      <input type="text" placeholder="" name="first_name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>Last Name <span class="required">*</span></label>                    
                      <input type="text" placeholder="" name="last_name" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="checkout-form-list">
                      <label>Address <span class="required">*</span></label>
                      <input type="text" placeholder="Street address" name="address" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="checkout-form-list">                  
                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address2" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="checkout-form-list">
                      <label>Town / City <span class="required">*</span></label>
                      <input type="text" name="city" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>State / County <span class="required">*</span></label>                   
                      <input type="text" placeholder="" name="state" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>Postcode / Zip <span class="required">*</span></label>                   
                      <input type="text" name="zip_code" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>Email Address <span class="required">*</span></label>                    
                      <input type="email" name="email" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="checkout-form-list">
                      <label>Phone  <span class="required">*</span></label>                   
                      <input type="text" name="phone_number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="checkout-form-list create-acc"> 
                      <input id="cbox" type="checkbox" name="create_account" />
                      <label for="cbox">Create an account?</label>
                    </div>
                    <div id="cbox_info" class="checkout-form-list create-account">
                      <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                      <label>Account password  <span class="required">*</span></label>
                      <input type="password" placeholder="password" name="password" />  
                    </div>
                  </div>                
                </div>
                <div class="different-address">
                  <div class="ship-different-title">
                    <h3>
                      <label for="ship-box">Ship to a different address?</label>
                      <input id="ship-box" type="checkbox" name="shipping" />
                    </h3>
                  </div>
                  <div id="ship-box-info" class="row">
                    <div class="col-md-12">
                      <div class="country-select">
                        <label>Country <span class="required">*</span></label>
                        <select name="country2">
                          <option value="Nigeria">Nigeria</option>
                        </select>                     
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>First Name <span class="required">*</span></label>                   
                        <input type="text" placeholder="" name="first_name2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Last Name <span class="required">*</span></label>                    
                        <input type="text" placeholder="" name="last_name2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Company Name</label>
                        <input type="text" placeholder="" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Address <span class="required">*</span></label>
                        <input type="text" placeholder="Street address" name="address22" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">                  
                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address222" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Town / City <span class="required">*</span></label>
                        <input type="text" placeholder="Town / City" name="city2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>State / County <span class="required">*</span></label>                   
                        <input type="text" placeholder="" name="state2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Postcode / Zip <span class="required">*</span></label>                   
                        <input type="text" placeholder="Postcode / Zip" name="zip_code2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Email Address <span class="required">*</span></label>                    
                        <input type="email" placeholder="" name="email2" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Phone  <span class="required">*</span></label>                   
                        <input type="text" placeholder="Postcode / Zip"  name="phone_number2" />
                      </div>
                    </div>                
                  </div>
                  <div class="order-notes">
                    <div class="checkout-form-list mrg-nn">
                      <label>Order Notes</label>
                      <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." name="note"></textarea>
                    </div>                  
                  </div>
                </div>                          
              </div>
            <!-- </form> -->
          </div>  
          <div class="col-lg-6 col-md-12 col-12">
            <div class="your-order">
              <h3>Your order</h3>
              <div class="your-order-table table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="product-name">Product</th>
                      <th class="product-total">Total</th>
                    </tr>             
                  </thead>
                  <tbody>                    
                    <tr class="cart_item">
                      <td class="product-name">
                        {{ $wishlist->product_name }} 
                        <input type="hidden" name="product_name" value="{{ $wishlist->product_name }}">
                        <strong class="product-quantity"> 
                          × 
                          {{ $wishlist->quantity }}
                          <input type="hidden" name="quantity" value="{{ $wishlist->quantity }}">
                        </strong>
                      </td>
                      <td class="product-total">
                        <span class="amount">&#x20A6; {{ $wishlist->current_price }}</span>
                        <input type="hidden" name="current_price" value="{{ $wishlist->current_price }}">
                      </td>
                    </tr>                    
                  </tbody>
                  <tfoot>
                    <tr class="cart-subtotal">
                      <th>Cart Subtotal</th>
                      <td><span class="amount">&#x20A6; {{ $wishlist->current_price }}</span></td>
                    </tr>
                    <tr class="order-total">
                      <th>Order Total</th>
                      <td>
                        <strong><span class="amount">&#x20A6; {{ $wishlist->current_price }}</span></strong>
                      </td>
                    </tr>               
                  </tfoot>
                </table>
              </div>
              <div class="payment-method">
                <div class="payment-accordion">
                  <div class="panel-group" id="faq">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a>
                        </h5>
                      </div>
                      <div id="payment-1" class="panel-collapse collapse show">
                        <div class="panel-body">
                          <p>
                            Make your payment directly into our bank account. 
                            <br /> 
                            Account Name: <strong> Fukky Registry</strong> <br />
                            Account Number: <strong> 1234567890</strong> <br />
                            Bank Name: <strong>First Bank Nigeria</strong> <br />

                            Please use <strong>{{ $user->slug }}</strong> as the depositor reference. Your order won’t be shipped until the funds have cleared in our account.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                        </div>
                        <div id="payment-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                        </div>
                        <div id="payment-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="order-button-payment">
                    <input type="submit" value="Place order" />
                  </div>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection