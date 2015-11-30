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
            $table->string('sexo', 1);
            $table->integer('origem')->unsigned();
            $table->date('data_nascim');
            $table->integer('mae_id')->unsigned()->nullable();
            $table->string('mae_nome')->nullable();
            $table->integer('pai')->unsigned()->nullable();
            $table->string('pai_nome')->nullable();
            $table->string('ninhada', 7);
            $table->string('fotografia')->nullable();
            $table->integer('tamanhoImagem')->nullable();
            $table->string('tipoImagem', 7)->nullable();
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
