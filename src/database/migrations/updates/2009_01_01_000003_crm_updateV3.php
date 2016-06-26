<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Syscover\Pulsar\Libraries\DBLibrary;

class CrmUpdateV3 extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
	public function up()
	{
		// change group_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'group_301', 'group_id_301', 'INT', 10, true, false, 'fk01_012_301_customer', '009_300_group', 'id_300');
		// change country_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'country_301', 'country_id_301', 'VARCHAR', 2, false, true, 'fk02_012_301_customer', '001_002_country', 'id_002');
		// change territorial_area_1_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'territorial_area_1_301', 'territorial_area_1_id_301', 'VARCHAR', 6, false, true, 'fk03_012_301_customer', '001_003_territorial_area_1', 'id_003');
		// change territorial_area_2_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'territorial_area_2_301', 'territorial_area_2_id_301', 'VARCHAR', 10, false, true, 'fk04_012_301_customer', '001_004_territorial_area_2', 'id_004');
		// change territorial_area_3_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'territorial_area_3_301', 'territorial_area_3_id_301', 'VARCHAR', 10, false, true, 'fk05_012_301_customer', '001_005_territorial_area_3', 'id_005');
		// change lang_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'lang_301', 'lang_id_301', 'VARCHAR', 2, false, true, 'fk06_012_301_customer', '001_001_lang', 'id_001');
		// change custom_field_group_301
		DBLibrary::renameColumnWithForeignKey('009_301_customer', 'custom_field_group_301', 'field_group_id_301', 'INT', 10, true, true, 'fk07_012_301_customer', '001_025_field_group', 'id_025');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){}
}