<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Syscover\Pulsar\Libraries\DBLibrary;

class CrmUpdateV4 extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
	public function up()
	{
		// rename columns
		// treatment_301
		DBLibrary::renameColumn('009_301_customer', 'treatment_301', 'treatment_id_301', 'TINYINT', 3, true, true);
		// state_301
		DBLibrary::renameColumn('009_301_customer', 'state_301', 'state_id_301', 'TINYINT', 3, true, true);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){}
}