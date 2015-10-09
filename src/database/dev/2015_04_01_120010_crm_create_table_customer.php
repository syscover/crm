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
            $table->integer('date_301')->nullable();
            $table->boolean('gender_301', 100)->nullable();
            $table->string('name_301', 100)->nullable();
            $table->string('surname_301', 100)->nullable();
            $table->string('image_301', 50)->nullable();
            $table->string('email_301', 50)->nullable();
            $table->integer('birthdate_301')->nullable();

            $table->string('phone_301', 50)->nullable();
            $table->string('mobile_301', 50)->nullable();

            // access
            $table->string('user_301', 50);
            $table->string('password_301', 255);
            $table->boolean('active_301');


            // profesión
            // adquisición - medio por el que se dió de alta
            // Ingresos
            // suscribe a news??
            // observaciones internas


            // preguntas particulares
            // ¿cuantos hijos tiene? integer
            // ¿cuantas escapadas hace al año? integer
            // ¿que valor añadido busca en una escapada? select

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
