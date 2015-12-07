<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProvaTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('provas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = Faker::create();

        for ($i=0; $i<10; $i++) {
            DB::table('provas')->insert(array(
                'tipoEntidade' => $faker->numberBetween(1,10),
                'tipoProva' => $faker->randomElement($array=array('Prova Militar Teóricas','Prova Militar PAF','Prova Militar Tiros','Prova Cão TIP','Prova Cão MPM','Prova Cão TANAT1','Provas Gerais Binómios','Prova Binómio TANAT2')),
                'dataProva' => $faker->date(),
                	'entidade_id' => $faker->numberBetween(1,10),
                'arquivo' => $faker->lastName(),
                'observacoes' => $faker->text($maxNbChars = 100)
            ));
        } 
    }
}