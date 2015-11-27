<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Contao',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'j_cookie.law'        => 'system/modules/j_eucookielaw/templates',
));
