<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRentAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent_agreement', function (Blueprint $table) {
            $table->foreign('rent_offer_id', 'rent_agreement_ibfk_1')->references('id')->on('rent_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent_agreement', function (Blueprint $table) {
            $table->dropForeign('rent_agreement_ibfk_1');
        });
    }
}
