<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVacationAvailableCheckinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacation_available_checkin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vacation_property_id')->index('vacation_property_id');
			$table->integer('available_week');
			$table->integer('checkin_day');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vacation_available_checkin');
	}

}
