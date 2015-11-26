<?php

use Illuminate\Database\Seeder;



class AmbitoProvasGeralBinomioTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('provas_geral_binomios')->truncate();
        DB::table('ambitoProvasGeralBinomio')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        //DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Curso'
    		),

    		array(
    			'descricao' => 'Estágio'
    		),

    		array(
    			'descricao' => 'Módulo'
    		),

            array(
                'descricao' => 'Actualização'
            ),

            array(
                'descricao' => 'Semestral'
            ),

            array(
                'descricao' => 'Extraordinária'
            )
    	);

        DB::table('ambitoProvasGeralBinomio')->insert($descricao);
    }
}