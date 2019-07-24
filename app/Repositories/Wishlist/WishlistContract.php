<?php
namespace App\Repositories\Wishlist;
interface WishlistContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function findBySlug($slug);
  public function update($request, $id);
  public function updatePaymentStatus($id);
  public function remove($id);
}
