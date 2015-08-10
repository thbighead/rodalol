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

Route::any('/', ['as' => 'paginaInicial', function () {
    return view("home");
}]);

Route::get('contato', ['as' => 'contato', function () {
    return view("static.contato");
}]);

Route::get('quemsomos', ['as' => 'quemSomos', function () {
    return view("static.quemSomos");
}]);