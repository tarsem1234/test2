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
        Schema::table('auto_email_logs', function (Blueprint $table) {
            $table->foreign('property_id', 'auto_email_logs_ibfk_1')->references('id')->on('properties')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('to_user_id', 'auto_email_logs_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('from_user_id', 'auto_email_logs_ibfk_3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('auto_email_logs', function (Blueprint $table) {
            $table->dropForeign('auto_email_logs_ibfk_1');
            $table->dropForeign('auto_email_logs_ibfk_2');
            $table->dropForeign('auto_email_logs_ibfk_3');
        });
    }
};
