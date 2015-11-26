<?php

use Illuminate\Database\Seeder;



class TipoProvasMilitarTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prova_militars')->truncate();
        DB::table('tipoProvasMilitar')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        //DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Provas de Aptidão Física'
    		),

    		array(
    			'descricao' => 'Prova Teórica'
    		),

    		array(
    			'descricao' => 'Tiro'
    		)
    	);

        DB::table('tipoProvasMilitar')->insert($descricao);
    }
}