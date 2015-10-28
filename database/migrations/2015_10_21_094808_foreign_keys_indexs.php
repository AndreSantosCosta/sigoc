<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysIndexs extends Migration
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
            //chaves estrangueiras..
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

    }
}
