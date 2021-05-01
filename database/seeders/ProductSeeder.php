<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Gallery;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(10)->create();

        foreach ($products as $product ) {

            Image::factory(1)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class,
            ]);

            Gallery::factory(3)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class,
            ]);

            $product->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);

        }
    }
}
