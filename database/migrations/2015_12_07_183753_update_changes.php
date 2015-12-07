<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('militars', function($table)
        {
            $table->dropForeign('militars_unidade_id_foreign');
            $table->dropColumn('unidade_id');
            $table->string('num_mecanografico')->unique()->change();
        });

        Schema::table('caos', function($table)
        {
            $table->string('num_chip')->nullable()->change();
            $table->string('num_matricula')->unique()->change();
        });

        Schema::table('entidades', function($table)
        {
            $table->integer('unidade_id')->unsigned();
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->string('numero', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('militars', function($table)
        {
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->integer('unidade_id')->unsigned()->change();
            $table->string('num_mecanografico')->change();
        });

        Schema::table('caos', function($table)
        {
            $table->string('num_chip')->change();
            $table->string('num_matricula')->change();
        });

        Schema::table('entidades', function($table)
        {
            $table->dropColumn('unidade_id');
            $table->dropColumn('numero');
        });
    }
}
