<?php

namespace Database\Seeders;

 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class FlutterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flutters')->insert([
            'access_token' => Str::random(10)
        ]);
    }
}
