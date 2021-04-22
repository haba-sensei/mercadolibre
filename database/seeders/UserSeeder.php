<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Haba Sensei',
            'email' => 'lycantroponatural@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);
        User::factory(9)->create();

    }
}
