<?php

Route::get('cadastrarusuario', ['as' => 'cadastrarUsuario', 'uses' => 'UserController@create']);
Route::post('ceprequest', ['as' => 'requisicaoCEP', 'uses' => 'UserController@cepFill']);
Route::post('sendsignin', ['as' => 'enviaCadastro', 'uses' => 'UserController@store']);
Route::post('disponibilidadeemail', ['as' => 'emailDisponivel', 'uses' => 'UserController@checkEmail']);
Route::post('disponibilidadecpf', ['as' => 'cpfDisponivel', 'uses' => 'UserController@checkCPF']);