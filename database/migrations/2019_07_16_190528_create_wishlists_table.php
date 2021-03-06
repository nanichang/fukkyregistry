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
			// $table->string('purchased')->default('false');
			$table->enum('status',['unpaid', 'processing', 'paid'])->default('unpaid');
			$table->string('slug')->nullable();
			// $table->bigInteger('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users');
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
