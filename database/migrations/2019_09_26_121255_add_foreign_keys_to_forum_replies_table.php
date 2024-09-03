<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_replies', function (Blueprint $table) {
            $table->foreign('user_id', 'forum_replies_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('forum_id', 'forum_replies_ibfk_2')->references('id')->on('forums')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_replies', function (Blueprint $table) {
            $table->dropForeign('forum_replies_ibfk_1');
            $table->dropForeign('forum_replies_ibfk_2');
        });
    }
}
