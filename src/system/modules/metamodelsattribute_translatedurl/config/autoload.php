<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Metamodelsattribute_translatedurl
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModels\Attribute\TranslatedUrl\TranslatedUrl'     => 'system/modules/metamodelsattribute_translatedurl/MetaModels/Attribute/TranslatedUrl/TranslatedUrl.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_translatedurl' => 'system/modules/metamodelsattribute_translatedurl/templates',
));
