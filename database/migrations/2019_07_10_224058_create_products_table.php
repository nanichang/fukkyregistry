<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('sku')->nullable();
			$table->string('name');
			$table->string('slug');
			$table->text('description')->nullable();
			$table->string('cover')->nullable();
			$table->string('a_img')->nullable();
			$table->string('b_img')->nullable();
			$table->string('c_img')->nullable();
			$table->integer('quantity');
			$table->decimal('current_price');
			$table->decimal('discount_price')->nullable();
			$table->integer('status')->default(0);
			$table->integer('category_id');
			// $table->foreign('category_id')->references('id')->on('categories');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('products');
	}
}
