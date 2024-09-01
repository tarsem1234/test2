<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyConditionalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_conditional_data', function (Blueprint $table) {
                        $table->increments('id');
                        $table->integer('property_id')->index('property_id');
                        $table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('state_id')->index('state_id');
			$table->integer('property_name');
			$table->boolean('property_type');
			$table->integer('city_id')->index('city_id');
			$table->integer('county_id')->nullable()->index('county_id');
			$table->integer('zip_code_id')->index('zip_code_id');
			$table->string('townhouse_apt', 191)->nullable();
			$table->string('street_address', 191);
			$table->decimal('latitude', 11, 8)->nullable();
			$table->decimal('longitude', 11, 8)->nullable();
			$table->decimal('price', 12);
			$table->string('virtual_tour_url', 191)->nullable();
			$table->integer('pets')->nullable()->default(0);
			$table->string('lease_term', 191)->nullable();
			$table->integer('display_phone')->default(0);
			$table->integer('agree');
			$table->boolean('status')->nullable()->comment('1 => \'Rented\',  2 => \'Available\', 3 => \'Sold\',  4 => \'In Progress\', 5=>\'Unavailable\'');
			$table->boolean('lead_based')->nullable()->comment('true=>1, false=>2');
			$table->boolean('lead_based_report')->nullable()->comment('true=>1, false=>2');
			$table->date('back_to_market_date')->nullable();
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
        Schema::dropIfExists('propeties_conditional_data');
    }
}
