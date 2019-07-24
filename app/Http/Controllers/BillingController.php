<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Billing\BillingContract;
use App\Repositories\Wishlist\WishlistContract;
use App\Repositories\Register\RegisterContract;
use App\Billing;

class BillingController extends Controller {
	protected $repo;
	protected $wishlistRepo;
	protected $registerRepo;

	public function __construct(
		BillingContract $billingContract, 
		WishlistContract $wishlistContract,
		RegisterContract $registerContract
	) {
		$this->repo = $billingContract;
		$this->wishlistRepo = $wishlistContract;
		$this->registerRepo = $registerContract;
	}
	
	public function index()
	{
		//
	}
	
	public function create()
	{
		//
	}
	
	public function store(Request $request, $slug, $product) {
		// Find a wishlist product by slug
		$product = $this->wishlistRepo->findBySlug($product);
		
		// Create billing profile for the product being purchased.
		$billing = $this->repo->create($request, $product);

		// Update the wishlist product payment status to true.
		$paymentStatus = $this->wishlistRepo->updatePaymentStatus($product->id);

		return redirect()->route('shared.wishlist');
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
