<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndustryServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('industry_service', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('industry_id')->unsigned()->index('industry_id');
			$table->integer('service_id')->unsigned()->index('service_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('industry_service');
	}

}
