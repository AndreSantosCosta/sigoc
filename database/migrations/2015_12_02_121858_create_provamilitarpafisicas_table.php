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
            $table->integer('id')->primary()->unsigned();
            $table->integer('escalao')->nullable();
            $table->double('flexoesTrave')->nullable();
            $table->double('abdominais')->nullable();
            $table->double('extSolo')->nullable();
            $table->double('testCooper')->nullable();
            $table->double('notaFinal')->nullable();
            $table->integer('ambito')->unsigned()->nullable();
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
