<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrmCreateTableCustomer extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('012_301_customer', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id_301')->unsigned();
            $table->string('name_301', 100)->nullable();
            $table->string('surname_301', 100)->nullable();
            $table->string('email_301', 50)->nullable();
            $table->integer('birthdate_301')->nullable();


            // geolocation data
            $table->string('country_301', 2);
            $table->string('territorial_area_1_301', 6)->nullable();
            $table->string('territorial_area_2_301', 10)->nullable();
            $table->string('territorial_area_3_301', 10)->nullable();
            $table->string('cp_301', 10)->nullable();
            $table->string('locality_301', 100)->nullable();
            $table->string('address_301', 150)->nullable();
            $table->string('latitude_301', 50)->nullable();
            $table->string('longitude_301', 50)->nullable();

            $table->text('data_301')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('012_301_customer');
    }

}
