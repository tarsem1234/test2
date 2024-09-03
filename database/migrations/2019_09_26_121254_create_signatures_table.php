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
            $table->smallInteger('signature_type')->nullable()->comment('1=>lead based, 2=>property disclaimer, 3=>advisory to buyers and sellers, 4=>sale agreement,5=>VA FHA, 6=>post closing occupancy agreement');
            $table->string('signature', 191);
            $table->string('fullname');
            $table->smallInteger('type')->comment('1 => \'buyer\', 2 => \'seller\', 3 => \'cobuyer\', 4 => \'coseller\'');
            $table->smallInteger('affix_status')->comment('0 => \'signature not done\', 1 => \'signature done\'');
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
