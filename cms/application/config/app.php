<?php defined('SYSPATH') or die('No direct access allowed.');

return [
	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/
	'debug' => FALSE,
	
	'profiling' => FALSE,
	
	/*
	|--------------------------------------------------------------------------
	| Autoloaded Modules
	|--------------------------------------------------------------------------
	|
	*/
	'modules' => [
		'core'			=> CMS_MODPATH . 'core',
		'users'			=> CMS_MODPATH . 'users',
		'logs'			=> CMS_MODPATH . 'logs',

		'auth'			=> MODPATH . 'auth',	// Basic authentication
		'orm'			=> MODPATH . 'orm',			// Object Relationship Mapping
		'minion'		=> MODPATH . 'minion',		// Minion
		'cache'			=> MODPATH . 'cache',		// Cache manager
		'database'		=> MODPATH . 'database',	// Database access
		'image'			=> MODPATH . 'image',

		'email'			=> CMS_MODPATH . 'email',
		'scheduler'		=> CMS_MODPATH . 'scheduler',
		'snippet'		=> CMS_MODPATH . 'snippet',
		'pages'			=> CMS_MODPATH . 'pages',		// Pages
		'page_parts'	=> CMS_MODPATH . 'page_parts',	// Page parts
		'tags'			=> CMS_MODPATH . 'tags',		// Tags
		'widget'		=> CMS_MODPATH . 'widget',
		'elfinder'		=> CMS_MODPATH . 'elfinder',
		'api'			=> CMS_MODPATH . 'api',
		'breadcrumbs'	=> CMS_MODPATH . 'breadcrumbs',
		'plugins'		=> CMS_MODPATH . 'plugins',
		'datasource'	=> CMS_MODPATH . 'datasource',
		'hybrid'		=> CMS_MODPATH . 'hybrid',
		'search'		=> CMS_MODPATH . 'search',
		'update'		=> CMS_MODPATH . 'update',
		'dashboard'		=> CMS_MODPATH . 'dashboard'
	]
];