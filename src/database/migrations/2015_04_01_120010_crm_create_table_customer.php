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
            $table->integer('group_301')->unsigned();
            $table->integer('date_301')->nullable();
            $table->string('company_301', 100)->nullable();
            $table->boolean('gender_301')->nullable();
            $table->string('name_301', 50)->nullable();
            $table->string('surname_301', 50)->nullable();
            $table->string('image_301', 255)->nullable();
            $table->integer('birth_date_301')->nullable()->unsigned();
            $table->string('email_301', 50)->nullable();
            $table->string('phone_301', 50)->nullable();
            $table->string('mobile_301', 50)->nullable();

            // access
            $table->string('user_301', 50);
            $table->string('password_301', 255);
            $table->boolean('active_301');

            // geolocation data
            $table->string('country_301', 2)->nullable();
            $table->string('territorial_area_1_301', 6)->nullable();
            $table->string('territorial_area_2_301', 10)->nullable();
            $table->string('territorial_area_3_301', 10)->nullable();
            $table->string('cp_301', 10)->nullable();
            $table->string('locality_301', 100)->nullable();
            $table->string('address_301', 150)->nullable();
            $table->string('latitude_301', 50)->nullable();
            $table->string('longitude_301', 50)->nullable();

            $table->text('data_301')->nullable();

            $table->foreign('country_301')->references('id_002')->on('001_002_country')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('territorial_area_1_301')->references('id_003')->on('001_003_territorial_area_1')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('territorial_area_2_301')->references('id_004')->on('001_004_territorial_area_2')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('territorial_area_3_301')->references('id_005')->on('001_005_territorial_area_3')
                ->onDelete('restrict')->onUpdate('cascade');


            // profesión
            // adquisición - medio por el que se dió de alta
            // Ingresos
            // suscribe a news??
            // observaciones internas
            // preguntas particulares
            // ¿cuantos hijos tiene? integer
            // ¿cuantas escapadas hace al año? integer
            // ¿que valor añadido busca en una escapada? select
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
