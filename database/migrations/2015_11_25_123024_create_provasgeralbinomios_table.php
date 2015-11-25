<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvasGeralBinomiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provas_geral_binomios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('IdProvaBinomio')->unsigned();
            $table->date('data_nascim');
            $table->string('avaliador1');
            $table->string('avaliador2');
            $table->string('avaliador3');
            $table->string('local');
            $table->integer('ambito')->unsigned();
            $table->double('nota');
            $table->string('situacao');
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
		Schema::drop('provas_geral_binomios');
	}

}
