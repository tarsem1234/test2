<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('properties', function(Blueprint $table)
		{
			$table->foreign('zip_code_id', 'properties_ibfk_10')->references('id')->on('zip_codes')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'properties_ibfk_11')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('state_id', 'properties_ibfk_3')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('city_id', 'properties_ibfk_4')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('county_id', 'properties_ibfk_9')->references('id')->on('counties')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('properties', function(Blueprint $table)
		{
			$table->dropForeign('properties_ibfk_10');
			$table->dropForeign('properties_ibfk_11');
			$table->dropForeign('properties_ibfk_3');
			$table->dropForeign('properties_ibfk_4');
			$table->dropForeign('properties_ibfk_9');
		});
	}

}
