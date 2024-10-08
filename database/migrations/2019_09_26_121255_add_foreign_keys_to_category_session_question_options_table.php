<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategorySessionQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_session_question_options', function (Blueprint $table) {
            $table->foreign('category_session_question_id', 'category_session_question_options_ibfk_1')->references('id')->on('category_session_questions')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_session_question_options', function (Blueprint $table) {
            $table->dropForeign('category_session_question_options_ibfk_1');
        });
    }
}
