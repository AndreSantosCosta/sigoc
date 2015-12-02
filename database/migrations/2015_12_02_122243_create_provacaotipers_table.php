<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaoTIPersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_cao_t_i_pers', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->string('avaliador', 50)->nullable();
            $table->string('executante', 50)->nullable();
            $table->string('local', 100)->nullable();
            $table->integer('seguimento')->nullable();
            $table->integer('levantar')->nullable();
            $table->integer('submissao')->nullable();
            $table->integer('chamada')->nullable();
            $table->integer('buscaObj')->nullable();
            $table->integer('jornal')->nullable();
            $table->integer('chapeu')->nullable();
            $table->integer('mesa')->nullable();
            $table->integer('dor')->nullable();
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
		Schema::drop('prova_cao_t_i_pers');
	}

}
