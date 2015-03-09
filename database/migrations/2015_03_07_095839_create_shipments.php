<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipments extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receiver_name');
            $table->text('receiver_address');
            $table->bigInteger('total_price');
            $table->string('status')->default('shipment.status.unpaid');
            $table->integer('delivery_service_id')->unsigned();
            $table->foreign('delivery_service_id')
                  ->references('id')->on('delivery_services')
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
        Schema::drop('shipments');
    }
}
