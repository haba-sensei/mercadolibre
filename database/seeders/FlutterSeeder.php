<?php

namespace Database\Seeders;

use App\Models\Flutter;
use Illuminate\Database\Seeder;

class FlutterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flutter::factory(1)->create();
    }
}
