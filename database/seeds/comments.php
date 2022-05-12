<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class comments extends Seeder
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
                'comment'=>$faker->paragraph,
                'video_id'=>rand(1,9),
                'user_id'=>1
            ];
            \App\models\comment::create($array);
        }

    }
}
