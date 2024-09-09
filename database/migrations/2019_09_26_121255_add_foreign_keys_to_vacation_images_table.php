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
        Schema::table('vacation_images', function (Blueprint $table) {
            $table->foreign('vacation_property_id', 'vacation_images_ibfk_1')->references('id')->on('vacation_properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacation_images', function (Blueprint $table) {
            $table->dropForeign('vacation_images_ibfk_1');
        });
    }
};
