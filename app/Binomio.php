<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Binomio extends Model
{
	protected $table = 'view_binomios';

	public function getNumMecanogAttribute(){
		$num = Militar::findOrFail($this->militar_id);
		return $num->num_mecanografico;
	}

	public function getNumMatriculaAttribute(){
		$numM = Cao::findOrFail($this->cao_id);
		return $numM->num_matricula;
	}

	public function getNomeVertenteAttribute(){
		$vertente = VertenteBinomio::findOrFail($this->vertente);
		return $vertente->descricao;
	}

	public function getNomeUnidadeAttribute(){
		$unidade = Unidade::findOrFail($this->unidade_id);
		return $unidade->descricao;
	}

	public function getNomeMilitarAttribute(){
		$nomeMilitar = Militar::findOrFail($this->militar_id);
		return $nomeMilitar->nomeProprio;
	}
 
	public function getNomeCaoAttribute(){
		$nomeCao = Cao::findOrFail($this->cao_id);
		return $nomeCao->nomeCao;
	}

	private function calculateNome(){
		return $this->getNomeMilitarAttribute() . " " . $this->getNomeCaoAttribute; 
	}

	private function calculateNumero(){
		return $this->getNumMecanogAttribute() . " " . $this->getNumMatriculaAttribute; 
	}
	// ----------------------------------------------
	// ImplementaÃ§Ã£o das SuperClasses / SubClasses
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
		$entidade->tipoEntidade = "B";
		$entidade->nome = $this->calculateNome();
		$entidade->inativo = $this->inativo;
		$entidade->data_inativo = $this->data_inativo;
		$entidade->data_ativo = $this->data_ativo;
		$entidade->fotografia = $this->fotografia;
		$entidade->tamanhoImagem = $this->tamanhoImagem;
		$entidade->observacoes = $this->observacoes;
		$entidade->unidade_id = $this->unidade_id;
		$entidade->numero = $this->calculateNumero();
		$entidade->save();

        // Atualiza campos calculados
		$this->id = $entidade->id;
		$this->tipoEntidade = $entidade->tipoEntidade;
		$this->nome = $entidade->nome;
		$this->numero = $entidade->numero;

        // Insere no Binomio (na tabela real - binomios)
		$binomio = new Binomio_RealTable();
		$binomio->id = $this->id;
		$binomio->data_inicio = $this->data_inicio;
		$binomio->militar_id = $this->militar_id;
		$binomio->cao_id = $this->cao_id;
		$binomio->vertente = $this->vertente;
		$binomio->motivo_inativo = $this->motivo_inativo;
		$binomio->save();
	}

	private function updateRecord(){
        // Atualiza na Entidade
		$entidade = Entidade::findOrFail($this->id);
		$entidade->tipoEntidade = "B";
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

        // Atualiza no Binomio
		$binomio = Binomio_RealTable::findOrFail($this->id);
		$binomio->id = $this->id;
		$binomio->data_inicio = $this->data_inicio;
		$binomio->militar_id = $this->militar_id;
		$binomio->cao_id = $this->cao_id;
		$binomio->vertente = $this->vertente;
		$binomio->motivo_inativo = $this->motivo_inativo;
		$binomio->save();
	}

	private function deleteRecord(){
        // Apaga do Binomio
		$binomio = Binomio_RealTable::findOrFail($this->id);		
		$binomio->delete();

        // Apaga da Entidade		
		$entidade = Entidade::findOrFail($this->id);		
		$entidade->delete();
	}

}
