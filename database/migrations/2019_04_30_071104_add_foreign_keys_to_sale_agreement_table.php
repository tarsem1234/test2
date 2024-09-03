<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaleAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sale_agreement', function (Blueprint $table) {
            $table->foreign('offer_id', 'sale_agreement_ibfk_1')->references('id')->on('sale_offers')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sale_agreement', function (Blueprint $table) {
            $table->dropForeign('sale_agreement_ibfk_1');
        });
    }
}
