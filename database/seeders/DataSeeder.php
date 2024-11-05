<?php

namespace Svr\Data\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Svr\Raw\Seeders;

class DataSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET session_replication_role = 'replica';");

        (new Seeders\DataCompaniesSeeder())->run();
        (new Seeders\DataCompaniesLocationsSeeder())->run();
        (new Seeders\DataCompaniesObjectsSeeder())->run();
        (new Seeders\DataAnimalsSeeder())->run();
        (new Seeders\DataAnimalsCodesSeeder())->run();
        (new Seeders\DataApplicationsSeeder())->run();
        (new Seeders\DataApplicationsAnimalsSeeder())->run();

        DB::statement("SET session_replication_role = 'origin';");
    }
}
