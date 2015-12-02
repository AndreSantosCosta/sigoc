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
            $table->integer('id')->primary()->unsigned();
            $table->date('data_inicio');
            $table->integer('militar_id')->unsigned();
            $table->integer('cao_id')->unsigned();
            $table->integer('vertente')->unsigned();
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
