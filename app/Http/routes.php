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
    return view('index');
}]);

Route::get('index', function () {
    return view::make('');
});

Route::get('teste', function () {
    return "Ola";
});

Route::resource("militars","MilitarController");

Route::resource("caos","CaoController");

Route::resource("binomios","BinomioController");