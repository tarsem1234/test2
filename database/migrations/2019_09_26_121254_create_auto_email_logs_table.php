<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutoEmailLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auto_email_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->nullable()->index('property_id');
			$table->integer('to_user_id')->unsigned()->index('to_user_id');
			$table->integer('from_user_id')->unsigned()->nullable()->index('from_user_id');
			$table->text('email_subject', 65535);
			$table->string('flag', 191)->nullable();
			$table->text('message', 65535);
			$table->string('source_script', 191)->nullable();
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
		Schema::drop('auto_email_logs');
	}

}
