<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->foreign('county_id', 'properties_ibfk_10')->references('id')->on('counties')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('zip_code_id', 'properties_ibfk_11')->references('id')->on('zip_codes')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id', 'properties_ibfk_5')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id', 'properties_ibfk_6')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('city_id', 'properties_ibfk_7')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('state_id', 'properties_ibfk_8')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign('properties_ibfk_10');
            $table->dropForeign('properties_ibfk_11');
            $table->dropForeign('properties_ibfk_5');
            $table->dropForeign('properties_ibfk_6');
            $table->dropForeign('properties_ibfk_7');
            $table->dropForeign('properties_ibfk_8');
        });
    }
}
