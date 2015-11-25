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
        Schema::table('militarUtilizador', function($table){
            $table->foreign('militar_id')->references('id')->on('militars');
            $table->foreign('utilizador_id')->references('id')->on('users');
        });

        Schema::table('militars', function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('posto_id')->references('id')->on('postos');
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->foreign('motivo_inativo')->references('id')->on('motivoInativoMilitar');
        });

        Schema::table('caos', function($table){
            $table->foreign('origem')->references('id')->on('origemCao');
            $table->foreign('mae')->references('id')->on('caos');
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
            $table->foreign('IdProvaMilitar')->references('id')->on('prova_militars');
            $table->foreign('ambito')->references('id')->on('ambitoMilitarPAF');
        });

        Schema::table('prova_militar_teoricas', function($table){
            $table->foreign('IdProvaMilitar')->references('id')->on('prova_militars');
            $table->foreign('ambito')->references('id')->on('ambitoMilitarPTeorica');
        });

        Schema::table('prova_militar_tiros', function($table){
            $table->foreign('IdProvaMilitar')->references('id')->on('prova_militars');
        });

        Schema::table('prova_militars', function($table){
            $table->foreign('prova_id')->references('id')->on('provas');
            $table->foreign('militar_id')->references('id')->on('militars');
            $table->foreign('tipoProva')->references('id')->on('tipoProvasMilitar');
        });

        Schema::table('prova_binom_t_a_n_a_t2s', function($table){
            $table->foreign('IdProvaBinomio')->references('id')->on('prova_binomios');
        });

        Schema::table('provas_geral_binomios', function($table){
            $table->foreign('IdProvaBinomio')->references('id')->on('prova_binomios');
            $table->foreign('ambito')->references('id')->on('ambitoProvasGeralBinomio');
        });

        Schema::table('prova_binomios', function($table){
            $table->foreign('prova_id')->references('id')->on('provas');
            $table->foreign('binomio_id')->references('id')->on('binomios');
            $table->foreign('tipoProva')->references('id')->on('tipoProvasBinomio');
        });

        Schema::table('prova_cao_m_p_morves', function($table){
            $table->foreign('IdProvaCao')->references('id')->on('prova_caos');
        });

        Schema::table('prova_cao_t_i_pers', function($table){
            $table->foreign('IdProvaCao')->references('id')->on('prova_caos');
        });

        Schema::table('prova_cao_t_a_n_a_t1s', function($table){
            $table->foreign('IdProvaCao')->references('id')->on('prova_caos');
        });

        Schema::table('prova_caos', function($table){
            $table->foreign('prova_id')->references('id')->on('provas');
            $table->foreign('cao_id')->references('id')->on('binomios');
            $table->foreign('tipoProva')->references('id')->on('tipoProvasCao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('militarUtilizador', function($table){
            $table->dropForeign('militarUtilizador_militar_id_foreign');
            $table->dropForeign('militarUtilizador_utilizador_id_foreign');
        });

        Schema::table('militars', function($table){
            $table->dropForeign('militars_user_id_foreign');
            $table->dropForeign('militars_posto_id_foreign');
            $table->dropForeign('militars_unidade_id_foreign');
            $table->dropForeign('militars_motivo_inativo_foreign');
        });

        Schema::table('caos', function($table){
            $table->dropForeign('caos_origem_foreign');
            $table->dropForeign('caos_mae_foreign');
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
            $table->dropForeign('prova_militar_p_a_fisicas_IdProvaMilitar_foreign');
            $table->dropForeign('prova_militar_p_a_fisicas_militar_id_foreign');
        });

        Schema::table('prova_militar_teoricas', function($table){
            $table->dropForeign('prova_militar_teoricas_IdProvaMilitar_foreign');
            $table->dropForeign('prova_militar_teoricas_ambito_foreign');
        });

        Schema::table('prova_militar_tiros', function($table){
            $table->dropForeign('prova_militar_tiros_IdProvaMilitar_foreign');
        });

        Schema::table('prova_militars', function($table){
            $table->dropForeign('prova_militars_prova_id_foreign');
            $table->dropForeign('prova_militars_prova_id_foreign');
            $table->dropForeign('prova_militars_tipoProva_foreign');
        });

        Schema::table('prova_binom_t_a_n_a_t2s', function($table){
            $table->dropForeign('prova_binom_t_a_n_a_t2s_IdProvaBinomio_foreign');
        });

        Schema::table('provas_geral_binomios', function($table){
            $table->dropForeign('provas_geral_binomios_IdProvaBinomio_foreign');
            $table->dropForeign('provas_geral_binomios_ambito_foreign');
        });

        Schema::table('prova_binomios', function($table){
            $table->dropForeign('prova_binomios_prova_id_foreign');
            $table->dropForeign('prova_binomios_binomio_id_foreign');
            $table->dropForeign('prova_binomios_tipoProva_foreign');
        });

        Schema::table('prova_cao_m_p_morves', function($table){
            $table->dropForeign('prova_cao_m_p_morves_IdProvaCao_foreign');
        });

        Schema::table('prova_cao_t_i_pers', function($table){
            $table->dropForeign('prova_cao_t_i_pers_IdProvaCao_foreign');
        });

        Schema::table('prova_cao_t_a_n_a_t1s', function($table){
            $table->dropForeign('prova_cao_t_a_n_a_t1s_IdProvaCao_foreign');
        });

        Schema::table('prova_caos', function($table){
            $table->dropForeign('prova_caos_prova_id_foreign');
            $table->dropForeign('prova_caos_cao_id_foreign');
            $table->dropForeign('prova_caos_tipoProva_foreign');
        });

    }
}
