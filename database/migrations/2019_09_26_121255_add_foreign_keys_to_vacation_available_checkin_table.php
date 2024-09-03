<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVacationAvailableCheckinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacation_available_checkin', function (Blueprint $table) {
            $table->foreign('vacation_property_id', 'vacation_available_checkin_ibfk_1')->references('id')->on('vacation_properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacation_available_checkin', function (Blueprint $table) {
            $table->dropForeign('vacation_available_checkin_ibfk_1');
        });
    }
}
