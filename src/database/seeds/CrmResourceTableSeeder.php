<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\Resource;

class CrmResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id_007' => 'crm',             'name_007' => 'CRM Package',    'package_007' => '9'],
            ['id_007' => 'crm-customer',    'name_007' => 'Customer',       'package_007' => '9'],
            ['id_007' => 'crm-group',       'name_007' => 'Groups',         'package_007' => '9'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmResourceTableSeeder"
 */