<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('postal', 250);
			$table->string('state', 250);
			$table->string('latitude', 100)->nullable();
			$table->string('longitude', 150)->nullable();
			$table->timestamps();
			$table->string('region', 250);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('states');
	}

}
