<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_images', function (Blueprint $table) {
            $table->foreign('property_id', 'property_images_ibfk_2')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_images', function (Blueprint $table) {
            $table->dropForeign('property_images_ibfk_2');
        });
    }
}
