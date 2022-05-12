<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class tags extends Seeder
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
                'name'=>$faker->word
            ];
            \App\models\tag::create($array);
        }

    }
}
