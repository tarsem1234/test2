<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMilitaryBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('military_bases', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('base', 191);
            $table->integer('city_id')->index('city_id');
            $table->integer('state_id')->index('state_id');
            $table->string('branch', 191);
            $table->string('sub_branch', 191);
            $table->float('lat', 10, 0);
            $table->float('lng', 10, 0);
            $table->integer('zipcode_id')->index('zipcode_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('military_bases');
    }
}
