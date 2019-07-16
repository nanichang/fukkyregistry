<?php
namespace App\Repositories\Product;
use App\Repositories\Product\ProductContract;
use App\Product;

class EloquentProductRepository implements ProductContract {

  public function create($request) {
    $product = new Product;
    $product->title = $request->title;
    $product->body = $request->body;
    $str = strtolower($request->title);

      // $destination = 'public/uploads';

    $product->slug = preg_replace('/\s+/', '-', $str);

    if($request->feature_image) {
      $fileName = time() . '.' . $request->feature_image->extension();
      $product->feature_image = $request->feature_image->storeAs('/public/uploads', $fileName);

      Image::make($product->feature_image)->resize(100,100)->save($product->feature_image);
    }

    $product->save();      
    return $product;
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
