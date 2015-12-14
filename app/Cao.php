<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cao extends Model
{
	protected $table = 'view_caos';

	
	public function getNomeOrigemAttribute(){
		$origem = Origem::findOrFail($this->origem);
		return $origem->descricao;
	}

	public function getNomeMotivoInativoAttribute(){
		$caoMotivoInatCao = MotivoInativoCao::findOrFail($this->motivo_inativo);
		return $caoMotivoInatCao->descricao;
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

	private function insertRecord()
        {
        // Insere na Entidade
		$entidade = new Entidade();
                $entidade->tipoEntidade = "C";
                $entidade->nome = $this->nome;
                $entidade->inativo = $this->inativo;
                $entidade->data_inativo = $this->data_inativo;
                $entidade->data_ativo = $this->data_ativo;
                $entidade->fotografia = $this->fotografia;
                $entidade->tamanhoImagem = $this->tamanhoImagem;
                $entidade->observacoes = $this->observacoes;
                $entidade->unidade_id = $this->unidade_id;
                $entidade->numero = $this->num_matricula;
                $entidade->save();
 
        // Atualiza campos calculados
                $this->id = $entidade->id;
                $this->tipoEntidade = $entidade->tipoEntidade;
                $this->nome = $entidade->nome;
                $this->numero = $entidade->numero;

        // Insere no Cao (na tabela real - caos)
                $cao = new Cao_RealTable();
                $cao->id = $this->id;
                $cao->num_matricula = $this->num_matricula;
                $cao->num_chip = $this->num_chip;
                $cao->raca = $this->raca;
                $cao->sexo = $this->sexo;
                $cao->origem = $this->origem;
                $cao->data_nascim = $this->data_nascim;
                $cao->mae_id = $this->mae_id;
                $cao->mae_nome = $this->mae_nome;
                $cao->pai_id = $this->pai_id;
                $cao->pai_nome = $this->pai_nome;
                $cao->ninhada = $this->ninhada;
                $cao->motivo_inativo = $this->motivo_inativo;
                $cao->save();
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
               $cao = Cao_RealTable::findOrFail($this->id);
               $cao->id = $this->id;
               $cao->num_matricula = $this->num_matricula;
               $cao->num_chip = $this->num_chip;
               $cao->raca = $this->raca;
               $cao->sexo = $this->sexo;
               $cao->origem = $this->origem;
               $cao->data_nascim = $this->data_nascim;
               $cao->mae_id = $this->mae_id;
               $cao->mae_nome = $this->mae_nome;
               $cao->pai_id = $this->pai_id;
               $cao->pai_nome = $this->pai_nome;
               $cao->ninhada = $this->ninhada;
               $cao->motivo_inativo = $this->motivo_inativo;
               $cao->save();
       }

       private function deleteRecord(){
        // Apaga do Cao
              $cao = Cao_RealTable::findOrFail($this->id);		
              $cao->delete();

        // Apaga da Entidade		
              $entidade = Entidade::findOrFail($this->id);		
              $entidade->delete();
      }

}
