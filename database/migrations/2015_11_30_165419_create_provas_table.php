<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipoEntidade', 1);
            $table->string('tipoProva', 10);
            $table->date('dataProva');
            $table->integer('cao_id')->unsigned()->nullable();
            $table->integer('militar_id')->unsigned()->nullable();
            $table->integer('binomio_id')->unsigned()->nullable();
            $table->text('observacoes')->nullable();
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
		Schema::drop('provas');
	}

}
