<?php

use Illuminate\Database\Seeder;



class MotivoInativoMilitarTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('militars')->truncate();
        DB::table('motivoInativoMilitar')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$descricao = array(
    		array(
    			'descricao' => 'Afastado da especialidade por incapacidade técnica'
    		),

    		array(
    			'descricao' => 'Reforma'
    		),

    		array(
    			'descricao' => 'Transferido'
    		),

    		array(
    			'descricao' => 'Morte'
    		)
    	);

        DB::table('motivoInativoMilitar')->insert($descricao);
    }
}