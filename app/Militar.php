<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Militar extends Model
{
	protected $table = 'view_militars';

	public function getNomePostoAttribute(){
		$posto = Posto::findOrFail($this->posto_id);
		return $posto->descricao;
	}

	public function getNomeUnidadeAttribute(){
		$unidade = Unidade::findOrFail($this->unidade_id);
		return $unidade->descricao;
	}

	public function getNomeMotivoInativacaoAttribute(){
    if(is_null($this->motivo_inativo)){
      return "";
    }
		$militarotivoInatMilitar = MotivoInativoMilitar::findOrFail($this->motivo_inativo);

		return $militarotivoInatMilitar->descricao;
	}

	private function calculateNome(){
		return $this->getNomePostoAttribute() . " " . $this->apelido;

	}

  public function getNomeInativoAttribute(){
    if($this->inativo ==0){
      return "Ativo";
    }else{
      return "Inativo";
    }
  }

  public function getDescSexoAttribute(){
   return Enumeraveis::getSexoFromKey($this->sexo);
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
 $entidade->tipoEntidade = "M";
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

        // Insere no Militar (na tabela real - militars)
 $militar = new Militar_RealTable();
 $militar->id = $this->id;
 $militar->num_mecanografico = $this->num_mecanografico;
 $militar->user_id = $this->user_id;
 $militar->posto_id = $this->posto_id;
 $militar->apelido = $this->apelido;
 $militar->nomeProprio = $this->nomeProprio;
 $militar->data_nascim = $this->data_nascim;
 $militar->grupo_sang = $this->grupo_sang;
 $militar->sexo = $this->sexo;
 $militar->motivo_inativo = $this->motivo_inativo;
 $militar->save();
}

private function updateRecord(){
        // Atualiza na Entidade
 $entidade = Entidade::findOrFail($this->id);
 $entidade->tipoEntidade = "M";
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

        // Atualiza no Militar
 $militar = Militar_RealTable::findOrFail($this->id);
 $militar->id = $this->id;
 $militar->num_mecanografico = $this->num_mecanografico;
 $militar->user_id = $this->user_id;
 $militar->posto_id = $this->posto_id;
 $militar->apelido = $this->apelido;
 $militar->nomeProprio = $this->nomeProprio;
 $militar->data_nascim = $this->data_nascim;
 $militar->grupo_sang = $this->grupo_sang;
 $militar->sexo = $this->sexo;
 $militar->motivo_inativo = $this->motivo_inativo;
 $militar->save();
}

private function deleteRecord(){
        // Apaga do Militar
  $militar = Militar_RealTable::findOrFail($this->id);		
  $militar->delete();

        // Apaga da Entidade		
  $entidade = Entidade::findOrFail($this->id);		
  $entidade->delete();
}

}
