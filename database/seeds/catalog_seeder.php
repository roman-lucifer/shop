<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalog_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1000; $i > 0; $i--) {

            $catalog[$i] = [
                'product_name' => Str::random(10),
                'description' => Str::random(10),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 10),
                'top' => rand(0, 1)
            ];
        }
        DB::table('catalog')->insert($catalog);
    }
}
