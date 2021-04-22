<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfiles;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfiles::factory(10)->create();
    }
}
