<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumViewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_views', function(Blueprint $table)
		{
			$table->foreign('forum_id', 'forum_views_ibfk_1')->references('id')->on('forums')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_views', function(Blueprint $table)
		{
			$table->dropForeign('forum_views_ibfk_1');
		});
	}

}
