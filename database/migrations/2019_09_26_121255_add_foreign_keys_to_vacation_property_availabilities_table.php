<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVacationPropertyAvailabilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vacation_property_availabilities', function(Blueprint $table)
		{
			$table->foreign('vacation_property_id', 'vacation_property_availabilities_ibfk_1')->references('id')->on('vacation_properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vacation_property_availabilities', function(Blueprint $table)
		{
			$table->dropForeign('vacation_property_availabilities_ibfk_1');
		});
	}

}
