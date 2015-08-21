<?php

//TEXT
Route::group(['prefix'=>'admin/text', 'where' => ['id' => '[0-9]+']], function() {
//listar slideshow
	Route::get('', [
			'as'    => 'ListText',
			'uses'  => 'TextController@index'
		]
	);
//Adicionar imagem
	Route::get('create', [
			'as'    => 'AddText',
			'uses'  => 'TextController@create'
		]
	);
//envio da imagem
	Route::post('store', [
			'as'    => 'CadastraText',
			'uses'  => 'TextController@store'
		]
	);
//deletar uma imagem
	Route::get('{id}/destroy', [
			'as'    => 'ExcluirText',
			'uses'  => 'TextController@destroy'
		]
	);
//editar -> trazer form
	Route::get('edit/{id}', [
			'as'    => 'ListText',
			'uses'  => 'TextController@edit'
		]
	);
//editar -> fazer alteração dos dados no BD
	Route::put('update/{id}', [
			'as'    => 'ListText',
			'uses'  => 'TextController@update'
		]
	);
});