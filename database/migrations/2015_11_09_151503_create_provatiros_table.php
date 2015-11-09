<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaTirosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_tiros', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('prova_id')->unsigned();
            $table->date('data_prova');
            $table->string('num_mecanografico');
            $table->text('local');
            $table->text('tipo');
            $table->double('nota_final');
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
		Schema::drop('prova_tiros');
	}

}
