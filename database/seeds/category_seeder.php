<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 20; $i > 0; $i--) {

            $code = Str::random(25);
            $category[$i] = [
                'category_name' => $code,
                'code' => Str::lower($code),
                'description' => Str::random(125),
                'parent_id' => rand(1, 9),
                'active' => rand(0, 1)
            ];
        }
        DB::table('category')->insert($category);
    }
}
