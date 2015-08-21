<?php

//SLIDESHOW
Route::group(['prefix'=>'admin/slideshow', 'where' => ['id' => '[0-9]+']], function() {
//listar slideshow
Route::get('', [
'as'    => 'ListSlideshow',
'uses'  => 'SlideshowController@index'
]
);
//Adicionar imagem
Route::get('create', [
'as'    => 'AddSlideshow',
'uses'  => 'SlideshowController@create'
]
);
//envio da imagem
Route::post('store', [
'as'    => 'CadastraSlideshow',
'uses'  => 'SlideshowController@store'
]
);
//deletar uma imagem
Route::get('{id}/destroy', [
'as'    => 'ExcluirSlideshow',
'uses'  => 'SlideshowController@destroy'
]
);
//editar -> trazer form
Route::get('edit/{id}', [
'as'    => 'ListSlideshow',
'uses'  => 'SlideshowController@edit'
]
);
//editar -> fazer alteração dos dados no BD
Route::put('update/{id}', [
'as'    => 'ListSlideshow',
'uses'  => 'SlideshowController@update'
]
);
});