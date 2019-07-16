<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Shop\ShopContract;
use App\Repositories\Product\ProductContract;

class ShopController extends Controller {
	
	protected $repo;
	protected $productsRepo;

	public function __construct(ShopContract $shopContract, ProductContract $productContract) {
		$this->repo = $shopContract;
		$this->productsRepo = $productContract;
	}
	
	public function index(){
		$products = $this->productsRepo->findAll();
		return view('shop.index')->with('products', $products);
	}
	
	public function create()
	{
		//
	}
	
	public function store(Request $request)
	{
		//
	}
	
	public function show($id)
	{
		//
	}
	
	public function edit($id)
	{
		//
	}
	
	public function update(Request $request, $id)
	{
		//
	}
	
	public function delete($id)
	{
		//
	}
}
