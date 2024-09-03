<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyConditionDisclaimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_condition_disclaimer', function (Blueprint $table) {
            $table->foreign('property_id', 'property_condition_disclaimer_ibfk_1')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id', 'property_condition_disclaimer_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_condition_disclaimer', function (Blueprint $table) {
            $table->dropForeign('property_condition_disclaimer_ibfk_1');
            $table->dropForeign('property_condition_disclaimer_ibfk_2');
        });
    }
}
