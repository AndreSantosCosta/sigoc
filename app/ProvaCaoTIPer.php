<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProvaCaoTIPer extends Model
{
    protected $table = 'view_provacaotip';


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
        $prova->tipoEntidade = "C";
        $prova->tipoProva = $this->"TIP";
        $prova->dataProva = $this->dataProva;
        $prova->entidade_id = $this->entidade_id;
        $prova->arquivo = $this->arquivo;
        $prova->observacoes = $this->observacoes;
        $prova->save();

        // Atualiza campos calculados
        $this->id = $prova->id;
        $this->tipoEntidade = $prova->tipoEntidade;
        $this->tipoProva = $prova->tipoProva;

        // Insere na Prova tip (na tabela real - tip)
        $tip = new ProvaCaoTIPer_RealTable();
        $tip->id = $this->id;
        $tip->avaliador = $this->avaliador;
        $tip->executante = $this->executante;
        $tip->local = $this->local;
        $tip->seguimento = $this->seguimento;
        $tip->levantar = $this->levantar;
        $tip->submissao = $this->submissao;
        $tip->chamada = $this->chamada;
        $tip->buscaObj = $this->buscaObj;
        $tip->jornal = $this->jornal;
        $tip->chapeu = $this->chapeu;
        $tip->mesa = $this->mesa;
        $tip->dor = $this->dor;
        $tip->notaFinal = $this->notaFinal;
        $tip->save();
	}

	private function updateRecord(){
        // Atualiza na Prova
		$prova = Prova::findOrFail($this->id);
        $prova->tipoEntidade = "C";
        $prova->tipoProva = "TIP";
        $prova->dataProva = $this->dataProva;
        $prova->entidade_id = $this->entidade_id;
        $prova->arquivo = $this->arquivo;
        $prova->observacoes = $this->observacoes;
        $prova->save();

        // Atualiza campos calculados
        $this->id = $prova->id;
        $this->tipoEntidade = $prova->tipoEntidade;
        $this->tipoProva = $prova->tipoProva;

        // Atualiza na Prova tip
		$tip = ProvaCaoTIPer_RealTable::findOrFail($this->id);
		$tip->id = $this->id;
        $tip->avaliador = $this->avaliador;
        $tip->executante = $this->executante;
        $tip->local = $this->local;
        $tip->seguimento = $this->seguimento;
        $tip->levantar = $this->levantar;
        $tip->submissao = $this->submissao;
        $tip->chamada = $this->chamada;
        $tip->buscaObj = $this->buscaObj;
        $tip->jornal = $this->jornal;
        $tip->chapeu = $this->chapeu;
        $tip->mesa = $this->mesa;
        $tip->dor = $this->dor;
        $tip->notaFinal = $this->notaFinal;
        $tip->save();
	}

	private function deleteRecord(){
        // Apaga do tip
		$tip = ProvaCaoTIPer_RealTable::findOrFail($this->id);		
		$tip->delete();

        // Apaga da prova		
		$prova = Prova::findOrFail($this->id);		
		$prova->delete();
	}
    
}
 


}
