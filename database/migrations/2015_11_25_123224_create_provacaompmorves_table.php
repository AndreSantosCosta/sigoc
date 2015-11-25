<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaoMPMorvesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_cao_m_p_morves', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('IdProvaCao')->unsigned();
            $table->date('data_nascim');
            $table->double('peso');
            $table->double('comprimento');
            $table->double('altGarrote');
            $table->double('altGarupa');
            $table->text('pelagem');
            $table->double('perimetro');
            $table->double('orelhas');
            $table->double('distOlhos');
            $table->double('distOccipTrufa');
            $table->double('compChanfro');
            $table->double('diamChanfro');
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
		Schema::drop('prova_cao_m_p_morves');
	}

}
