<?php

Route::set('user', ADMIN_DIR_NAME . '/<action>(?next=<next_url>)', [
	'action' => '(login|logout|forgot)',
])
	->defaults([
		'controller' => 'login',
	]);

Route::set('templates', ADMIN_DIR_NAME . '/(<controller>(/<action>(/<id>)))', [
	'controller' => '(layout|snippet)',
	'id' => '.*'
])
	->defaults([
		'controller' => 'index',
		'action' => 'index',
	]);

Route::set('downloader', '(' . ADMIN_DIR_NAME . '/)download/<path>', [
	'path' => '.*'
])
	->defaults([
		'directory' => 'system',
		'controller' => 'download',
		'action' => 'index',
	]);

Route::set('backend', ADMIN_DIR_NAME . '(/<controller>(/<action>(/<id>)))')
	->defaults([
		'controller' => 'dashboard',
		'action' => 'index',
	]);

Route::set('system', '<directory>-<controller>-<action>(/<id>)', [
	'directory' => '(ajax|action|form)',
	'controller' => '[A-Za-z\_]+',
	'action' => '[A-Za-z\_]+',
	'id' => '.+',
]);

Route::set('default', '(<page>)(<suffix>)', [
	'page' => '.*',
	'suffix' => URL_SUFFIX
])
	->defaults([
		'controller' => 'front',
		'action' => 'index',
		'suffix' => URL_SUFFIX
	]);