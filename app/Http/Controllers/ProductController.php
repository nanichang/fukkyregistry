<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductContract;

class ProductController extends Controller {
    protected $repo;
    public function __construct(ProductContract $productContract) {
        $this->repo = $productContract;
    }
    
    public function index()
    {
        //
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($slug)
    {
        dd($slug);
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
