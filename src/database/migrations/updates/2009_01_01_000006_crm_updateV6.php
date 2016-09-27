<?php

use Illuminate\Database\Migrations\Migration;
use Syscover\Pulsar\Libraries\DBLibrary;

class CrmUpdateV6 extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
	public function up()
	{
		// rename columns
		// birth_date_301
		DBLibrary::renameColumn('009_301_customer', 'birth_date_301', 'birth_date_301', 'INT', 10, false, true);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){}
}