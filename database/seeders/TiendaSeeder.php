<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tienda::factory(9)->create();

        DB::table('tiendas')->insert(
            [
                'name' => 'tea market',
                'slug' => Str::slug('tea-market'),
                'resumen' => 'Todo para la hora del té',
                'email' => 'tea_market@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/teamarket.png',
                'status' => 2,
                'user_id' => 2,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'regala',
                'slug' => Str::slug('regala'),
                'resumen' => 'Los mejores regalos personalizados de cumpleaños!',
                'email' => 'regala@gmail.com',
                'phone' => '+57-12345678',
                'url_perfil' => 'tiendas/regala.png',
                'status' => 2,
                'user_id' => 3,
            ]);

        

    }
}
