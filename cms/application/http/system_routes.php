<?php

Route::set('error', 'system/error(/<code>(/<message>))', [
	'message' => '.*',
	'code' => '[0-9]+'
])
	->defaults([
		'directory' => 'system',
		'controller' => 'error',
		'action' => 'index'
	]);

Route::set('admin_media', 'cms/media/<file>.<ext>', [
	'file' => '.*',
	'ext' => 'css|js|png|jpg|gif|otf|eot|svg|ttf|woff'
])
	->defaults([
		'directory' => 'system',
		'controller' => 'media',
		'action' => 'media',
	]);
