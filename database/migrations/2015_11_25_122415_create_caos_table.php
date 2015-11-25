<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('num_matricula');
            $table->string('num_chip');
            $table->string('nome');
            $table->string('raca');
            $table->string('sexo');
            $table->integer('origem')->unsigned();
            $table->date('data_nascim');
            $table->integer('mae')->unsigned();
            $table->integer('pai')->unsigned();
            $table->string('ninhada');
            $table->string('fotografia')->nullable();
            $table->integer('tamanhoImagem')->nullable();
            $table->string('tipoImagem')->nullable();
            $table->boolean('inativo')->nullable();
            $table->date('data_inativo')->nullable();
            $table->date('data_ativo')->nullable();
            $table->integer('motivo_inativo')->nullable()->unsigned();
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
		Schema::drop('caos');
	}

}
