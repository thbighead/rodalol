<?php

//Verificar se será um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);