<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyConditionalModificationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::table('property_conditional_data', function (Blueprint $table) {
            $table->integer('offer_id')->unsigned()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('property_conditional_data', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        //
    }

}
