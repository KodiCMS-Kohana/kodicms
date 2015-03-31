<?php

/*
 * Import translation helper into the global namespace.
 */
function __($string, array $values = NULL, $lang = 'en-us')
{
	return \KodiCMS\Core\I18n::__($string, $values, $lang);
};