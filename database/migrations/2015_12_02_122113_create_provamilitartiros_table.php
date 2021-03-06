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
            $table->integer('id')->primary()->unsigned();
            $table->string('local', 100)->nullable();
            $table->string('tipo', 50)->nullable();
            $table->double('notaFinal')->nullable();
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
