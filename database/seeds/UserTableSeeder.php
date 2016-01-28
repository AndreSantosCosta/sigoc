<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;



class UserTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('militars')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
/*
        $faker = Faker::create();

        for ($i=0; $i<10; $i++) {
            DB::table('users')->insert(array(
                'name' => $faker->userName(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make('123')
            ));
        }*/ 
    }
}