<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Tienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');


        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(TiendaSeeder::class);

        Category::factory(4)->create();
        Tag::factory(8)->create();

        $this->call(PostSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(FlutterSeeder::class);

    }
}
