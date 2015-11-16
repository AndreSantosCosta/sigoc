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
        $this->call('UserTableSeeder');
        //$this->call('MilitarTableSeeder');
        //$this->call('ProvaTiroTableSeeder');

    }
}
