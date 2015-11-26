<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('PostoTableSeeder');
        $this->call('UnidadeTableSeeder');
        $this->call('MotivoInativoMilitarTableSeeder');
        $this->call('UserTableSeeder');
        //FALTA TABELA MILITARS
        $this->call('VertenteBinomioTableSeeder');
        //FALTA TABELA BINOMIO
        $this->call('OrigemCaoTableSeeder');
        $this->call('MotivoInativoCaoTableSeeder');
        //FALTA TABELA CÃO

        $this->call('TipoProvasMilitarTableSeeder');
        //FALTA TABELA PROVA MILITAR
        $this->call('AmbitoMilitarPafTableSeeder');
        //FALTA TABELA PAF
        $this->call('AmbitoMilitarPTeoricaTableSeeder');
        //FALTA TABELA TEORICA
        //FALTA TABELA TIRO

        $this->call('TipoProvasBinomioTableSeeder');
        //FALTA TABELA PROVA BINOMIO
        //FALTA TABELA TANAT2
        $this->call('AmbitoProvasGeralBinomioTableSeeder');
        //FALTA TABELA PROVAS_GERAL_BINOMIOS

        $this->call('TipoProvasCaoTableSeeder');
        //FALTA TABELA PROVA CÃO
        //FALTA TABELA TANAT1
        //FALTA TABELA MPM
        //FALTA TABELA TIP

        //FALTA TABELA PROVA


        //falta tabela militars
        //$this->call('UserTableSeeder');
        //$this->call('MilitarTableSeeder');
        //$this->call('ProvaTiroTableSeeder');

    }
}
