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
            $table->string('tipo_prova');
            $table->date('data_prova');
            $table->integer('militar_id')->unsigned();
            $table->integer('cao_id')->unsigned();
            $table->integer('binomio_id')->unsigned();
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
