<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaoTANAT1sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_cao_t_a_n_a_t1s', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('IdProvaCao')->unsigned();
            $table->date('data_nascim');
            $table->string('avaliador');
            $table->string('local');
            $table->double('atitute');
            $table->double('agilidadeConfianca');
            $table->double('rPisosSons');
            $table->double('rAproxVulto');
            $table->double('rDisparos');
            $table->double('instPresaPerist');
            $table->double('intsBusca');
            $table->double('ladrido');
            $table->double('instDefesa');
            $table->double('tecnMordida');
            $table->double('qualidMordida');
            $table->double('CombatLuta');
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
		Schema::drop('prova_cao_t_a_n_a_t1s');
	}

}
