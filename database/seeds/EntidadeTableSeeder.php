<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class EntidadeTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('provas')->truncate();
        //DB::table('binomios')->truncate();
        //DB::table('caos')->truncate();
        //DB::table('militars')->truncate();
        DB::table('entidades')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // TestDummy::times(20)->create('App\Post');

         $faker = Faker::create();

        for ($i=0; $i<100; $i++) {
         	DB::table('entidades')->insert(array(
         		'tipoEntidade' => $faker->randomElement($array=array('M','C','B')),
                'nome' => $faker->firstName(),
                'inativo' => $faker->numberBetween(0,1),
                'data_inativo' => $faker->date(),
                'data_ativo' => $faker->date(),
                'fotografia' => $faker->image(),
                'tamanhoImagem' => '11',
                'tipoImagem' => $faker->randomElement($array=array('jpg','jpeg','tif','png')),
                'observacoes' => $faker->text($maxNbChars = 100)
            ));
        }
    }
}