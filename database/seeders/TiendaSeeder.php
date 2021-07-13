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

        DB::table('tiendas')->insert(
            [
                'name' => 'kittyflor',
                'slug' => Str::slug('kittyflor'),
                'resumen' => 'Floristeria colombiana online',
                'email' => 'kittyflor@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/kittyflor.png',
                'status' => 2,
                'user_id' => 4,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'abrazame',
                'slug' => Str::slug('abrazame'),
                'resumen' => 'Regalos personalizados para toda ocación',
                'email' => 'abrazame@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/abrazame.png',
                'status' => 2,
                'user_id' => 5,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'palabritas',
                'slug' => Str::slug('palabritas'),
                'resumen' => 'Mas que un blog con cositas!',
                'email' => 'palabritas@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/palabritas.png',
                'status' => 2,
                'user_id' => 6,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'que tal regalo',
                'slug' => Str::slug('que-tal-regalo'),
                'resumen' => 'Regalos para aniversario Regalos para cumpleaños.',
                'email' => 'que_tal_regalo@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/que_tal_regalo.png',
                'status' => 2,
                'user_id' => 7,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'regalitos y detalles',
                'slug' => Str::slug('regalitos-y-detalles'),
                'resumen' => 'Regalos personalizados via delivery',
                'email' => 'regalitos_y_detalles@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/regalitos_y_detalles.png',
                'status' => 2,
                'user_id' => 8,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'detalles con amor',
                'slug' => Str::slug('detalles-con-amor'),
                'resumen' => 'Todo para enamorarse para siempre!',
                'email' => 'detalles_con_amor@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/detalles_con_amor.png',
                'status' => 2,
                'user_id' => 9,
            ]);

        DB::table('tiendas')->insert(
            [
                'name' => 'my sign',
                'slug' => Str::slug('my-sign'),
                'resumen' => 'Tu señal para regalar un buen detalle!',
                'email' => 'my_sign@gmail.com',
                'phone' => '+57-5551234',
                'url_perfil' => 'tiendas/my_sign.png',
                'status' => 2,
                'user_id' => 10,
            ]);

    }
}
