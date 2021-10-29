<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img_url = array(
            'sliders/slider1.png',
            'sliders/slider2.png',
            'sliders/slider3.png',
            'sliders/slider4.png',
            'promociones/promo_1.jpg',
            'promociones/promo_2.jpg',
            'promociones/promo_3.jpg'
        );

        $class_img = array(
            'sliders',
            'sliders',
            'sliders',
            'sliders',
            'banners',
            'banners',
            'banners'
        );
 
        for ($j = 0; $j < 7; $j++) {
            DB::table('config_img')->insert([
                'url_imagen' => $img_url[$j],
                'class' => $class_img[$j]
            ]);
        }
    }
}
