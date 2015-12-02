<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caos', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->string('num_matricula');
            $table->string('num_chip');
            $table->string('raca');
            $table->string('sexo', 1);
            $table->integer('origem')->unsigned();
            $table->date('data_nascim');
            $table->integer('mae_id')->unsigned()->nullable();
            $table->string('mae_nome')->nullable();
            $table->integer('pai_id')->unsigned()->nullable();
            $table->string('pai_nome')->nullable();
            $table->string('ninhada');
            $table->integer('motivo_inativo')->nullable()->unsigned();
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
		Schema::drop('caos');
	}

}
