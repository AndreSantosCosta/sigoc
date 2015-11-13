<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class PostoTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('postos')->truncate();

    	//$descricao= array( 'Alferes', 'Tenente');
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
    			'descricao' => '2 Sargento'
    		),

    		array(
    			'descricao' => '1 Sargento'
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