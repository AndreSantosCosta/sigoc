<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilitarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('militars', function(Blueprint $table) {
            $table->increments('id');
            $table->string('num_mecanografico');
            $table->integer('user_id')->unsigned();
            $table->integer('posto_id')->unsigned();
            $table->string('apelido');
            $table->string('nome');
            $table->date('data_nascim');
            $table->string('grupo_sang')->nullable();
            $table->string('sexo');
            $table->integer('unidade_id')->unsigned();
            $table->boolean('inativo');
            $table->date('data_inativo')->nullable();
            $table->string('motivo_inativo')->nullable();
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
		Schema::drop('militars');
	}

}
