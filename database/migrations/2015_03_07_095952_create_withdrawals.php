<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawals extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('for');
            $table->bigInteger('amount');
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
		Schema::drop('withdrawals');
	}

}
