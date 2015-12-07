<?php

use Illuminate\Database\Seeder;



class AmbitoMilitarPafTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('prova_militar_p_a_fisicas')->truncate();
        DB::table('ambitoMilitarPAF')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$descricao = array(
    		array(
    			'descricao' => 'Curso'
    		),

    		array(
    			'descricao' => 'Semestral'
    		),

    		array(
    			'descricao' => 'Extraordinária'
    		)
    	);

        DB::table('ambitoMilitarPAF')->insert($descricao);
    }
}