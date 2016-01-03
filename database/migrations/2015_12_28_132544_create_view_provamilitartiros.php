<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProvamilitartiros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('CREATE VIEW view_provamilitartiros AS SELECT '.
            ' p.id, '.
            ' p.tipoEntidade, '.
            ' p.tipoProva, '.
            ' p.dataProva, '.
            ' p.entidade_id, '.
            ' p.arquivo, '.
            ' p.observacoes, '.
            ' t.local, '.
            ' t.tipo, '.
            ' t.notaFinal, '.
            ' p.created_at, '.
            ' p.updated_at '.
            ' FROM provas as p '.
            ' INNER JOIN prova_militar_tiros as t '.
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
        DB::statement('DROP VIEW view_provamilitartiros');
    }
}
