<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaBinomTANAT2sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_binom_t_a_n_a_t2s', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->date('data_nascim');
            $table->string('avaliador', 50);
            $table->string('local', 100);
            $table->double('atitute');
            $table->double('memoriaMuscular');
            $table->double('agilidadeConfianca');
            $table->double('rPisosSons');
            $table->double('rAproxVulto');
            $table->double('rDisparos');
            $table->double('instPresaPerist');
            $table->double('intsBusca');
            $table->double('marcPessoasObj');
            $table->double('inicPistas');
            $table->double('ladrido');
            $table->double('instDefesa');
            $table->double('tecnMordida');
            $table->double('qualidMordida');
            $table->double('CombatLuta');
            $table->double('notaFinal');
            $table->text('observacoes');
            $table->string('arquivo', 20);
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
		Schema::drop('prova_binom_t_a_n_a_t2s');
	}

}
