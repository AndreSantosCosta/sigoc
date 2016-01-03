<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProvaBinomTANAT2 extends Model
{
       protected $table = 'view_provabinomiotanat2';


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
              $prova->tipoEntidade = "B";
              $prova->tipoProva = $this->"TANAT2";
              $prova->dataProva = $this->dataProva;
              $prova->entidade_id = $this->entidade_id;
              $prova->arquivo = $this->arquivo;
              $prova->observacoes = $this->observacoes;
              $prova->save();

        // Atualiza campos calculados
              $this->id = $prova->id;
              $this->tipoEntidade = $prova->tipoEntidade;
              $this->tipoProva = $prova->tipoProva;

        // Insere na Prova tanat2 (na tabela real - tanat2)
              $tanat2 = new ProvaBinomioTANAT2_RealTable();
              $tanat2->id = $this->id;
              $tanat2->avaliador = $this->avaliador;
              $tanat2->local = $this->local;
              $tanat2->atitute = $this->atitute;
              $tanat2->memoriaMuscular = $this->memoriaMuscular;
              $tanat2->agilidadeConfianca = $this->agilidadeConfianca;
              $tanat2->rPisosSons = $this->rPisosSons;
              $tanat2->rAproxVulto = $this->rAproxVulto;
              $tanat2->rDisparos = $this->rDisparos;
              $tanat2->instPresaPerist = $this->instPresaPerist;
              $tanat2->intsBusca = $this->intsBusca;
              $tanat2->marcPessoasObj = $this->marcPessoasObj;
              $tanat2->inicPistas = $this->inicPistas;
              $tanat2->ladrido = $this->ladrido;
              $tanat2->instDefesa = $this->instDefesa;
              $tanat2->tecnMordida = $this->tecnMordida;
              $tanat2->qualidMordida = $this->qualidMordida;
              $tanat2->CombatLuta = $this->CombatLuta;
              $tanat2->notaFinal = $this->notaFinal;
              
              $tanat2->save();
      }

      private function updateRecord(){
        // Atualiza na Prova
       $prova = Prova::findOrFail($this->id);
       $prova->tipoEntidade = "B";
       $prova->tipoProva = "TANAT2";
       $prova->dataProva = $this->dataProva;
       $prova->entidade_id = $this->entidade_id;
       $prova->arquivo = $this->arquivo;
       $prova->observacoes = $this->observacoes;
       $prova->save();

        // Atualiza campos calculados
       $this->id = $prova->id;
       $this->tipoEntidade = $prova->tipoEntidade;
       $this->tipoProva = $prova->tipoProva;

        // Atualiza na Prova tanat2
       $tanat2 = ProvaBinomioTANAT2_RealTable::findOrFail($this->id);
       $tanat2->id = $this->id;
       $tanat2->avaliador = $this->avaliador;
       $tanat2->local = $this->local;
       $tanat2->atitute = $this->atitute;
       $tanat2->memoriaMuscular = $this->memoriaMuscular;
       $tanat2->agilidadeConfianca = $this->agilidadeConfianca;
       $tanat2->rPisosSons = $this->rPisosSons;
       $tanat2->rAproxVulto = $this->rAproxVulto;
       $tanat2->rDisparos = $this->rDisparos;
       $tanat2->instPresaPerist = $this->instPresaPerist;
       $tanat2->intsBusca = $this->intsBusca;
       $tanat2->marcPessoasObj = $this->marcPessoasObj;
       $tanat2->inicPistas = $this->inicPistas;
       $tanat2->ladrido = $this->ladrido;
       $tanat2->instDefesa = $this->instDefesa;
       $tanat2->tecnMordida = $this->tecnMordida;
       $tanat2->qualidMordida = $this->qualidMordida;
       $tanat2->CombatLuta = $this->CombatLuta;
       $tanat2->notaFinal = $this->notaFinal;
       
       $tanat2->save();
}

private function deleteRecord(){
        // Apaga do Militar
	$tanat2 = ProvaBinomioTANAT2_RealTable::findOrFail($this->id);		
	$tanat2->delete();

        // Apaga da Entidade		
	$prova = Prova::findOrFail($this->id);		
	$prova->delete();
}

}



