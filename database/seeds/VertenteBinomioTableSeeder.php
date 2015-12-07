<?php

use Illuminate\Database\Seeder;



class VertenteBinomioTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('binomios')->truncate();
        DB::table('vertenteBinomio')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$descricao = array(
    		array(
    			'descricao' => 'Uso da Força'
    		),

    		array(
    			'descricao' => 'Intervenção Tática'
    		),

    		array(
    			'descricao' => 'Deteção de Odor Humano'
    		),

    		array(
    			'descricao' => 'Deteção de Explosivos'
    		),
            
            array(
                'descricao' => 'Deteção de Droga/Papel Moeda'
            ),

            array(
                'descricao' => 'Outras Deteções'
            ),

            array(
                'descricao' => 'Formação e Desenvolvimento de Cachorros'
            )
    	);

        DB::table('vertenteBinomio')->insert($descricao);
    }
}