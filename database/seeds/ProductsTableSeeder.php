<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {

    \DB::table('products')->delete();
        
    \DB::table('products')->insert(array (
      0 => array (
        'id' => 1,
        'slug' => 'CK-Blue-Schoolboy-Blazer'.rand(),
        'name' => 'CK Blue Schoolboy Blazer',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
        'a_img' => 'ed60e-mpd000c.jpg',
        'b_img' => 'df7b4-mpd000t.jpg',
        'c_img' => '09a16-mpd000t_6.jpg',
        'category_id' => 1,
        'quantity' => 8,
        'current_price' => 25.0,
      ),
      1 => array (
        'id' => 2,
        'slug' => 'Dior-Blue-Peacoat-Trench'.rand(),
        'name' => 'Dior Blue Peacoat Trench',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
        'a_img' => '0c88d-mtk009a.jpg',
        'b_img' => '1d3f9-mtk009b.jpg',
        'c_img' => '604e7-mtk009t.jpg',
        'category_id' => 1,
        'quantity' => 5,
        'current_price' => 15.0,
      ),
      2 => array (
        'id' => 3,
        'slug' => 'Fendi-Waxed-Blue-Jacket'.rand(),
        'name' => 'Fendi Waxed Blue Jacket',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
        'a_img' => '51c1b-pmo000a.jpg',
        'b_img' => 'c10d9-pmo000b.jpg',
        'c_img' => 'bdb32-pmo000c.jpg',
        'category_id' => 2,
        'quantity' => 3,
        'current_price' => 80.0,
      ),
      3 => array (
        'id' => 4,
        'slug' => 'Gucci-Red-Neck-Sweater'.rand(),
        'name' => 'Gucci Red Neck Sweater',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
        'a_img' => '8d383-mtk006a.jpg',
        'b_img' => '07e30-mtk006b.jpg',
        'c_img' => '9cbb3-mtk006t.jpg',
        'category_id' => 2,
        'quantity' => 5,
        'current_price' => 12.0,
      ),
      4 => array (
        'id' => 5,
        'slug' => 'Pepe-Jeans-Outwear-Jeans'.rand(),
        'name' => 'Pepe Jeans Outwear Jeans',
        'description' => '<p><span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</span></p>',
        'a_img' => 'f0a95-mpd000a.jpg',
        'b_img' => '87131-mpd000b.jpg',
        'c_img' => '',
        'category_id' => 2,
        'quantity' => 23,
        'current_price' => 19.0,
      ),
            
    ));

  }
}
