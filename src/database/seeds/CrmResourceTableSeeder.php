<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\Resource;

class CrmResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id_007' => 'crm',             'name_007' => 'CRM Package',    'package_007' => '12'],
            ['id_007' => 'crm-customer',    'name_007' => 'Sections',       'package_007' => '12'],
            ['id_007' => 'crm-family',      'name_007' => 'Families',       'package_007' => '12'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmResourceTableSeeder"
 */