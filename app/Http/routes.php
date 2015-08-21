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
require_once __DIR__.'/rotas/admin.php';
require_once __DIR__.'/rotas/user.php';
require_once __DIR__.'/rotas/produto.php';

//poder receber os dados dos produtos
Route::any('/', [
    'as'    => 'paginaInicial',
	'uses'  => 'HomeController@index'
	]
);

//Route::get('search', array(
//	'as'    =>  'search',
//	'uses'  =>  'SearchController@index'
//));
//Route::post('search', array(
//	'as'    =>  'BuscaSearch',
//	'uses'  =>  'SearchController@store'
//));

Route::get('contato', ['as' => 'contato', 'uses' => 'ContatoController@index']);
Route::post('enviar', ['as' => 'enviaContato', 'uses' => 'ContatoController@sendMail']);

Route::get('quemsomos', ['as' => 'quemSomos', function () {
    return view("static.quemSomos");
}]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', ['as' => 'Logout', 'uses' => 'Auth\AuthController@getLogout']); // funciona mesmo!