<?php

//Verificar se sera um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);

//ADMIN

//Listar os produtos cadastrados
Route::get('admin/produtos', [
	'as'    => 'listProduct',
	'uses'  => 'ProductController@index'
	]
);
//Form Adicionar produtos
Route::get('admin/produtos/create', [
	'as'    => 'addProduto',
	'uses'  => 'ProductController@create'
	]
);
//Envio de produtos pro BD
Route::post('admin/produtos/store', [
		'as'    => 'CadastraProduto',
		'uses'  => 'ProductController@store'
	]
);
//Deletar um produto do BD
Route::get('admin/produtos/{id}/destroy', [
	'as'    => 'ExcluirProduto',
	'uses'  => 'ProductController@destroy'
]);
//Editar -> trazer form
Route::get('admin/produtos/{id}/edit', [
	'as'    => 'EditaProduto',
	'uses'  => 'ProductController@edit'
	]
);
//Editar -> fazer alteraçao dos dados no BD
Route::put('admin/produtos/{id}/update', [
	'as'    => 'AtualizaProduto',
	'uses'  => 'ProductController@update'
	]
);