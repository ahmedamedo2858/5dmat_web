<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $array=[
                'name'=>$faker->word,
                'meta_keywords'=>$faker->name,
                'meta_des'=>$faker->name,
                'des'=>$faker->paragraph,
                'user_id'=>1,
                'published'=>rand(0,1),
                'image'=>'1592794120xkQq680Ovg.jpg',
                'cat_id'=>1,
                'youtube'=>'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs'
            ];
            \App\models\video::create($array);
        }

    }
}
