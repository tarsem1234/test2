<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategorySessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_sessions', function (Blueprint $table) {
            $table->foreign('category_id', 'category_sessions_ibfk_1')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_sessions', function (Blueprint $table) {
            $table->dropForeign('category_sessions_ibfk_1');
        });
    }
}
