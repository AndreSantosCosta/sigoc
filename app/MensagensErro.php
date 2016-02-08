<?php

namespace App;


class MensagensErro
{

	protected $fillable = [
        'text', 'date',
    ];

	public function rules()
	{
		return [
		'text' => 'required'
		'date' => 'required'

		];
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'date' => 'required'
        ]);
    }



}