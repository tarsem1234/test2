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
        Schema::create('property_additional_conditional_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->index('property_id');
            $table->integer('additional_information_id')->index('additional_information_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_additional_conditional_data');
    }
};
