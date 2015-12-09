<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewMilitars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW view_militars AS SELECT '.
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
            ' m.num_mecanografico, '.
            ' m.user_id, '.
            ' m.posto_id, '.
            ' m.apelido, '.
            ' m.nomeProprio, '.
            ' m.data_nascim, '.
            ' m.grupo_sang, '.
            ' m.sexo, '.
            ' m.motivo_inativo, '.
            ' e.created_at, '.
            ' e.updated_at '.
            ' FROM entidades as e '.
            ' INNER JOIN militars as m '.
            ' ON e.id = m.id'
            );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_militars');
    }
}
