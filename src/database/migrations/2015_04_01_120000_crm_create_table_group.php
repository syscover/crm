<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrmCreateTableGroup extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('012_300_group', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id_300')->unsigned();
            $table->string('name_300', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('012_300_group');
    }

}
