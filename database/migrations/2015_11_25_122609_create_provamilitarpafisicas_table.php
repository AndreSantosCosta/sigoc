<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaMilitarPAFisicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_militar_p_a_fisicas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('IdProvaMilitar')->unsigned();
            $table->integer('escalao');
            $table->double('flexoesTrave');
            $table->double('abdominais');
            $table->double('extSolo');
            $table->double('testCooper');
            $table->double('notaFinal');
            $table->integer('ambito')->unsigned();
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
		Schema::drop('prova_militar_p_a_fisicas');
	}

}
