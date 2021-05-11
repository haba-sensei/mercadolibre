<?php

namespace Database\Seeders;

use App\Models\OrderCategory;
use Illuminate\Database\Seeder;

class OrderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       OrderCategory::factory(5)->create();
    }
}
