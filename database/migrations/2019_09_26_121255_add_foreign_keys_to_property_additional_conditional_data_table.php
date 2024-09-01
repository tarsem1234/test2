<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyAdditionalConditionalDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property_additional_conditional_data', function(Blueprint $table)
		{
			$table->foreign('property_id', 'property_additional_conditional_data_ibfk_1')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('additional_information_id', 'property_additional_conditional_data_ibfk_2')->references('id')->on('additional_information')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('property_additional_conditional_data', function(Blueprint $table)
		{
			$table->dropForeign('property_additional_conditional_data_ibfk_1');
			$table->dropForeign('property_additional_conditional_data_ibfk_2');
		});
	}

}
