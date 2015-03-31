<?php

if (PHP_SAPI != 'cli')
{
	define('IS_BACKEND', URL::match(ADMIN_DIR_NAME, Request::detect_uri()));
}

if (!defined('IS_BACKEND'))
{
	define('IS_BACKEND', FALSE);
}

if (!defined('SESSION_TYPE'))
{
	define('SESSION_TYPE', 'native');
}

// CMS defaults
define('ADMIN_URL',		BASE_URL . ADMIN_DIR_NAME . '/');
define('PLUGINS_URL',	BASE_URL . 'cms/plugins/');
define('PUBLIC_URL',	BASE_URL . 'public/');

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set(DEFAULT_TIMEZONE);

/**
 * Cookie Salt
 * @see  http://kohanaframework.org/3.3/guide/kohana/cookies
 * 
 * If you have not defined a cookie salt in your Cookie class then
 * uncomment the line below and define a preferrably long salt.
 */
Cookie::$salt = COOKIE_SALT;

/**
 * Set the default session type
 */
Session::$default = SESSION_TYPE;

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules($app->resolve('config')->load('app.modules'));

/**
 * Attach a database reader and writer to config.
 */
Kohana::$config->attach(new Config_Database);

Observer::notify('modules::after_load');

require APPPATH . DIRECTORY_SEPARATOR . 'http' . DIRECTORY_SEPARATOR . 'routes.php';

Observer::notify('system::init');
