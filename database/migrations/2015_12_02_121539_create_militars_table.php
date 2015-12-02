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
            $table->integer('id')->primary()->unsigned();
            $table->string('num_mecanografico');
            $table->integer('user_id')->unsigned()->nullable()->unique();
            $table->integer('posto_id')->unsigned();
            $table->string('apelido');
            $table->string('nomeProprio');
            $table->date('data_nascim');
            $table->string('grupo_sang', 5);
            $table->string('sexo', 1);
            $table->integer('unidade_id')->unsigned();
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
