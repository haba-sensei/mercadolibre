<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\OrderCategory;
use App\Models\Tag;
use App\Models\Tienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File as FacadesFile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        FacadesFile::deleteDirectory( public_path() . '/storage/products/', true);
        FacadesFile::deleteDirectory( public_path() . '/storage/users/', true);
        FacadesFile::deleteDirectory( public_path() . '/storage/gallery/', true);
        FacadesFile::deleteDirectory( public_path() . '/storage/tags/', true);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(TiendaSeeder::class);

        Category::factory(14)->create();
        Tag::factory(50)->create();

        $this->call(OrderCategorySeeder::class);

        $this->call(ProductSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(FlutterSeeder::class);



    }
}
