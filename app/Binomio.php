<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binomio extends Model
{
    public function getNumMecanogAttribute(){
		$num = Militar::findOrFail($this->militar_id);
		return $num->num_mecanografico;
	}

	public function getNumMatriculaAttribute(){
		$numM = Cao::findOrFail($this->cao_id);
		return $numM->num_matricula;
	}
}
