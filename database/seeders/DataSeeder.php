<?php

namespace Svr\Data\Seeders;

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        (new DataAnimalsSeeder())->run();
    }
}
