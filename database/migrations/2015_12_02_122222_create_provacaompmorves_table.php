<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvaCaoMPMorvesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prova_cao_m_p_morves', function(Blueprint $table) {
            $table->integer('id')->primary()->unsigned();
            $table->double('peso')->nullable();
            $table->double('comprimento')->nullable();
            $table->double('altGarrote')->nullable();
            $table->double('altGarupa')->nullable();
            $table->string('pelagem')->nullable();
            $table->double('perimetro')->nullable();
            $table->double('orelhas')->nullable();
            $table->double('distOlhos')->nullable();
            $table->double('distOccipTrufa')->nullable();
            $table->double('compChanfro')->nullable();
            $table->double('diamChanfro')->nullable();
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
		Schema::drop('prova_cao_m_p_morves');
	}

}
