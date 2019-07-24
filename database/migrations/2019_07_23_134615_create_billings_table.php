<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('billings', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('country')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->text('address')->nullable();
			$table->text('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip_code')->nullable();
			$table->string('email')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('product_name')->nullable();
			$table->string('quantity')->nullable();
			$table->string('current_price')->nullable();
			$table->text('note')->nullable();
			$table->string('slug');
			$table->enum('status',['paid', 'processing', 'completed'])->default('processing');
			$table->bigInteger('wishlist_id')->unsigned();
			$table->foreign('wishlist_id')->references('id')->on('wishlists');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('billings');
	}
}
