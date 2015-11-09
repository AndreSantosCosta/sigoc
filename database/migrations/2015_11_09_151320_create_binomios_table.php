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
            $table->integer('militar_id')->unsigned();
            $table->integer('cao_id')->unsigned();
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
