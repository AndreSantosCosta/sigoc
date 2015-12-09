<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveSubClassesTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('militars', function($table) {
            $table->dropTimestamps();
        });
        Schema::table('caos', function($table) {
            $table->dropTimestamps();
        });
        Schema::table('binomios', function($table) {
            $table->dropTimestamps();
        });

        // Repetir para todas as tabelas de provas (subclasses)
        Schema::table('prova_militar_p_a_fisicas', function($table) {
            $table->dropTimestamps();
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('militars', function($table) {
            $table->timestamps();
        });
        Schema::table('caos', function($table) {
            $table->timestamps();
        });
        Schema::table('binomios', function($table) {
            $table->timestamps();
        });

        // Repetir para todas as tabelas de provas (subclasses)
        Schema::table('prova_militar_p_a_fisicas', function($table) {
            $table->timestamps();
        });
    }
}
