<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategorySessionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_session_questions', function (Blueprint $table) {
            $table->foreign('category_session_id', 'category_session_questions_ibfk_1')->references('id')->on('category_sessions')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_session_questions', function (Blueprint $table) {
            $table->dropForeign('category_session_questions_ibfk_1');
        });
    }
}
