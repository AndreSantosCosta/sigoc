<?php

use Illuminate\Database\Seeder;



class UnidadeTableSeeder extends Seeder {

    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('militars')->truncate();
        DB::table('unidades')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $descricao = array(
            array(
                'descricao' => 'UI-CIC'
            ),

            array(
                'descricao' => 'UI - CDC'
            ),

            array(
                'descricao' => 'CTer Açores'
            ),

            array(
                'descricao' => 'CTer Madeira'
            ),

            array(
                'descricao' => 'CTer Faro'
            ),

            array(
                'descricao' => 'CTer Beja'
            ),

            array(
                'descricao' => 'CTer Évora'
            ),

            array(
                'descricao' => 'CTer Setúbal'
            ),

            array(
                'descricao' => 'CTer Lisboa'
            ),

            array(
                'descricao' => 'CTer Portalegre'
            ),

            array(
                'descricao' => 'CTer Santarém'
            ),

            array(
                'descricao' => 'CTer Castelo Branco'
            ),

            array(
                'descricao' => 'CTer Leiria'
            ),

            array(
                'descricao' => 'CTer Guarda'
            ),

            array(
                'descricao' => 'CTer Viseu'
            ),

            array(
                'descricao' => 'CTer Coimbra'
            ),

            array(
                'descricao' => 'CTer Aveiro'
            ),

            array(
                'descricao' => 'CTer Vila Real'
            ),

            array(
                'descricao' => 'CTer Porto'
            ),

            array(
                'descricao' => 'CTer Braga'
            ),

            array(
                'descricao' => 'CTer Viana do Castelo'
            ),

            array(
                'descricao' => 'CTer Bragança'
            )
        );

        DB::table('unidades')->insert($descricao);
    }
}