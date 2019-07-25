<?php
namespace App\Repositories\Category;
use App\Repositories\Category\CategoryContract;
use App\Category;

class EloquentCategoryRepository implements CategoryContract {

  public function create($request) {
    $category = new Category();
    $category->name = $request->name;
    $category->description = $request->description;
    $category->cover = $request->cover; // Upload to cloudinary

    $name_slug = preg_replace('/\s+/', '-', $request->name);
    $category->slug = $name_slug;
    $category->save();
    return $category
  }
}
