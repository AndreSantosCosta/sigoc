<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProvaMilitarTeoricaTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');


        /*
        <?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProvaTiroTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        DB::table('prova_tiros')->truncate();

        $faker = Faker::create();

        for ($i=0; $i<10; $i++) {
            DB::table('prova_tiros')->insert(array(
                'prova_id' => $faker->numberBetween(1,10),
                'data_prova' => $faker->date(),
                'num_mecanografico' => $faker->numberBetween(0,7),
                'local' => $faker->locale(),
                'tipo' => $faker->randomLetter(),
                'nota_final' => $faker->numberBetween(1,10),
                'arquivo' => $faker->sentence(),
            ));
        } 
    }

}

        */
    }

}