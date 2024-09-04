<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_interests', function (Blueprint $table) {
            $table->foreign('user_profile_id', 'user_interests_ibfk_2')->references('id')->on('user_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_interests', function (Blueprint $table) {
            $table->dropForeign('user_interests_ibfk_2');
        });
    }
}
