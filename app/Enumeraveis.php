<?php

namespace App;


class Enumeraveis
{
	public static function getSexoList(){
		return array('F'=>'Feminino', 'M'=>'Masculino');
	}

	public static function getSexoFromKey($chave){
		return Enumeraveis::getSexoList()[$chave];
	}

	public static function getGrupoSangList(){
		return array('A+'=>'A+', 'B-'=>'B-');
	}
}