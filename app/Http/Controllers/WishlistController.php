<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Wishlist\WishlistContract;
use App\Repositories\Product\ProductContract;
use App\Wishlist;
use Sentinel;

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
            dd($wishlists);
            return view('wishlist.index')->with('wishlists', $wishlists);
        }
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request, $slug)
    {
        // dd($slug);
        $product = $this->productsRepo->findBySlug($slug);
        // dd($product);

        $wishlist = new Wishlist();
        $wishlist->product_id = $product->id;
        $wishlist->product_name = $product->name;
        $wishlist->description = $product->description;
        $wishlist->quantity = 1;
        $wishlist->current_price = $product->current_price;
        $wishlist->product_image = $product->a_img;
        $wishlist->user_id = Sentinel::getUser()->id;
        $wishlist->purchased = false;
        $wishlist->slug = strtolower($product->slug);
        $wishlist->save();
        
        return redirect()->back();
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
