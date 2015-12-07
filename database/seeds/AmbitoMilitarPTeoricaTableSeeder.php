<?php

use Illuminate\Database\Seeder;



class AmbitoMilitarPTeoricaTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('prova_militar_teoricas')->truncate();
        DB::table('ambitoMilitarPTeorica')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

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

        DB::table('ambitoMilitarPTeorica')->insert($descricao);
    }
}