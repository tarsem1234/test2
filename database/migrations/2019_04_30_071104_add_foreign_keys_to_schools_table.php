<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->foreign('school_district', 'schools_ibfk_1')->references('id')->on('school_districts')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('city', 'schools_ibfk_2')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('state', 'schools_ibfk_3')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign('schools_ibfk_1');
            $table->dropForeign('schools_ibfk_2');
            $table->dropForeign('schools_ibfk_3');
        });
    }
}
