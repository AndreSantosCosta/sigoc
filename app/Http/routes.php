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
    return view('pages.index');
}]);

Route::get('login', ['as' => 'login', function () {
	return view('pages.login');
}]);


Route::resource("militars","MilitarController");

Route::resource("caos","CaoController");

Route::resource("binomios","BinomioController");

Route::resource("entidades","EntidadeController");

Route::resource("prova_militar_p_a_fisicas","ProvaMilitarPAFisicaController");

Route::resource("prova_militar_teoricas","ProvaMilitarTeoricaController");

Route::resource("prova_militar_tiros","ProvaMilitarTiroController");

Route::resource("provas_geral_binomios","ProvasGeralBinomioController");

Route::resource("prova_binom_t_a_n_a_t2s","ProvaBinomTANAT2Controller");

Route::resource("prova_cao_m_p_morves","ProvaCaoMPMorfController");

Route::resource("prova_cao_t_i_pers","ProvaCaoTIPerController");

Route::resource("prova_cao_t_a_n_a_t1s","ProvaCaoTANAT1Controller");

Route::resource("provas","ProvaController");

Route::get('provas/{tipoEntidade}/{id}', ['as' => 'provasPorEntidade', 'uses' => 'ProvaController@provasEntidade']);

Route::get('prova/{id}', ['as' => 'prova', 'uses' => 'ProvaController@prova']);

Route::get('editarProva/{id}', ['as' => 'editarProva', 'uses' => 'ProvaController@editarProva']);

Route::get('criarProva/{tipoEntidade}/{tipoProva}/{id}', ['as' => 'criarProva', 'uses' => 'ProvaController@criarProva']);

Route::get('goEntidade/{id}', ['as' => 'goEntidade', 'uses' => 'EntidadeController@goEntidade']);



Route::resource("users","UserController");



// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::post('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);

Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);


// Password reset link request routes...
Route::get('password/email', ['as' => 'email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'email', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', ['as' => 'reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'reset', 'uses' => 'Auth\PasswordController@postReset']);


