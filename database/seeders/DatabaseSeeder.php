<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (is_dir(public_path() .'/storage')) {
            rmdir(public_path() .'/storage');
            Artisan::call('storage:link');
        }

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(TiendaSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(OrderCategorySeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ProductSeeder::class); 
        $this->call(FlutterSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(PlanSeeder::class);


    }
}
