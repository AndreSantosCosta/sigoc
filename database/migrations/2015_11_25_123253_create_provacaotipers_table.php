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
            $table->increments('id');
            $table->integer('IdProvaCao')->unsigned();
            $table->date('data_nascim');
            $table->string('avaliador');
            $table->string('executante');
            $table->text('local');
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
            $table->text('observacoes');
            $table->text('arquivo');
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
