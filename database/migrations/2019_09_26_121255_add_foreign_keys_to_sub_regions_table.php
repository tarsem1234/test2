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
        Schema::table('sub_regions', function (Blueprint $table) {
            $table->foreign('region_id', 'sub_regions_ibfk_1')->references('id')->on('regions')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_regions', function (Blueprint $table) {
            $table->dropForeign('sub_regions_ibfk_1');
        });
    }
};
