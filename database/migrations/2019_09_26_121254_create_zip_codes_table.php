<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZipCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zip_codes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('city_id')->index('city_id');
			$table->integer('state_id')->index('state_id');
			$table->string('zipcode', 50);
			$table->string('type', 250)->index('type_id');
			$table->string('latitude', 100);
			$table->string('longitude', 100);
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
		Schema::drop('zip_codes');
	}

}
