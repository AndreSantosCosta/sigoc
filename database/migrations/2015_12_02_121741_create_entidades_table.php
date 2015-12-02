<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entidades', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipoEntidade', 1);
            $table->string('nome');
            $table->boolean('inativo')->nullable();
            $table->date('data_inativo')->nullable();
            $table->date('data_ativo')->nullable();
            $table->string('fotografia')->nullable();
            $table->integer('tamanhoImagem')->nullable();
            $table->string('tipoImagem', 50)->nullable();
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
		Schema::drop('entidades');
	}

}
