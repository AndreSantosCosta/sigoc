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
            $table->integer('id')->primary()->unsigned();
            $table->string('avaliador1', 50);
            $table->string('avaliador2', 50);
            $table->string('avaliador3', 50);
            $table->string('local', 100);
            $table->integer('ambito')->unsigned();
            $table->double('nota');
            $table->string('situacao', 100);
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
