<?php

//Verificar se ser� um grupo de rotas

Route::get('produtos', ['as' => 'produtos', function () {
return view("produto");
}]);