<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsSellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions_seller', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('offer_id')->index('offer_id');
			$table->boolean('earnest_money')->default(2)->comment('1=>Yes, 2=>No');
			$table->smallInteger('percentage_of_earnest_money')->nullable();
			$table->integer('amount_for_earnest_money')->nullable();
			$table->string('where_funds_deposited', 191)->nullable();
			$table->string('legal_firm_address', 191)->nullable();
			$table->text('household_items', 65535)->nullable();
			$table->boolean('real_estate_agent')->default(2);
			$table->string('real_estate_firm_name', 191)->nullable();
			$table->decimal('commission', 10, 0)->nullable();
			$table->string('agent_name', 191)->nullable();
			$table->bigInteger('agent_phone')->nullable();
			$table->boolean('houseowners_associations')->default(2);
			$table->date('date_of_occupancy')->nullable();
			$table->string('require_time', 191)->nullable();
			$table->date('property_vacant_date')->nullable();
			$table->boolean('joint_cowners')->nullable()->default(2)->comment('1 => \'Yes\', 2 => \'No');
			$table->string('partners', 191)->nullable();
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
		Schema::drop('questions_seller');
	}

}
