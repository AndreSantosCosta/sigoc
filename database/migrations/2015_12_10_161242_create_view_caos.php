<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewCaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW view_caos AS SELECT '.
            ' e.id, '.
            ' e.tipoEntidade, '.
            ' e.nome, '.
            ' e.inativo, '.
            ' e.data_inativo, '.
            ' e.data_ativo, '.
            ' e.fotografia, '.
            ' e.tamanhoImagem, '.
            ' e.tipoImagem, '.
            ' e.observacoes, '.
            ' e.unidade_id, '.
            ' e.numero, '.
            ' c.num_matricula, '.
            ' c.num_chip, '.
            ' c.raca, '.
            ' c.sexo, '.
            ' c.origem, '.
            ' c.data_nascim, '.
            ' c.mae_id, '.
            ' c.mae_nome, '.
            ' c.pai_id, '.
            ' c.pai_nome, '.
            ' c.ninhada, '.
            ' c.motivo_inativo, '.
            ' e.created_at, '.
            ' e.updated_at '.
            ' FROM entidades as e '.
            ' INNER JOIN caos as c '.
            ' ON e.id = c.id'
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_caos');
    }
}
