<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('rent_signatures', function (Blueprint $table) {
            $table->foreign('offer_id', 'rent_signatures_ibfk_1')->references('id')->on('rent_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id', 'rent_signatures_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rent_signatures', function (Blueprint $table) {
            $table->dropForeign('rent_signatures_ibfk_1');
            $table->dropForeign('rent_signatures_ibfk_2');
        });
    }
};
