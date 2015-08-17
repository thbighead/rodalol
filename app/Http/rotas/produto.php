<?php

//Verificar se sera um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);

//Listar os produtos cadastrados
Route::get('admin/produtos', [
	'as'    => 'listProduct',
	'uses'  => 'ProductController@index'
	]
);
//
//Route::get('lista/create', ['as' => 'addProducts', function () {
//	return view("products.create");
//}]);