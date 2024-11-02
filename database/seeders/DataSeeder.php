<?php

namespace Svr\Data\Seeders;

use Database\Seeders\DataCompaniesLocationsSeeder;
use Database\Seeders\DataCompaniesObjectsSeeder;
use Database\Seeders\DataCompaniesSeeder;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        (new DataCompaniesSeeder())->run();
        (new DataCompaniesLocationsSeeder())->run();
        (new DataCompaniesObjectsSeeder())->run();
    }
}
