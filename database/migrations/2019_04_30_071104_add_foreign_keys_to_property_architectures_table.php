<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyArchitecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_architectures', function (Blueprint $table) {
            $table->foreign('property_id', 'property_architectures_ibfk_4')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('school_district_id', 'property_architectures_ibfk_5')->references('id')->on('school_districts')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_architectures', function (Blueprint $table) {
            $table->dropForeign('property_architectures_ibfk_4');
            $table->dropForeign('property_architectures_ibfk_5');
        });
    }
}
