<?php

Route::group(['middleware' => 'AdminMiddleware'], function() {

});

Route::get('admin', [
		'as'    => 'paginaAdmin',
		'uses'  => 'AdminController@index'
	]
);