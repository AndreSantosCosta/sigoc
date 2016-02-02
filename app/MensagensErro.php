<?php

namespace App;


class MensagensErro
{

	public function rules()
	{
		return [
		'email' => 'required|email'
		'password' => 'required|min:8'
		'text' => 'required'
		'date' => 'required'

		];
	}

	$messages = [
	'required' => 'The :attribute field is required.',
	'required|email' => 'We need to know your e-mail address!',

	];


}