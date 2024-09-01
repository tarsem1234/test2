<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZipCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zip_codes', function(Blueprint $table)
		{
			$table->foreign('city_id', 'zip_codes_ibfk_1')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('state_id', 'zip_codes_ibfk_2')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zip_codes', function(Blueprint $table)
		{
			$table->dropForeign('zip_codes_ibfk_1');
			$table->dropForeign('zip_codes_ibfk_2');
		});
	}

}
