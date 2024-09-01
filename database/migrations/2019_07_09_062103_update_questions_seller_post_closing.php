<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateQuestionsSellerPostClosing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('questions_seller_post_closing', function($table) {
        $table->tinyInteger('show_post_closing')->default(2)->comment('1=>On Yes Button, 2=>On No Button')->after('additional_provisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('questions_seller_post_closing', function($table) {
        $table->dropColumn('show_post_closing')->after('additional_provisions');
    });
    }
}
