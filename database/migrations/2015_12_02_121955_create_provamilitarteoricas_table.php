<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaMilitarTeoricasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_militar_teoricas', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->integer('ambito')->unsigned();
            $table->string('materias');
            $table->double('notaFinal');
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
		Schema::drop('prova_militar_teoricas');
	}

}
