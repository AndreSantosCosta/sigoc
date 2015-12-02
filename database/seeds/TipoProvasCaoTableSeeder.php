<?php

use Illuminate\Database\Seeder;



class TipoProvasCaoTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('prova_caos')->truncate();
        DB::table('tipoProvasCao')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        //DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Medição Parâmetros Morfológicos'
    		),

    		array(
    			'descricao' => 'Teste Inicial de Personalidade'
    		),

    		array(
    			'descricao' => 'Teste Aptidões Naturais e Avaliação do Treino 1'
    		)
    	);

        DB::table('tipoProvasCao')->insert($descricao);
    }
}