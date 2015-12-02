<?php

use Illuminate\Database\Seeder;



class MotivoInativoCaoTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('caos')->truncate();
        DB::table('motivoInativoCao')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        //DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Incapacidade técnica'
    		),

    		array(
    			'descricao' => 'Incapacidade Veterinária'
    		),

    		array(
    			'descricao' => 'Morte'
    		)
    	);

        DB::table('motivoInativoCao')->insert($descricao);
    }
}