<?php

use Illuminate\Database\Seeder;



class TipoProvasBinomioTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prova_binomios')->truncate();
        DB::table('tipoProvasBinomio')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        //DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Teste Aptidões Naturais e Avaliação do Treino 2'
    		),

    		array(
    			'descricao' => 'Prova Avaliação Binómios Obediência'
    		),

    		array(
    			'descricao' => 'Prova Avaliação Binómios Defesa'
    		),

            array(
                'descricao' => 'Prova Avaliação Binómios DOH (BGA)'
            ),

            array(
                'descricao' => 'Prova Avaliação Binómios DOH (Pistas)'
            ),

            array(
                'descricao' => 'Prova Avaliação Binómios DOH (EC)'
            ),

            array(
                'descricao' => 'Prova Avaliação Binómios DOH (IT)'
            ),

            array(
                'descricao' => 'Prova Avaliação Binómios Policial'
            ),

            array(
                'descricao' => 'Prova Avaliação Binómios DOD'
            )
    	);

        DB::table('tipoProvasBinomio')->insert($descricao);
    }
}