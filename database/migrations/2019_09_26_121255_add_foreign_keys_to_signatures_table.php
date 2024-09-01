<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSignaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('signatures', function(Blueprint $table)
		{
			$table->foreign('offer_id', 'signatures_ibfk_1')->references('id')->on('sale_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'signatures_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('signatures', function(Blueprint $table)
		{
			$table->dropForeign('signatures_ibfk_1');
			$table->dropForeign('signatures_ibfk_2');
		});
	}

}
