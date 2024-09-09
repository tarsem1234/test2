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
        Schema::table('networks', function (Blueprint $table) {
            $table->foreign('from_user_id', 'networks_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('to_user_id', 'networks_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->dropForeign('networks_ibfk_1');
            $table->dropForeign('networks_ibfk_2');
        });
    }
};
