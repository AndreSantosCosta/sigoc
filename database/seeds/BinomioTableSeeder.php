<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BinomioTableSeeder extends Seeder {

    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('prova_binomios')->truncate();
        DB::table('binomios')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}