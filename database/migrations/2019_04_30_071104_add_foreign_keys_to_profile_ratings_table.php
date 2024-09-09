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
        Schema::table('profile_ratings', function (Blueprint $table) {
            $table->foreign('from_user_id', 'profile_ratings_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id', 'profile_ratings_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_ratings', function (Blueprint $table) {
            $table->dropForeign('profile_ratings_ibfk_1');
            $table->dropForeign('profile_ratings_ibfk_2');
        });
    }
};
