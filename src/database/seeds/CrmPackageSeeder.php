<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\Package;

class CrmPackageSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['id_012' => '9', 'name_012' => 'CRM Package', 'folder_012' => 'crm', 'sorting_012' => 9, 'active_012' => false]
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmPackageSeeder"
 */