<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_session_questions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_session_id')->index('category_session_id');
            $table->string('question', 191);
            $table->boolean('type');
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
        Schema::drop('category_session_questions');
    }
};
