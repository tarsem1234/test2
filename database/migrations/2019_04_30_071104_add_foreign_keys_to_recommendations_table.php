<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecommendationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recommendations', function(Blueprint $table)
		{
			$table->foreign('user_id', 'recommendations_ibfk_3')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('from_user_id', 'recommendations_ibfk_4')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recommendations', function(Blueprint $table)
		{
			$table->dropForeign('recommendations_ibfk_3');
			$table->dropForeign('recommendations_ibfk_4');
		});
	}

}
