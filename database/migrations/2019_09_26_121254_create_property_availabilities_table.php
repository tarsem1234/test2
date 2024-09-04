<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_availabilities', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('property_id')->index('property_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('user_id')->unsigned()->nullable()->index('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_availabilities');
    }
}
