<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
	/*public function getNumMecanogAttribute(){
		$num = Militar::findOrFail($this->entidade_id);
		return $num->num_mecanografico;
	}

	public function getNumMatriculaAttribute(){
		$numM = Cao::findOrFail($this->entidade_id);
		return $numM->num_matricula;
	}*/

    public function getNumIdentificacaoAttribute(){
    	if($this->tipoEntidade=="M"){
			$num = Militar::findOrFail($this->entidade_id);
			return $num->num_mecanografico;
    	}
		else if($this->tipoEntidade=="C"){
			$num = Cao::findOrFail($this->entidade_id);
			return $num->num_matricula;
		}
		/*else if($this->tipoEntidade=="B"){
			return $this->getNumMecanogAttribute() . " + " . $this->getNumMatriculaAttribute();
		}*/
	}

	 public function getNomeIdentificacaoAttribute(){
    	if($this->tipoEntidade=="M"){
			$nome = Militar::findOrFail($this->entidade_id);
			return $nome->nome;
    	} 
    	else if($this->tipoEntidade=="C"){
			$nome = Cao::findOrFail($this->entidade_id);
			return $nome->nomeCao;
		}
		/*else if($this->tipoEntidade=="B"){
			$nomeM = Militar::findOrFail($this->entidade_id);
			return $nomeM->numero;
		}*/
		
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

