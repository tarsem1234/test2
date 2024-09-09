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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index('comments_user_id_foreign');
            $table->integer('blog_id')->unsigned()->index('comments_blog_id_foreign');
            $table->text('comment', 65535);
            $table->smallInteger('status')->default(1)->comment('0 => Disapproved, 1 => Approved');
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
        Schema::drop('comments');
    }
};
