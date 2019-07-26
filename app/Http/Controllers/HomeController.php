<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductContract;

class HomeController extends Controller {
  
  protected $productsRepo;
  public function __construct(ProductContract $productContract) {
    $this->productsRepo = $productContract;
  }

  public function index() {
    $products = $this->productsRepo->findAll();
    // dd($products);
    return view('pages.index')->with('products', $products);
  }

  public function aboutUs() {
    return view('layouts.aboutus');
  }

  public function contactUs() {
    return view('layouts.contactus');
  }

}
