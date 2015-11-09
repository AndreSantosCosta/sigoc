<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeingKeysIndexs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binomios', function($table){
            $table->unique(['cao_id','militar_id']);
            //chaves estrangueiras..
            $table->foreign('cao_id')->references('id')->on('caos');
            $table->foreign('militar_id')->references('id')->on('militars');
        });

        Schema::table('provas', function($table){
            $table->foreign('cao_id')->references('id')->on('caos');
            $table->foreign('militar_id')->references('id')->on('militars');
            $table->foreign('binomio_id')->references('id')->on('binomios');
        });

        Schema::table('prova_tiros', function($table){
            $table->foreign('prova_id')->references('id')->on('provas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('binomios', function($table){
        $table->dropForeign('binomios_cao_id_foreign');
        $table->dropForeign('binomios_militar_id_foreign');
        $table->dropUnique('binomios_cao_id_militar_id_unique');
    });

       Schema::table('provas', function($table){
        $table->dropForeign('provas_cao_id_foreign');
        $table->dropForeign('provas_militar_id_foreign');
        $table->dropForeign('provas_binomio_id_foreign');
    });

       Schema::table('prova_tiros', function($table){
        $table->dropForeign('provatiros_prova_id_foreign');
    });
   }
}
