<?php

use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\DB;


class CrmUpdateV2 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasColumn('009_301_customer', 'lang_301'))
		{
			Schema::table('009_301_customer', function ($table) {
				$table->string('lang_301', 2)->default('es')->after('id_301');
				$table->foreign('lang_301', 'fk06_012_301_customer')->references('id_001')->on('001_001_lang')
					->onDelete('restrict')->onUpdate('cascade');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){}

}