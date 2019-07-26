<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Wishlist\WishlistContract;
use App\Repositories\Product\ProductContract;
use App\Wishlist;
use Sentinel;
use App\User;
use Session;

class WishlistController extends Controller
{
	protected $repo;
	protected $productsRepo;

	public function __construct(WishlistContract $wishlistContract, ProductContract $productContract) {
		$this->repo = $wishlistContract;
		$this->productsRepo = $productContract;
	}
	
	public function index() {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login');
		}
		else{
			$authUser = Sentinel::getUser();
			$wishlists = Wishlist::orderBy('created_at', 'desc')->where('user_id', $authUser->id)->get();
			return view('wishlist.index')->with('wishlists', $wishlists)->with('user', $authUser);
		}
	}
	
	public function store(Request $request, $slug) {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login');
		}
		else{
			$product = $this->productsRepo->findBySlug($slug);		

			$wishlist = new Wishlist();
			$wishlist->product_id = $product->id;
			$wishlist->product_name = $product->name;
			$wishlist->description = $product->description;
			$wishlist->quantity = 1;
			$wishlist->current_price = $product->current_price;
			$wishlist->product_image = $product->a_img;
			$wishlist->user_id = Sentinel::getUser()->id;
			$wishlist->slug = strtolower($product->slug);
			$wishlist->save();
			
			return redirect()->back()->with('success', $product->name.' added to wishlist successfully.');
		}
	}
	
	public function myList($slug) {
		$user = User::where('slug', $slug)->first();
		$wish = Wishlist::where('user_id', $user->id)
			->where('status', '=', 'unpaid')
			->orWhere('status', '=', 'processing')
			->get();
		return view('friend.index')->with('wishlists', $wish)->with('user', $user);
	}

	public function purchase($slug, $product) {
		$user = User::where('slug', $slug)->first();
		$wish = Wishlist::where('slug', $product)->first();
		$sum = $wish->sum('current_price');
		return view('checkout.index')->with('wishlist', $wish)->with('user', $user);
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
