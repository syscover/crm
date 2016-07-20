<?php

use Illuminate\Database\Migrations\Migration;

class CrmUpdateV1 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasColumn('009_301_customer', 'treatment_id_301'))
		{
			Schema::table('009_301_customer', function ($table) {
				$table->tinyInteger('treatment_id_301')->unsigned()->nullable()->after('gender_id_301');

			});
		}

		if(!Schema::hasColumn('009_301_customer', 'state_id_301'))
		{
			Schema::table('009_301_customer', function ($table) {
				$table->tinyInteger('state_id_301')->unsigned()->nullable()->after('treatment_id_301');
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