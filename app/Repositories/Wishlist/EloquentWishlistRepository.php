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
    $products = Product::all();
    return $products;
  }

  // return a Product by ID
  public function findById($id) {
    return Product::where('id', $id)->first();
  }

  public function findBySlug($slug){
    return Product::where('slug', $slug)->first();
  }

  // Update a Product
  public function update($request, $id) {
    $product = $this->findById($id);
    $product->title = $request->title;
    $product->body = $request->body;
    $product->save();
    return $product;
  }

  // Remove a Blog
  public function remove($id) {
      $product= $this->findById($id);
      return $product->delete();
  }
}
