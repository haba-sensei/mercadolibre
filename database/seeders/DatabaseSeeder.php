<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Membership;
use App\Models\Membresia;
use App\Models\OrderCategory;
use App\Models\Tag;
use App\Models\Tienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

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
        // FacadesFile::deleteDirectory( public_path() . '/storage/products/', true);
        // FacadesFile::deleteDirectory( public_path() . '/storage/users/', true);
        // FacadesFile::deleteDirectory( public_path() . '/storage/gallery/', true);
        // FacadesFile::deleteDirectory( public_path() . '/storage/tags/', true);
        // FacadesFile::deleteDirectory( public_path() . '/storage/category/', true);
        // FacadesFile::deleteDirectory( public_path() . '/storage/tiendas/', true);



        if (is_dir(public_path() .'/storage')) {
            rmdir(public_path() .'/storage');
            Artisan::call('storage:link');
        }

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TiendaSeeder::class);

        Category::factory(6)->create();
        
        $this->call(OrderCategorySeeder::class);

        $this->call(ProductSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(FlutterSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(PlanSeeder::class);


    }
}
