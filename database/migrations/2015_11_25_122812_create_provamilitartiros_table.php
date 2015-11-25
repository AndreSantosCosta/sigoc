<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaMilitarTirosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_militar_tiros', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('IdProvaMilitar')->unsigned();
            $table->text('local');
            $table->text('tipo');
            $table->double('notaFinal');
            $table->text('arquivo');
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
		Schema::drop('prova_militar_tiros');
	}

}
