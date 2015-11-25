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
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('posto_id')->unsigned();
            $table->string('apelido');
            $table->string('nome');
            $table->date('data_nascim');
            $table->string('grupo_sang');
            $table->string('sexo');
            $table->integer('unidade_id')->unsigned();
            $table->string('fotografia')->nullable();
            $table->integer('tamanhoImagem')->nullable();
            $table->string('tipoImagem')->nullable();
            $table->boolean('inativo')->nullable();
            $table->date('data_inativo')->nullable();
            $table->date('data_ativo')->nullable();
            $table->integer('motivo_inativo')->unsigned()->nullable();
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
