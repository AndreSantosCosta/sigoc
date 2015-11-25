<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_caos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('prova_id')->unsigned();
            $table->integer('cao_id')->unsigned();
            $table->integer('tipoProva')->unsigned();
            $table->date('dataProva');
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
		Schema::drop('prova_caos');
	}

}
