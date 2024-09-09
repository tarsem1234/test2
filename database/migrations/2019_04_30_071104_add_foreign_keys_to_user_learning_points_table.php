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
        Schema::table('user_learning_points', function (Blueprint $table) {
            $table->foreign('user_id', 'user_learning_points_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('category_session_id', 'user_learning_points_ibfk_2')->references('id')->on('category_sessions')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_learning_points', function (Blueprint $table) {
            $table->dropForeign('user_learning_points_ibfk_1');
            $table->dropForeign('user_learning_points_ibfk_2');
        });
    }
};
