<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndustryServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('industry_service', function(Blueprint $table)
		{
			$table->foreign('industry_id', 'industry_service_ibfk_1')->references('id')->on('industries')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('service_id', 'industry_service_ibfk_2')->references('id')->on('services')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('industry_service', function(Blueprint $table)
		{
			$table->dropForeign('industry_service_ibfk_1');
			$table->dropForeign('industry_service_ibfk_2');
		});
	}

}
