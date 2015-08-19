<?php

Route::get('admin', [
		'as'    => 'paginaAdmin',
		'uses'  => 'AdminController@index'
	]
);