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
        $this->call('UserTableSeeder');
        $this->call('PostoTableSeeder');
        $this->call('UnidadeTableSeeder');
        $this->call('MotivoInativoMilitarTableSeeder');

            $this->call('EntidadeTableSeeder');
            $this->call('MilitarTableSeeder');

        $this->call('OrigemCaoTableSeeder');
        $this->call('MotivoInativoCaoTableSeeder');

        $this->call('VertenteBinomioTableSeeder');

        $this->call('AmbitoMilitarPafTableSeeder');
        $this->call('AmbitoMilitarPTeoricaTableSeeder');

        $this->call('AmbitoProvasGeralBinomioTableSeeder');
    }
}
