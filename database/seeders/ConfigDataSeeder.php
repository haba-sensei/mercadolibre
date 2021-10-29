<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConfigDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_data')->insert([
            'titulo' => 'Empaques Para Ti',
            'icono' => 'micro.png',
            'favicon' => 'favicon.png',
            'color' => '#42707c',
            'mapa' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63622.685691774226!2d-74.1537665108558!3d4.697238666643073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9cb9c72ca831%3A0xb0f2d737d944979f!2sHotel%20Movich%20Bur%C3%B3%2026!5e0!3m2!1ses-419!2spe!4v1633908525664!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://twitter.com',
            'youtube' => 'https://www.youtube.com',
            'num_contacto' => '+57 000-000-000 '
        ]);
    }
}
