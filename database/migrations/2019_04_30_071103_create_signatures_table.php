<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signatures', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id')->index('offer_id');
            $table->integer('user_id')->unsigned()->index('user_id');
            $table->smallInteger('signature_type')->comment('1=>lead based, 2=>property disclaimer, 3=>advisory to buyers and sellers, 4=>sale agreement,5=>VA FHA, 6=>post closing occupancy agreement');
            $table->string('signature', 191);
            $table->string('ip', 191);
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
        Schema::drop('signatures');
    }
}
