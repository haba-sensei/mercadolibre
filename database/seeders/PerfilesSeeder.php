<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;


class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($j = 1; $j < 8; $j++) {

            DB::table('perfiles')->insert([
                'pais' => $faker->country(),
                'estado' => $faker->state(),
                'ciudad' => $faker->city(),
                'direccion' => $faker->address(),
                'telefono' => $faker->e164PhoneNumber(),
                'user_id' => $j
            ]);

        }
    }
}