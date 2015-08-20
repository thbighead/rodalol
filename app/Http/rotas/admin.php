<?php

Route::group(['middleware' => 'admin'], function() {
	Route::get('admin', [
			'as'    => 'paginaAdmin',
			'uses'  => 'AdminController@index'
		]
	);
});