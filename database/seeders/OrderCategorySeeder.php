<?php

namespace Database\Seeders;

use App\Models\OrderCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        $id_cat = array('1', '2', '3');

        for ($j = 0; $j < 3; $j++) {
            DB::table('order_categories')->insert([
                'order' => $id_cat[$j],
                'catID' => $id_cat[$j]
            ]);
        }



    }
}
