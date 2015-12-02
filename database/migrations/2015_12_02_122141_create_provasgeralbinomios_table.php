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
            $table->string('avaliador1', 50)->nullable();
            $table->string('avaliador2', 50)->nullable();
            $table->string('avaliador3', 50)->nullable();
            $table->string('local', 100)->nullable();
            $table->integer('ambito')->unsigned()->nullable();
            $table->double('nota')->nullable();
            $table->string('situacao', 100)->nullable();
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
