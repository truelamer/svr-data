<?php

namespace Svr\Data\Seeders;

use Database\Seeders\DataAnimalsCodesSeeder;
use Database\Seeders\DataApplicationsAnimalsSeeder;
use Database\Seeders\DataApplicationsSeeder;
use Database\Seeders\DataCompaniesLocationsSeeder;
use Database\Seeders\DataCompaniesObjectsSeeder;
use Database\Seeders\DataCompaniesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET session_replication_role = 'replica';");

        (new DataCompaniesSeeder())->run();
        (new DataCompaniesLocationsSeeder())->run();
        (new DataCompaniesObjectsSeeder())->run();
        (new DataAnimalsCodesSeeder())->run();
        (new DataApplicationsSeeder())->run();
        (new DataApplicationsAnimalsSeeder())->run();

        DB::statement("SET session_replication_role = 'origin';");
    }
}
