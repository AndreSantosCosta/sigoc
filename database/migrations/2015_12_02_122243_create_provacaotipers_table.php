<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaoTIPersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_cao_t_i_pers', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->string('avaliador', 50);
            $table->string('executante', 50);
            $table->string('local', 100);
            $table->integer('seguimento');
            $table->integer('levantar');
            $table->integer('submissao');
            $table->integer('chamada');
            $table->integer('buscaObj');
            $table->integer('jornal');
            $table->integer('chapeu');
            $table->integer('mesa');
            $table->integer('dor');
            $table->double('notaFinal');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prova_cao_t_i_pers');
	}

}
