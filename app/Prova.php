<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
	public function getNumMecanogAttribute(){
		$num = Militar::findOrFail($this->entidade_id);
		return $num->num_mecanografico;
	}

	public function getNumMatriculaAttribute(){
		$numM = Cao::findOrFail($this->entidade_id);
		return $numM->cao_id;
	} 

    public function getNumIdentificacaoAttribute(){
    	if($this->tipoEntidade=="M"){
			$num = Militar::findOrFail($this->entidade_id);
			return $num->num_mecanografico;
    	}
		if($this->tipoEntidade=="C"){
			$num = Cao::findOrFail($this->entidade_id);
			return $num->num_matricula;
		}
		if($this->tipoEntidade=="B"){
			$num = Entidade::findOrFail($this->entidade_id);
			return $num->numero;
		}
	}

	 public function getNomeIdentificacaoAttribute(){
    	if($this->tipoEntidade=="M"){
			$nome = Militar::findOrFail($this->entidade_id);
			return $nome->nome;
    	} 
    	if($this->tipoEntidade=="C"){
			$nome = Cao::findOrFail($this->entidade_id);
			return $nome->nomeCao;
		}
		if($this->tipoEntidade=="B"){
			$nome = Entidade::findOrFail($this->entidade_id);
			return $nome->nome;
		}
	}
	
	public function getNomeEntidadeAttribute(){

		if($this->tipoEntidade=="M"){
			return "Militar";
		}
		else if($this->tipoEntidade=="C"){
			return "Cao";
		}
		else if($this->tipoEntidade=="B"){
			return "Binomio";
		}	
	}


}

