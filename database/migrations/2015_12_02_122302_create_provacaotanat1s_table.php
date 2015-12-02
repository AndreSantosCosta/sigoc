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
            $table->integer('id')->primary()->unsigned();
            $table->string('avaliador', 50)->nullable();
            $table->string('local', 100)->nullable();
            $table->double('atitute')->nullable();
            $table->double('agilidadeConfianca')->nullable();
            $table->double('rPisosSons')->nullable();
            $table->double('rAproxVulto')->nullable();
            $table->double('rDisparos')->nullable();
            $table->double('instPresaPerist')->nullable();
            $table->double('intsBusca')->nullable();
            $table->double('ladrido')->nullable();
            $table->double('instDefesa')->nullable();
            $table->double('tecnMordida')->nullable();
            $table->double('qualidMordida')->nullable();
            $table->double('CombatLuta')->nullable();
            $table->double('notaFinal')->nullable();
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
