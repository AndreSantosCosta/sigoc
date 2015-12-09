<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewBinomio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW view_binomios AS SELECT '.
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
            ' b.data_inicio, '.
            ' b.militar_id, '.
            ' b.cao_id, '.
            ' b.vertente, '.
            ' b.motivo_inativo, '.
            ' e.created_at, '.
            ' e.updated_at '.
            ' FROM entidades as e '.
            ' INNER JOIN binomios as b '.
            ' ON e.id = b.id'
            );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_binomios');
    }
}
