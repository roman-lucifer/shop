<?php

use Illuminate\Database\Seeder;

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

            $category[$i] = [
                'category_name' => Str::random(25),
                'description' => Str::random(100),
                'parent_id' => rand(1, 9),
                'active' => rand(0, 1)
            ];
        }
        DB::table('category')->insert($category);
    }
}
