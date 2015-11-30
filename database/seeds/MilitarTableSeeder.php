<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class MilitarTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('prova_militars')->truncate();
        DB::table('militars')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //DB::table('militars')->truncate();

        $faker = Faker::create();

        //$listaSexo = array(' '=>' ', 'Feminino'=>'Feminino', 'Masculino'=>'Masculino');
        //$listaMotivos = array(' '=>' ','Afasto da Especialidade por Incapacidade Técnica'=>'Afasto da Especialidade por Incapacidade Técnica', 'Reforma'=>'Reforma','Transferido'=>'Transferido','Morte'=>'Morte');
        //$gruposSang= array(' '=>' ', 'A Positivo'=>'A Positivo','A Negativo'=>'A Negativo','B Positivo'=>'B Positivo','B Negativo'=>'B Negativo','O Positivo'=>'O Positivo','O Negativo'=>'O Negativo','AB Positivo'=>'AB Positivo','AB Negativo'=>'AB Negativo');

        //$grupoSanguineo = array('nome'=> 'A RH', 'nome'=>'outro', 'nome'=>'outro2');
        //$sexo = array('m'=>'Masculino', 'f'=>'Feminino');

        //$userId = users::all()->lists('id');
        //$postoId = postos::all()->lists('id');
        //$unidadeId = unidades::all()->lists('id');
        //$motivoInativoMilitarId = motivoInativoMilitar::all()->lists('id');
        for ($i=0; $i<10; $i++) {
            DB::table('militars')->insert(array(
                'num_mecanografico' => $faker->numberBetween($min = 1000000, $max = 7000000),
                    'user_id' => $faker->numberBetween(1,10),
                    'posto_id' => $faker->numberBetween(1,15),
                'apelido' => $faker->lastName(),
                'nome' => $faker->firstName(),
                'data_nascim' => $faker->date(),
                'grupo_sang' => $faker->randomElement($array = ['A Positivo', 'A Negativo', 'B Positivo', 'B Negativo', 'AB Positivo', 'AB Negativo', 'O Positivo', 'O Negativo']),
                'sexo' => $faker->randomElement($array = ['Masculino', 'Feminino']),
                    'unidade_id' => $faker->numberBetween(1,22),
                'fotografia' => $faker->image(),
                'tamanhoImagem' => $faker->numberBetween(0,7),
                'tipoImagem' => $faker->word(),
                'inativo' => $faker->numberBetween(0,1),
                'data_inativo' => $faker->date(),
                    'motivo_inativo' => $faker->numberBetween(1,4)
            ));
        } 
    }

}