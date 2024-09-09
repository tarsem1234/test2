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
        Schema::create('forum_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index('forum_replies_user_id_foreign');
            $table->integer('forum_id')->unsigned()->index('forum_replies_forum_id_foreign');
            $table->text('reply', 65535);
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
        Schema::drop('forum_replies');
    }
};
