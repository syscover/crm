<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrmTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(CrmPackageSeeder::class);
        $this->call(CrmResourceSeeder::class);
        $this->call(CrmAttachmentMimeSeeder::class);
        $this->call(CrmGroupSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmTableSeeder"
 */