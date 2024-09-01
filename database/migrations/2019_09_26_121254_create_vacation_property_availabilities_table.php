<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVacationPropertyAvailabilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacation_property_availabilities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vacation_property_id')->index('vacation_property_id');
			$table->date('start_date');
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
		Schema::drop('vacation_property_availabilities');
	}

}
