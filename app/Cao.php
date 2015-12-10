<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cao extends Model
{
	protected $table = 'view_caos';

	public function getNomePostoAttribute(){
		$posto = Posto::findOrFail($this->posto_id);
		return $posto->descricao;
	}

	public function getNomeUnidadeAttribute(){
		$unidade = Unidade::findOrFail($this->unidade_id);
		return $unidade->descricao;
	}

	public function getNomeMotivoInativacaoAttribute(){
		$militarotivoInatMilitar = MotivoInativoMilitar::findOrFail($this->motivo_inativo);
		return $militarotivoInatMilitar->descricao;
	}

	private function calculateNome(){
		return $this->getNomePostoAttribute() . " " . $this->apelido; 
	}

	// ----------------------------------------------
	// Implementação das SuperClasses / SubClasses
	// ----------------------------------------------

	public function save(array $options= null){
		DB::transaction(function() {
			if ($this->exists)
				$this->updateRecord();
			else
				$this->insertRecord();
		});		
	}

	public function delete(){
		DB::transaction(function() {
			$this->deleteRecord();
		});		
	}

	private function insertRecord(){
        // Insere na Entidade
		$entidade = new Entidade();
        $entidade->tipoEntidade = "C";
        $entidade->nome = $this->calculateNome();
        $entidade->inativo = $this->inativo;
        $entidade->data_inativo = $this->data_inativo;
        $entidade->data_ativo = $this->data_ativo;
        $entidade->fotografia = $this->fotografia;
        $entidade->tamanhoImagem = $this->tamanhoImagem;
        $entidade->observacoes = $this->observacoes;
        $entidade->unidade_id = $this->unidade_id;
        $entidade->numero = $this->num_mecanografico;
        $entidade->save();

        // Atualiza campos calculados
        $this->id = $entidade->id;
        $this->tipoEntidade = $entidade->tipoEntidade;
        $this->nome = $entidade->nome;
        $this->numero = $entidade->numero;

        // Insere no Cao (na tabela real - caos)
        $militar = new Cao_RealTable();
        $militar->id = $this->id;
        $militar->num_matricula = $this->num_matricula;
        $militar->num_chip = $this->num_chip;
        $militar->raca = $this->raca;
        $militar->sexo = $this->sexo;
        $militar->origem = $this->origem;
        $militar->data_nascim = $this->data_nascim;
        $militar->mae_id = $this->mae_id;
        $militar->mae_nome = $this->mae_nome;
        $militar->pai_id = $this->pai_id;
        $militar->pai_nome = $this->pai_nome;
        $militar->ninhada = $this->ninhada;
        $militar->motivo_inativo = $this->motivo_inativo;
        $militar->save();
	}

	private function updateRecord(){
        // Atualiza na Entidade
		$entidade = Entidade::findOrFail($this->id);
        $entidade->tipoEntidade = "C";
        $entidade->nome = $this->calculateNome();
        $entidade->inativo = $this->inativo;
        $entidade->data_inativo = $this->data_inativo;
        $entidade->data_ativo = $this->data_ativo;
        $entidade->fotografia = $this->fotografia;
        $entidade->tamanhoImagem = $this->tamanhoImagem;
        $entidade->observacoes = $this->observacoes;
        $entidade->unidade_id = $this->unidade_id;
        $entidade->numero = $this->num_mecanografico;
        $entidade->save();

        // Atualiza campos calculados
        $this->id = $entidade->id;
        $this->tipoEntidade = $entidade->tipoEntidade;
        $this->nome = $entidade->nome;
        $this->numero = $entidade->numero;

        // Atualiza no Cao
		$militar = Cao_RealTable::findOrFail($this->id);
        $militar->id = $this->id;
        $militar->num_matricula = $this->num_matricula;
        $militar->num_chip = $this->num_chip;
        $militar->raca = $this->raca;
        $militar->sexo = $this->sexo;
        $militar->origem = $this->origem;
        $militar->data_nascim = $this->data_nascim;
        $militar->mae_id = $this->mae_id;
        $militar->mae_nome = $this->mae_nome;
        $militar->pai_id = $this->pai_id;
        $militar->pai_nome = $this->pai_nome;
        $militar->ninhada = $this->ninhada;
        $militar->motivo_inativo = $this->motivo_inativo;
        $militar->save();
	}

	private function deleteRecord(){
        // Apaga do Cao
		$militar = Cao_RealTable::findOrFail($this->id);		
		$militar->delete();

        // Apaga da Entidade		
		$entidade = Entidade::findOrFail($this->id);		
		$entidade->delete();
	}
    
}
