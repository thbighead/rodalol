<?php

//Verificar se ser� um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);

Route::get('lista', ['as' => 'adminProducts', function () {
	return view("products.index");
}]);