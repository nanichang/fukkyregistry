<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('categories')->delete();
      
    DB::table('categories')->insert(array (
      0 => array (
        'id' => 1,  
        'name' => 'Men',
        'slug' => 'men',
        'description' => 'Men categories',
        'm_img' => 'f213f-breadcrumb_bg2.jpg',
        'l_img' => '',
        'f_img' => '1.jpg',
      ),

      1 => array (
        'id' => 2,
        'name' => 'Women',
        'slug' => 'women',
        'description' => 'Women categories',
        'm_img' => 'f213f-breadcrumb_bg2.jpg',
        'l_img' => '',
        'f_img' => '2.jpg',
      ),
      2 => array (
        'id' => 3,
        'name' => 'Electronics',
        'slug' => 'electronics',
        'description' => 'Electronics categories',
        'm_img' => 'f213f-breadcrumb_bg2.jpg',
        'l_img' => '',
        'f_img' => '2.jpg',
      ),
      
    ));
  }
}
