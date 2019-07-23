<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'product_id', 
    'product_name', 
    'description', 
    'quantity', 
    'current_price', 
    'product_image',
    'purchased',
    'slug',
    'user_id',
  ];


  public function user() {
    return $this->belongsTo('App\User');
  }

  public function billings() {
    return $this->hasMany('App\Billing');
  }
} 
