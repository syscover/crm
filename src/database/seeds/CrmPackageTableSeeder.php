<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\Package;

class CrmPackageTableSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['id_012' => '12', 'name_012' => 'CRM Package', 'folder_012' => 'crm', 'sorting_012' => 12, 'active_012' => '0']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmPackageTableSeeder"
 */