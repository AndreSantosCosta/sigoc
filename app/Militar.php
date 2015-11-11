<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{

	public function getNomePostoAttribute(){
		$posto = Posto::findOrFail($this->posto_id);
		return $posto->descricao;
	}

}
