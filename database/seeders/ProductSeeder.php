<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tienda;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public $id_user;
    public $id_tienda;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $order = 1;
        static $url = 1;
        static $url_count = 1;
        $faker = Factory::create();

        $name_tag = array('regalos', 'detalles', 'tendencias', 'variados', 'tazas', 'enamorate');

        for ($j = 0; $j < 6; $j++) {
            DB::table('tags')->insert([
                'name' => $name_tag[0],
                'slug' => Str::slug($name_tag[0]),
                'color' => $faker->randomElement(['red', 'yellow', 'blue', 'indigo', 'purple', 'pink']),
                'tag_img' => 'tags/' . $faker->randomElement(['tag_img1.jpg', 'tag_img2.jpg', 'tag_img3.jpg', 'tag_img4.jpg', 'tag_img5.jpg', 'tag_img6.jpg']),
                'category_id' => Category::all()->random()->id,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {

            $id_user = Tienda::pluck('user_id')->unique()->random();
            $id_tienda = Tienda::where('user_id', $id_user)->value('id');

            $id_prod = $order++;

            DB::table('products')->insert(
                [
                    'name' => 'Producto ' . $id_prod,
                    'slug' => Str::slug('producto-' . $id_prod),
                    'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod iusto deleniti asperiores, nam atque! Iure consequatur, atque aliquam at cum corporis dolorum totam molestias error, quaerat consequuntur dolore doloremque.',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod iusto deleniti asperiores, nam atque! Iure consequatur, atque aliquam at cum corporis dolorum totam molestias error, quaerat consequuntur dolore doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod iusto deleniti asperiores, nam atque! Iure consequatur, atque aliquam at cum corporis dolorum totam molestias error, quaerat consequuntur dolore doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quod iusto deleniti asperiores, nam atque! Iure consequatur, atque aliquam at cum corporis dolorum totam molestias error, quaerat consequuntur dolore doloremque.',
                    'amount' => rand(15000, 30000),
                    'stock' => 50,
                    'status' => 2,
                    'user_id' => $id_user,
                    'category_id' => Category::all()->random()->id,
                    'tienda_id' => $id_tienda,
                ]
            );

            DB::table('images')->insert([
                'url' => 'products/prod_' . $url++ . '.jpg',
                'imageable_id' => $id_prod,
                'imageable_type' => Product::class,
            ]);

            $url_count = $url_count++;

            for ($f = 0; $f < 2; $f++) {

                DB::table('galleries')->insert([
                    'url' => 'gallery/gallery_' . $url_count++ . '.jpg',
                    'imageable_id' => $id_prod,
                    'imageable_type' => Product::class,
                ]);

            }

            // DB::table('product_tag')->insert([
            //     'product_id' => $id_prod,
            //     'tag_id' => rand(1, 6),
            // ]);
        }
    }
}
