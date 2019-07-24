<?php
namespace App\Repositories\Wishlist;
use App\Repositories\Wishlist\WishlistContract;
use App\Wishlist;

class EloquentWishlistRepository implements WishlistContract {

  public function create($request) {
    $wishlist = new Wishlist;
    $wishlist->product_name = $request->title;
    $wishlist->body = $request->body;
    $str = strtolower($request->title);

      // $destination = 'public/uploads';

    $wishlist->slug = preg_replace('/\s+/', '-', $str);

    $wishlist->save();      
    return $wishlist;
  }

  // return all Products
  public function findAll() {
    $products = Wishlist::all();
    return $products;
  }

  // return a Wishlist by ID
  public function findById($id) {
    return Wishlist::where('id', $id)->first();
  }

  public function findBySlug($slug){
    return Wishlist::where('slug', $slug)->first();
  }

  // Update a Wishlist
  public function update($request, $id) {
    $product = $this->findById($id);
    $product->title = $request->title;
    $product->body = $request->body;
    $product->save();
    return $product;
  }

  public function updatePaymentStatus($id){
    $product = $this->findById($id);
    $product->status = 'processing';
    $product->save();
    return $product;
  }

  public function approvePayment ($id) {
    $product = $this->findById($id);
    $product->status = 'paid';
    $product->save();
    return $product; 
  }

  // Remove a Blog
  public function remove($id) {
    $product= $this->findById($id);
    return $product->delete();
  }
}
