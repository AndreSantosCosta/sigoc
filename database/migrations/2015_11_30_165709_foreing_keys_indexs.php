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
         Schema::table('militars', function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('posto_id')->references('id')->on('postos');
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->foreign('motivo_inativo')->references('id')->on('motivoInativoMilitar');
        });

        Schema::table('caos', function($table){
            $table->foreign('origem')->references('id')->on('origemCao');
            $table->foreign('mae_id')->references('id')->on('caos');
            $table->foreign('pai')->references('id')->on('caos');
            $table->foreign('motivo_inativo')->references('id')->on('motivoInativoCao');
        });

        Schema::table('binomios', function($table){
            $table->unique(['cao_id','militar_id']);
            $table->foreign('cao_id')->references('id')->on('caos');
            $table->foreign('militar_id')->references('id')->on('militars');
            $table->foreign('vertente')->references('id')->on('vertenteBinomio');
        });

        Schema::table('prova_militar_p_a_fisicas', function($table){
            $table->foreign('id')->references('id')->on('provas');
            $table->foreign('ambito')->references('id')->on('ambitoMilitarPAF');
        });

        Schema::table('prova_militar_teoricas', function($table){
            $table->foreign('id')->references('id')->on('provas');
            $table->foreign('ambito')->references('id')->on('ambitoMilitarPTeorica');
        });

        Schema::table('prova_militar_tiros', function($table){
            $table->foreign('id')->references('id')->on('provas');
        });

        Schema::table('prova_binom_t_a_n_a_t2s', function($table){
            $table->foreign('id')->references('id')->on('provas');
        });

        Schema::table('provas_geral_binomios', function($table){
            $table->foreign('id')->references('id')->on('provas');
            $table->foreign('ambito')->references('id')->on('ambitoProvasGeralBinomio');
        });

        Schema::table('prova_cao_m_p_morves', function($table){
            $table->foreign('id')->references('id')->on('provas');
        });

        Schema::table('prova_cao_t_i_pers', function($table){
            $table->foreign('id')->references('id')->on('provas');
        });

        Schema::table('prova_cao_t_a_n_a_t1s', function($table){
            $table->foreign('id')->references('id')->on('provas');
        });

        Schema::table('provas', function($table){
            $table->foreign('cao_id')->references('id')->on('caos');
            $table->foreign('militar_id')->references('id')->on('militars');
            $table->foreign('binomio_id')->references('id')->on('binomios');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('militars', function($table){
            $table->dropForeign('militars_user_id_foreign');
            $table->dropForeign('militars_posto_id_foreign');
            $table->dropForeign('militars_unidade_id_foreign');
            $table->dropForeign('militars_motivo_inativo_foreign');
        });

        Schema::table('caos', function($table){
            $table->dropForeign('caos_origem_foreign');
            $table->dropForeign('caos_mae_id_foreign');
            $table->dropForeign('caos_pai_foreign');
            $table->dropForeign('caos_motivo_inativo_foreign');
        });

        Schema::table('binomios', function($table){
            $table->dropForeign('binomios_cao_id_foreign');
            $table->dropForeign('binomios_militar_id_foreign');
            $table->dropUnique('binomios_cao_id_militar_id_unique');
            $table->dropForeign('binomios_vertente_foreign');
        });

        Schema::table('prova_militar_p_a_fisicas', function($table){
            $table->dropForeign('prova_militar_p_a_fisicas_id_foreign');
            $table->dropForeign('prova_militar_p_a_fisicas_ambito_foreign');
        });

        Schema::table('prova_militar_teoricas', function($table){
            $table->dropForeign('prova_militar_teoricas_id_foreign');
            $table->dropForeign('prova_militar_teoricas_ambito_foreign');
        });

        Schema::table('prova_militar_tiros', function($table){
            $table->dropForeign('prova_militar_tiros_id_foreign');
        });

        Schema::table('prova_binom_t_a_n_a_t2s', function($table){
            $table->dropForeign('prova_binom_t_a_n_a_t2s_IdProvaBinomio_foreign');
        });

        Schema::table('provas_geral_binomios', function($table){
            $table->dropForeign('provas_geral_binomios_id_foreign');
            $table->dropForeign('provas_geral_binomios_ambito_foreign');
        });

        Schema::table('prova_cao_m_p_morves', function($table){
            $table->dropForeign('prova_cao_m_p_morves_id_foreign');
        });

        Schema::table('prova_cao_t_i_pers', function($table){
            $table->dropForeign('prova_cao_t_i_pers_id_foreign');
        });

        Schema::table('prova_cao_t_a_n_a_t1s', function($table){
            $table->dropForeign('prova_cao_t_a_n_a_t1s_id_foreign');
        });

        Schema::table('provas', function($table){
            $table->dropForeign('provas_cao_id_foreign');
            $table->dropForeign('provas_militar_id_foreign');
            $table->dropForeign('provas_binomio_id_foreign');
        });

    }
}
