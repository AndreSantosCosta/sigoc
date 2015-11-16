<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class UserTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('users')->truncate();

        $faker = Faker::create();

        for ($i=0; $i<10; $i++) {
            DB::table('users')->insert(array(
                'name' => $faker->userName(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->word())
            ));
        } 
    }
}