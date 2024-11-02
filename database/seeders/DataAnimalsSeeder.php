<?php

namespace Svr\Data\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAnimalsSeeder extends Seeder
{
    public function run()
    {
        DB::table('data.data_animals')->truncate();

        DB::table('data.data_animals')->insert([

        ]);
    }
}
