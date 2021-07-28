<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $name_tag = array('regalos', 'detalles', 'tendencias', 'variados', 'tazas', 'enamorate');
        $img_tag = array('tag_img1.jpg', 'tag_img2.jpg', 'tag_img3.jpg', 'tag_img4.jpg', 'tag_img5.jpg', 'tag_img6.jpg');

        for ($j = 0; $j < 6; $j++) {
            DB::table('tags')->insert([
                'name' => $name_tag[$j],
                'slug' => Str::slug($name_tag[$j]),
                'color' => $faker->randomElement(['red', 'yellow', 'blue', 'indigo', 'purple', 'pink']),
                'tag_img' => 'tags/' . $img_tag[$j],
                'category_id' => $faker->randomElement(['1', '2', '3']),
            ]);
        }
    }
}
