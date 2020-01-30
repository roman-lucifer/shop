<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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

            $product = Str::random(10);
            $catalog[$i] = [
                'product_name' => $product,
                'code' => Str::lower($product),
                'description' => Str::random(10),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 10),
                'top' => rand(0, 1)
            ];
        }
        DB::table('catalog')->insert($catalog);
    }
}
