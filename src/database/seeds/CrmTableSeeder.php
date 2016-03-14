<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrmTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(CrmPackageTableSeeder::class);
        $this->call(CrmResourceTableSeeder::class);
        $this->call(CrmAttachmentMimeSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmTableSeeder"
 */