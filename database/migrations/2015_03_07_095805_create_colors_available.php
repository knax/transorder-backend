<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsAvailable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('colors_available', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('stock')->default(0);
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                  ->references('id')->on('products')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colors_available');
	}

}
