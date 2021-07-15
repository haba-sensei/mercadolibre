<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert(
            [
                'business' => 'Basico',
                'yearly_price' => 200000
            ]);
        DB::table('planes')->insert(
            [
                'business' => 'Gratuito',
                'yearly_price' => 0
            ]);
    }
}
