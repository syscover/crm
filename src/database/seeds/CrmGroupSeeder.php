<?php

use Illuminate\Database\Seeder;
use Syscover\Crm\Models\Group;

class CrmGroupSeeder extends Seeder
{
    public function run()
    {
        Group::insert([
            ['id_300' => 1, 'name_300' => 'Particular customer'],
            ['id_300' => 2, 'name_300' => 'European society'],
            ['id_300' => 3, 'name_300' => 'No European society'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmGroupSeeder"
 */