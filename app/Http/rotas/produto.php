<?php

//Verificar se ser� um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);

//Route::get('products', ['as' => 'adminProducts', function () {
//	return view("products.index");
//}]);
//
//Route::get('lista/create', ['as' => 'addProducts', function () {
//	return view("products.create");
//}]);



//rota teste
Route::get('test', ['as' => 'testProduct', function () {
	return view('test');
}]);