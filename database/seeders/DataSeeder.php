<?php

namespace Svr\Data\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Svr\Data\Seeders;

class DataSeeder extends Seeder
{
    public function run()
    {
        (new Seeders\DataCompaniesSeeder())->run();
        (new Seeders\DataCompaniesLocationsSeeder())->run();
        (new Seeders\DataCompaniesObjectsSeeder())->run();
        (new Seeders\DataAnimalsSeeder())->run();
        (new Seeders\DataAnimalsCodesSeeder())->run();
        (new Seeders\DataApplicationsSeeder())->run();
        (new Seeders\DataApplicationsAnimalsSeeder())->run();
    }
}
