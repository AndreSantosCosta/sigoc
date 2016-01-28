<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProvaMilitarTiro extends Model
{
    protected $table = 'view_provamilitartiros';


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
        // Insere na Prova
		$prova = new Prova();
        $prova->tipoEntidade = "M";
        $prova->tipoProva = "Tiro";
        $prova->dataProva = $this->dataProva;
        
        $prova->entidade_id = $entidade_id;
        var_dump($entidade_id);
        exit;
        $prova->arquivo = $this->arquivo;
        $prova->observacoes = $this->observacoes;
        $prova->save();

        // Atualiza campos calculados
        $this->id = $prova->id;
        $this->tipoEntidade = $prova->tipoEntidade;
        $this->tipoProva = $prova->tipoProva;

        // Insere na Prova Tiro (na tabela real - tiro)
        $tiro = new ProvaMilitarTiro_RealTable();
        $tiro->id = $this->id;
        $tiro->local = $this->local;
        $tiro->tipo = $this->tipo;
        $tiro->notaFinal = $this->notaFinal;
        $tiro->save();
	}
 
	private function updateRecord(){
        // Atualiza na Prova
		$prova = Prova::findOrFail($this->id);
       
        $prova->tipoEntidade = "M";
        $prova->tipoProva = "Tiro";
        $prova->dataProva = $this->dataProva;
        $prova->entidade_id = $this->entidade_id;
        $prova->arquivo = $this->arquivo;
        $prova->observacoes = $this->observacoes;
        $prova->save();

        // Atualiza campos calculados
        $this->id = $prova->id;
        $this->tipoEntidade = $prova->tipoEntidade;
        $this->tipoProva = $prova->tipoProva;

        // Atualiza na Prova Tiro
		$tiro = ProvaMilitarTiro_RealTable::findOrFail($this->id);
		$tiro->id = $this->id;
        $tiro->local = $this->local;
        $tiro->tipo = $this->tipo;
        $tiro->notaFinal = $this->notaFinal;
        $tiro->save();
	}

	private function deleteRecord(){
        // Apaga do Militar
		$tiro = ProvaMilitarTiro_RealTable::findOrFail($this->id);		
		$tiro->delete();

        // Apaga da Entidade		
		$prova = Prova::findOrFail($this->id);		
		$prova->delete();
	}
     public function getNumIdentificacaoAttribute(){
        $num = Militar::findOrFail($this->entidade_id);
        return $num->num_mecanografico;
    } 
    
     public function getNomeIdentificacaoAttribute(){
        $nome = Militar::findOrFail($this->entidade_id);
        return $nome->nomeProprio;
    }
}
 

