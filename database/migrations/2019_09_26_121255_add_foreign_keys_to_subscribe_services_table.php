<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubscribeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscribe_services', function (Blueprint $table) {
            $table->foreign('user_id', 'subscribe_services_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('service_id', 'subscribe_services_ibfk_2')->references('id')->on('services')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscribe_services', function (Blueprint $table) {
            $table->dropForeign('subscribe_services_ibfk_1');
            $table->dropForeign('subscribe_services_ibfk_2');
        });
    }
}
