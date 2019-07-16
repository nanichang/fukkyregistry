<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('wishlists', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('product_id');
			$table->string('product_name');
			$table->text('description');
			$table->string('quantity');
			$table->string('current_price');
			$table->string('product_image');
			$table->string('user_id');
			$table->boolean('purchased')->default(false);
			$table->string('slug')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('wishlists');
	}
}
