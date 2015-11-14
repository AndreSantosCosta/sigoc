<?php

use Illuminate\Database\Seeder;



class PostoTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('postos')->truncate();

    	$descricao = array(
    		array(
    			'descricao' => 'Guarda'
    		),

    		array(
    			'descricao' => 'Guarda Principal'
    		),

    		array(
    			'descricao' => 'Cabo'
    		),

    		array(
    			'descricao' => 'Cabo Chefe'
    		),

    		array(
    			'descricao' => 'Cabo Mor'
    		),

    		array(
    			'descricao' => 'Segundo Sargento'
    		),

    		array(
    			'descricao' => 'Primeiro Sargento'
    		),

    		array(
    			'descricao' => 'Sargento Ajudante'
    		),

    		array(
    			'descricao' => 'Sargento Chefe'
    		),

    		array(
    			'descricao' => 'Sargento Mor'
    		),

    		array(
    			'descricao' => 'Alferes'
    		),

    		array(
    			'descricao' => 'Tenente'
    		),

    		array(
    			'descricao' => 'Capitão'
    		),

    		array(
    			'descricao' => 'Major'
    		),

    		array(
    			'descricao' => 'Tenente Coronel'
    		)
    	);

        DB::table('postos')->insert($descricao);
    }
}