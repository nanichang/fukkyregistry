<?php
namespace App\Repositories\Billing;
use App\Repositories\Billing\BillingContract;
use App\Billing;

class EloquentBillingRepository implements BillingContract {
  
  public function create($request, $product) {
    $billing = new Billing();
    $billing->country = $request->country;
    $billing->first_name = $request->first_name;
    $billing->last_name = $request->last_name;
    $billing->address = $request->address;
    $billing->address2 = $request->address2;
    $billing->city = $request->city;
    $billing->state = $request->state;
    $billing->zip_code = $request->zip_code;
    $billing->email = $request->email;
    $billing->phone_number = $request->phone_number;
    $billing->product_name = $request->product_name;
    $billing->quantity = $request->quantity;
    $billing->current_price = $request->current_price;
    $billing->note = $request->note;

    // $wishlist->slug = preg_replace('/\s+/', '-', $str);

    $billing->slug = $product->slug;
    $billing->wishlist()->associate($product);
    // dd($billing);
    $billing->save();
  }

  
}
