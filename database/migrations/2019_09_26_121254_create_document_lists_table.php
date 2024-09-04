<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_lists', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('state_id')->index('state_id');
            $table->string('document', 191);
            $table->boolean('status')->default(0)->comment('timeshare_calender');
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
        Schema::drop('document_lists');
    }
}
