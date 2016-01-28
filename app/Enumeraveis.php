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

	public static function getSexoCaoList(){
		return array('F'=>'Fêmea', 'M'=>'Macho');
	}

	public static function getSexoCaoFromKey($chave){
		return Enumeraveis::getSexoCaoList()[$chave];
	}

	public static function getGrupoSangList(){
		return array('A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+', 'B-'=>'B-', 'O+'=>'O+', 'O-'=>'O-', 'AB+'=>'AB+', 'AB-'=>'AB-');
	}

	public static function getEntidadeList(){
		return array('M'=>'Militar', 'C'=>'Cão', 'B'=>'Binómio');
	}

	public static function getEntidadeFromKey($chave){
		return Enumeraveis::getEntidadeList()[$chave];
	}

	public static function getTiposProvasList(){
		return array('Tiro'=>'Prova Militar Tiro', 'TIP'=>'Prova Cão TIPersonalidade', 'TANAT2'=>'Prova Binómio TANAT2');
	}

	public static function getTiposProvasFromKey($chave){
		return Enumeraveis::getTiposProvasList()[$chave];
	}

	public static function getTiposMilitarList(){
		return array('A'=>'Administrador', 'G'=>'Gestor', 'U'=>'Utilizador');
	}

	public static function getTiposFromKey($chave){
		return Enumeraveis::getTiposMilitarList()[$chave];
	}

	
}