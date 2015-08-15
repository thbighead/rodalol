<?php

Route::get('cadastrarusuario', ['as' => 'cadastrarUsuario', 'uses' => 'UserController@create']);
Route::post('cadastrarusuario', ['as' => 'requisicaoCEP', 'uses' => 'UserController@cepFill']);
Route::put('cadastrarusuario', ['as' => 'enviaCadastro', 'uses' => 'UserController@store']);