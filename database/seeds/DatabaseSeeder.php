<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$user = new \App\User;
       	$user->name = 'raga';
       	$user->password = Hash::make('123456');
       	$user->api_token = str_random(50);

       	$user->save();

    }
}
