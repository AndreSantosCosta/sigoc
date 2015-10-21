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
            $table->string('num_matricula')->unique();
            $table->string('num_chip');
            $table->string('nome');
            $table->string('raca');
            $table->string('sexo');
            $table->string('origem');
            $table->date('data_nascim');
            $table->string('mae');
            $table->string('pai');
            $table->string('ninhada');
            $table->boolean('inativo');
            $table->date('data_inativo')->nullable();
            $table->string('motivo_inativo')->nullable();
            $table->text('observacoes')->nulable();
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
