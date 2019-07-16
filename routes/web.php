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

Route::group(['prefix' => 'auth'], function() {
  Route::get('/login', 'LoginController@getLogin')->name('auth.login');
  Route::post('/login', 'LoginController@post')->name('auth.post.login');
  Route::get('/register', 'RegisterController@register')->name('auth.register');
  Route::post('/register', 'RegisterController@store')->name('auth.post.register');
});

Route::group(['prefix' => 'dashboard'], function() {
  // Route::get('/', 'DashboardController@index')->name('dashboard.index');
  Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');
});

Route::group(['prefix' => 'shop'], function() {
  Route::get('/', 'ShopController@index')->name('shop.index');
  Route::get('/wishlist/{slug}', 'WishlistController@store')->name('wishlist.store');
});
