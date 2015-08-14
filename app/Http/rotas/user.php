<?php

Route::get('cadastrarusuario', ['as' => 'cadastrarUsuario', 'uses' => 'UserController@create']);
Route::put('cadastrarusuario', ['as' => 'enviaCadastro', 'uses' => 'UserController@store']);