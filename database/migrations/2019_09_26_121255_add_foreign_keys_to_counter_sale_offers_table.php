<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCounterSaleOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('counter_sale_offers', function(Blueprint $table)
		{
			$table->foreign('property_id', 'counter_sale_offers_ibfk_1')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('sale_offer_id', 'counter_sale_offers_ibfk_2')->references('id')->on('sale_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'counter_sale_offers_ibfk_3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('counter_sale_offers', function(Blueprint $table)
		{
			$table->dropForeign('counter_sale_offers_ibfk_1');
			$table->dropForeign('counter_sale_offers_ibfk_2');
			$table->dropForeign('counter_sale_offers_ibfk_3');
		});
	}

}
