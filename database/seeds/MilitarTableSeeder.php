<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MilitarTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        DB::table('militars')->truncate();

        $faker = Faker::create();

        //$listaSexo = array(' '=>' ', 'Feminino'=>'Feminino', 'Masculino'=>'Masculino');
		//$listaMotivos = array(' '=>' ','Afasto da Especialidade por Incapacidade Técnica'=>'Afasto da Especialidade por Incapacidade Técnica', 'Reforma'=>'Reforma','Transferido'=>'Transferido','Morte'=>'Morte');
		//$gruposSang= array(' '=>' ', 'A Positivo'=>'A Positivo','A Negativo'=>'A Negativo','B Positivo'=>'B Positivo','B Negativo'=>'B Negativo','O Positivo'=>'O Positivo','O Negativo'=>'O Negativo','AB Positivo'=>'AB Positivo','AB Negativo'=>'AB Negativo');

        for ($i=0; $i<10; $i++) {
            DB::table('militars')->insert(array(
            	'num_mecanografico' => $faker->numberBetween(0,7),
                'user_id' => $faker->paragraph(rand(1, 10)),
                'posto_id' => '',
                'apelido' => $faker->lastName(),
                'nome' => $faker->firstName(),
                'data_nascim' => $faker->date(),
                'grupo_sang' => $faker->sentence(),
                'sexo' => $faker->sentence(),
                'unidade_id' => '',
                'inativo' => $faker->paragraph(rand(0, 1)),
                'data_inativo' => $faker->date(),
                'motivo_inativo' => $faker->sentence()
            ));
        } 
    }

}