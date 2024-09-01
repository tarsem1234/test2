<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestionsSellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questions_seller', function(Blueprint $table)
		{
			$table->foreign('user_id', 'questions_seller_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('offer_id', 'questions_seller_ibfk_2')->references('id')->on('sale_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questions_seller', function(Blueprint $table)
		{
			$table->dropForeign('questions_seller_ibfk_1');
			$table->dropForeign('questions_seller_ibfk_2');
		});
	}

}
