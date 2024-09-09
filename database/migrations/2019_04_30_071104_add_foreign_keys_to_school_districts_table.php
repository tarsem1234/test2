<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_districts', function (Blueprint $table) {
            $table->foreign('state_id', 'school_districts_ibfk_1')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_districts', function (Blueprint $table) {
            $table->dropForeign('school_districts_ibfk_1');
        });
    }
};
