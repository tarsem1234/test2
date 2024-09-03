<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_availabilities', function (Blueprint $table) {
            $table->foreign('property_id', 'property_availabilities_ibfk_2')->references('id')->on('properties')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_availabilities', function (Blueprint $table) {
            $table->dropForeign('property_availabilities_ibfk_2');
        });
    }
}
