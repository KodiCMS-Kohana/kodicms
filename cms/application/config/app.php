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
		// KodiCMS
		'core'			=> CMS_MODPATH . 'core',
		'users'			=> CMS_MODPATH . 'users',
		'logs'			=> CMS_MODPATH . 'logs',
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
		'dashboard'		=> CMS_MODPATH . 'dashboard',

		// Kohana
		'auth'			=> MODPATH . 'kohana-auth',		// Basic authentication
		'orm'			=> MODPATH . 'kohana-orm',			// Object Relationship Mapping
		'minion'		=> MODPATH . 'kohana-minion',		// Minion
		'cache'			=> MODPATH . 'kohana-cache',		// Cache manager
		'database'		=> MODPATH . 'kohana-db',	// Database access
		'image'			=> MODPATH . 'kohana-image',
	],

	'aliases' => [
		// KodiCMS classes
		'Assets'			=> '\KodiCMS\Core\Assets\Core',
		'Request' 			=> '\KodiCMS\Core\Request',
		'Kohana' 			=> '\KodiCMS\Core\Core',
		'I18n' 				=> '\KodiCMS\Core\I18n',
		'URL' 				=> '\KodiCMS\Core\URL',
		'Config' 			=> '\KodiCMS\Core\Config',
		'Cache' 			=> '\KodiCMS\Core\Cache',
		'ORM' 				=> '\KodiCMS\Core\ORM',
		'View' 				=> '\KodiCMS\Core\View',
		'Form' 				=> '\KodiCMS\Core\Form',
		'HTML' 				=> '\KodiCMS\Core\HTML',
		'Text' 				=> '\KodiCMS\Core\Text',
		'Upload' 			=> '\KodiCMS\Core\Upload',
		'Validation'		=> '\KodiCMS\Core\Validation',
		'WYSIWYG' 			=> '\KodiCMS\Core\WYSIWYG',
		'Context' 			=> '\KodiCMS\Core\Context',
		'UI'				=> '\KodiCMS\Core\UI',
		'HTTP_Exception' 	=> '\KodiCMS\Core\HTTP\Exception',

		// Users
		'Auth'				=> '\KodiCMS\Users\Auth',
		'ACL'				=> '\KodiCMS\Users\ACL',

		// Kohana classes
		'Arr' 				=> '\Kohana\Core\Arr',
//		'Config' 			=> '\Kohana\Core\Config',
		'Cookie' 			=> '\Kohana\Core\Cookie',
		'Date' 				=> '\Kohana\Core\Date',
		'Debug' 			=> '\Kohana\Core\Debug',
		'Encrypt'			=> '\Kohana\Core\Encrypt',
		'File' 				=> '\Kohana\Core\File',
//		'Form' 				=> '\Kohana\Core\Form',
//		'HTML' 				=> '\Kohana\Core\HTML',
		'HTTP' 				=> '\Kohana\Core\HTTP',
//		'I18n' 				=> '\Kohana\Core\I18n',
		'Inflector' 		=> '\Kohana\Core\Inflector',
		'Model' 			=> '\Kohana\Core\Model',
		'Num' 				=> '\Kohana\Core\Num',
		'Profiler' 			=> '\Kohana\Core\Profiler',
//		'Request' 			=> '\Kohana\Core\Request',
		'Response' 			=> '\Kohana\Core\Response',
		'Route'				=> '\Kohana\Core\Route',
		'Security' 			=> '\Kohana\Core\Security',
		'Session' 			=> '\Kohana\Core\Session',
//		'Text' 				=> '\Kohana\Core\Text',
//		'Upload' 			=> '\Kohana\Core\Upload',
//		'URL' 				=> '\Kohana\Core\URL',
		'UTF8' 				=> '\Kohana\Core\UTF8',
		'Valid' 			=> '\Kohana\Core\Valid',
//		'Validation'		=> '\Kohana\Core\Validation',
		'View' 				=> '\Kohana\Core\View',
		'Kohana_Exception' 	=> '\KodiCMS\Core\Exception',
	]
];