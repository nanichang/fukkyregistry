<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {
  use SoftDeletes;
  protected $fillable = ['sku', 'name', 'slug', 'description', 'cover', 'quantity', 'price', 'status', 'category_id'];
  protected $dates = ['deleted_at'];
  public $primarykey = 'id';

  public function category() {
    return $this->belongsTo('App\Category');
  }
}
