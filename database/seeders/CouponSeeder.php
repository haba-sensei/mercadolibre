<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <15 ; $i++) {

            $faker = Factory::create();
            $code = Str::random(8);

            DB::table('coupons')->insert([
                'code' => $code,
                'type' => $faker->randomElement(['fixed', 'percent']),
                'value' =>  rand(5, 95),
                'cart_value' =>  rand(5000, 10000),
                'status' => 1
            ]);

        }

    }
}
