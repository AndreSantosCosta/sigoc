<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProvacaotip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW view_provacaotip AS SELECT '.
            ' p.id, '.
            ' p.tipoEntidade, '.
            ' p.tipoProva, '.
            ' p.dataProva, '.
            ' p.entidade_id, '.
            ' p.arquivo, '.
            ' p.observacoes, '.
            ' t.avaliador, '.
            ' t.executante, '.
            ' t.local, '.
            ' t.seguimento, '.
            ' t.levantar, '.
            ' t.submissao, '.
            ' t.chamada, '.
            ' t.buscaObj, '.
            ' t.jornal, '.
            ' t.chapeu, '.
            ' t.mesa, '.
            ' t.dor, '.
            ' t.notaFinal, '.
            ' p.created_at, '.
            ' p.updated_at '.
            ' FROM provas as p '.
            ' INNER JOIN prova_cao_t_i_pers as t '.
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
        DB::statement('DROP VIEW view_provacaotip');
    }
}
