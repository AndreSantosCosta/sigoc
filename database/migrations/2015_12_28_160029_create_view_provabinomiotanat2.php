<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProvabinomiotanat2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW view_provabinomiotanat2 AS SELECT '.
            ' p.id, '.
            ' p.tipoEntidade, '.
            ' p.tipoProva, '.
            ' p.dataProva, '.
            ' p.entidade_id, '.
            ' p.arquivo, '.
            ' p.observacoes, '.
            ' t.avaliador, '.
            ' t.local, '.
            ' t.atitute, '.
            ' t.memoriaMuscular, '.
            ' t.agilidadeConfianca, '.
            ' t.rPisosSons, '.
            ' t.rAproxVulto, '.
            ' t.rDisparos, '.
            ' t.instPresaPerist, '.
            ' t.intsBusca, '.
            ' t.marcPessoasObj, '.
            ' t.inicPistas, '.
            ' t.ladrido, '.
            ' t.instDefesa, '.
            ' t.tecnMordida, '.
            ' t.qualidMordida, '.
            ' t.CombatLuta, '.
            ' t.notaFinal, '.
            ' p.created_at, '.
            ' p.updated_at '.
            ' FROM provas as p '.
            ' INNER JOIN prova_binom_t_a_n_a_t2s as t '.
            ' ON p.id = t.id'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_provabinomiotanat2');
    }
}
