<?php

//Crud de slideshow
require_once __DIR__.'/slideshow.php';

Route::group(['middleware' => 'admin'], function() {
	Route::get('admin', [
			'as'    => 'paginaAdmin',
			'uses'  => 'AdminController@index'
		]
	);
});

