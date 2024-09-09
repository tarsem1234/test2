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
    public function up(): void
    {
        Schema::table('questions_seller_post_closing', function (Blueprint $table) {
            $table->foreign('user_id', 'questions_seller_post_closing_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('questions_seller_post_closing', function (Blueprint $table) {
            $table->dropForeign('questions_seller_post_closing_ibfk_1');
        });
    }
};
