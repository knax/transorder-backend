<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeposits extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('proof_photo')->nullable();
            $table->bigInteger('amount');
            $table->text('description')->nullable();
            $table->boolean('isApproved')->default(false);
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')
                  ->references('id')->on('banks')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('user_detail_id')->unsigned();
            $table->foreign('user_detail_id')
                  ->references('id')->on('user_details')
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
        Schema::drop('deposits');
    }
}
