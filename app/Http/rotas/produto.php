<?php

Route::get('produtos', [
	'as' => 'produtos',
	'uses' => 'ProductController@produto'
	]
);

//ADMIN
//com validacao numerica de ID
Route::group(['prefix'=>'admin/produtos', 'where' => ['id' => '[0-9]+']], function() {
	//Listar os produtos cadastrados
	Route::get('', [
		'as'    => 'ListProduto',
		'uses'  => 'ProductController@index'
		]
	);
	//Form Adicionar produtos
	Route::get('create', [
		'as'    => 'AddProduto',
		'uses'  => 'ProductController@create'
		]
	);
	//Envio de produtos pro BD
	Route::post('store', [
			'as'    => 'CadastraProduto',
			'uses'  => 'ProductController@store'
		]
	);
	//Deletar um produto do BD
	Route::get('{id}/destroy', [
		'as'    => 'ExcluirProduto',
		'uses'  => 'ProductController@destroy'
	]);
	//Editar -> trazer form
	Route::get('edit/{id}', [
		'as'    => 'EditaProduto',
		'uses'  => 'ProductController@edit'
		]
	);
	//Editar -> fazer alteraçao dos dados no BD
	Route::put('update/{id}', [
		'as'    => 'AtualizaProduto',
		'uses'  => 'ProductController@update'
		]
	);
});
