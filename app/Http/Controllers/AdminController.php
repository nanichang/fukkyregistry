<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Admin\AdminContract;
use App\Repositories\Billing\BillingContract;
use App\Repositories\Wishlist\WishlistContract;

use Sentinel;

class AdminController extends Controller {
	protected $repo;
	protected $wishlistRepo;
	protected $billingRepo;

	public function __construct(
		AdminContract $adminContract, 
		BillingContract $billingContract, 
		WishlistContract $wishlistContract
	) {
		$this->repo = $adminContract;
		$this->billingRepo = $billingContract;
		$this->wishlistRepo = $wishlistContract;
	}
	
	public function index() {
		// $authUser = Sentinel::getUser();
		$wishlists = $this->wishlistRepo->findAll();
		// dd($wishlists);
		
		return view('admin.index')->with('orders', $wishlists);
	}
	
	public function updatePayment(Request $request, $id) {
		$this->wishlistRepo->approvePayment($id);
	}
}
