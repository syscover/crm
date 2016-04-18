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
        if (! Schema::hasTable('009_301_customer'))
        {
            Schema::create('009_301_customer', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->increments('id_301')->unsigned();
                $table->string('lang_301', 2);
                $table->string('remember_token_301')->nullable();
                $table->integer('group_301')->unsigned();
                $table->integer('date_301');
                $table->string('company_301')->nullable();
                $table->string('tin_301')->nullable();
                $table->boolean('gender_301')->nullable();
                $table->tinyInteger('treatment_301')->unsigned()->nullable();
                $table->tinyInteger('state_301')->unsigned()->nullable();
                $table->string('name_301')->nullable();
                $table->string('surname_301')->nullable();
                $table->string('avatar_301')->nullable();
                $table->integer('birth_date_301')->unsigned()->nullable();
                $table->string('email_301');
                $table->string('phone_301')->nullable();
                $table->string('mobile_301')->nullable();

                // access
                $table->string('user_301');
                $table->string('password_301');
                $table->boolean('active_301');
                $table->boolean('confirmed_301');

                // geolocation data
                $table->string('country_301', 2)->nullable();
                $table->string('territorial_area_1_301', 6)->nullable();
                $table->string('territorial_area_2_301', 10)->nullable();
                $table->string('territorial_area_3_301', 10)->nullable();
                $table->string('cp_301')->nullable();
                $table->string('locality_301')->nullable();
                $table->string('address_301')->nullable();
                $table->string('latitude_301')->nullable();
                $table->string('longitude_301')->nullable();

                $table->integer('custom_field_group_301')->unsigned()->nullable();

                $table->text('data_301')->nullable();

                $table->foreign('group_301', 'fk01_012_301_customer')->references('id_300')->on('009_300_group')
                    ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('country_301', 'fk02_012_301_customer')->references('id_002')->on('001_002_country')
                    ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('territorial_area_1_301', 'fk03_012_301_customer')->references('id_003')->on('001_003_territorial_area_1')
                    ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('territorial_area_2_301', 'fk04_012_301_customer')->references('id_004')->on('001_004_territorial_area_2')
                    ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('territorial_area_3_301', 'fk05_012_301_customer')->references('id_005')->on('001_005_territorial_area_3')
                    ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('lang_301', 'fk06_012_301_customer')->references('id_001')->on('001_001_lang')
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('009_301_customer'))
        {
            Schema::drop('009_301_customer');
        }
    }
}