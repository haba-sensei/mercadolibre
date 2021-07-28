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
            'remember_token' => Str::random(10),
            'profile_photo_path' => 'admin.jpg'
        ])->assignRole('Alpha');


        User::factory(2)->create()->each(function ($user) {
            $user->assignRole('Vendedor');
        });

        User::factory(4)->create()->each(function ($user) {
            $user->assignRole('Comprador');
        });
    }
}
