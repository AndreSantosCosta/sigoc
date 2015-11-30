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

Route::resource("prova_militar_p_a_fisicas","ProvaMilitarPAFisicaController");

Route::resource("prova_militar_teoricas","ProvaMilitarTeoricaController");

Route::resource("prova_militar_tiros","ProvaMilitarTiroController");

Route::resource("provas_geral_binomios","ProvasGeralBinomioController");

Route::resource("prova_binom_t_a_n_a_t2s","ProvaBinomTANAT2Controller");

Route::resource("prova_cao_m_p_morves","ProvaCaoMPMorfController");

Route::resource("prova_cao_t_i_pers","ProvaCaoTIPerController");

Route::resource("prova_cao_t_a_n_a_t1s","ProvaCaoTANAT1Controller");

Route::resource("provas","ProvaController");