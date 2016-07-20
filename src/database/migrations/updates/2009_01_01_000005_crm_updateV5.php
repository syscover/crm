<?php

use Illuminate\Database\Migrations\Migration;
use Syscover\Pulsar\Libraries\DBLibrary;

class CrmUpdateV5 extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
	public function up()
	{
		// rename columns
		// gender_301
		DBLibrary::renameColumn('009_301_customer', 'gender_301', 'gender_id_301', 'TINYINT', 3, true, true);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){}
}