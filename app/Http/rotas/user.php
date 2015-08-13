<?php

Route::get('cadastrarusuario', ['as' => 'cadastrarUsuario', 'uses' => 'UserController@create']);
Route::post('cadastrarusuario', ['as' => 'enviaCadastro', 'uses' => 'UserController@store']);