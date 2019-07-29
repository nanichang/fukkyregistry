<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about-us', 'HomeController@aboutUs')->name('home.aboutUs');
Route::get('/contact-us', 'HomeController@contactUs')->name('home.contactUs');

Route::group(['prefix' => 'auth'], function() {
  Route::get('/login', 'LoginController@getLogin')->name('auth.login');
  Route::post('/login', 'LoginController@post')->name('auth.post.login');

  Route::get('/register', 'RegisterController@register')->name('auth.register');
  Route::post('/register', 'RegisterController@store')->name('auth.post.register');
  Route::post('/logout', 'LoginController@logout')->name('auth.logout');
});

Route::group(['prefix' => 'dashboard'], function() {
  // Route::get('/', 'DashboardController@index')->name('dashboard.index');
  Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');
  // Route::get('/{slug}/friends', 'FriendController@index')->name('friends.index');
  Route::get('/my/wishlist/{slug}', 'WishlistController@myList')->name('my.wishlist');
});

Route::group(['prefix' => 'shop'], function() {
  Route::get('/', 'ShopController@index')->name('shop.index');
  Route::get('/wishlist/{slug}', 'WishlistController@store')->name('wishlist.store');
  Route::get('/my/wishlist/{slug}', 'WishlistController@store')->name('wishlist.store');
  Route::get('/product-detail/{slug}', 'ProductController@show')->name('product.show');
});

Route::group(['prefix' => 'shared'], function() {
  Route::get('/my/wishlist/{slug}', 'WishlistController@myList')->name('shared.wishlist');
  Route::get('/my/wishlist/{slug}/purchase/{product}', 'WishlistController@purchase')->name('wishlist.purchase');
  Route::post('/my/wishlist/{slug}/purchase/{product}', 'BillingController@store')->name('wishlist.purchase.process');

});

Route::group(['prefix' => 'admin'], function() {
  Route::get('/', 'AdminController@index')->name('admin.index');
  Route::put('/confirm-payment/{id}', 'AdminController@updatePayment')->name('payment.approve');

});
