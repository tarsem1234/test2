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
        Schema::create('signers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('from_user_id')->unsigned()->index('from_user_id');
            $table->integer('invited_user_id')->unsigned()->index('invited_user_id');
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
        Schema::drop('signers');
    }
};
