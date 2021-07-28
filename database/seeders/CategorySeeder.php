<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $name_cat = array('Productos Personalizados', 'Cajas Plegadizas', 'Cajas de Madera' );
        $img_cat = array('cat_img1.jpg', 'cat_img2.jpg', 'cat_img3.jpg' );

        for ($j = 0; $j < 3; $j++) {
            DB::table('categories')->insert([
                'name' => $name_cat[$j],
                'slug' => Str::slug($name_cat[$j]),
                'cat_img' => 'category/' .$img_cat[$j]
            ]);
        }
    }
}
