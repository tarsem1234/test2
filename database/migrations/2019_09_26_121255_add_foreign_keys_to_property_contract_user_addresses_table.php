<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyContractUserAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property_contract_user_addresses', function(Blueprint $table)
		{
			$table->foreign('user_id', 'property_contract_user_addresses_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('sale_agreement_id', 'property_contract_user_addresses_ibfk_2')->references('id')->on('sale_agreement')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('rent_agreement_id', 'property_contract_user_addresses_ibfk_3')->references('id')->on('rent_agreement')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('property_contract_user_addresses', function(Blueprint $table)
		{
			$table->dropForeign('property_contract_user_addresses_ibfk_1');
			$table->dropForeign('property_contract_user_addresses_ibfk_2');
			$table->dropForeign('property_contract_user_addresses_ibfk_3');
		});
	}

}
