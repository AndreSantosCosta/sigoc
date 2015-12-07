<?php

use Illuminate\Database\Seeder;



class OrigemCaoTableSeeder extends Seeder {

    public function run()
    {
    	
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('caos')->truncate();
        DB::table('origemCao')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$descricao = array(
    		array(
    			'descricao' => 'Procriação'
    		),

    		array(
    			'descricao' => 'Doacção'
    		),

    		array(
    			'descricao' => 'Remonta'
    		)
    	);

        DB::table('origemCao')->insert($descricao);
    }
}