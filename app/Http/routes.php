<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('layout');
}]);

Route::get('login', ['as' => 'login', function () {
	return view('pages.login');
}]);

Route::get('index', ['as' => 'index', function () {
	return view('pages.index');
}]);



Route::resource("militars","MilitarController");

Route::resource("caos","CaoController");

Route::resource("binomios","BinomioController");

Route::resource("provas","ProvaController");

Route::resource("prova_tiros","ProvaTiroController"); 