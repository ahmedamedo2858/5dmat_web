<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\models\User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'group'=>'admin',
            'password'=>bcrypt('123456')
        ]);
    }
}
