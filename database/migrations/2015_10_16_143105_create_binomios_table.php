<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinomiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('binomios', function(Blueprint $table) {
            $table->increments('id');
            $table->date('data_inicio');
            $table->string('num_mecanografico_id')->primary();
            $table->string('num_matricula_id')->primary();
            $table->text('vertente');
            $table->boolean('inativo');
            $table->date('data_inativo')->nullable();
            $table->text('motivo_inativo')->nullable();
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
		Schema::drop('binomios');
	}

}
