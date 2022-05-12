<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([users::class,
             categeries::class,

             tags::class,
             skills::class,
             videos::class,
             comments::class,

             ]);
    }
}
