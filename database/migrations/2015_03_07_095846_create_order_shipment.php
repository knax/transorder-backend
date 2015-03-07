<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderShipment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('order_shipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                  ->references('id')->on('orders')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('shipment_id')->unsigned();
            $table->foreign('shipment_id')
                  ->references('id')->on('shipments')
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
		Schema::drop('order_shipment');
	}

}
