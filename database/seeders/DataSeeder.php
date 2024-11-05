<?php

namespace Svr\Data\Seeders;

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
        (new DataAnimalsSeeder())->run();
        (new DataAnimalsCodesSeeder())->run();
        (new DataApplicationsSeeder())->run();
        (new DataApplicationsAnimalsSeeder())->run();

        DB::statement("SET session_replication_role = 'origin';");
    }
}
