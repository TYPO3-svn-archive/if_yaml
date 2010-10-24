<?php

########################################################################
# Extension Manager/Repository config file for ext "if_yaml".
#
# Auto generated 24-10-2010 23:29
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'if20 Templates for TYPO3',
	'description' => 'TypoScript library for TYPO3, Template with tons of examples.',
	'category' => 'templates',
	'shy' => 0,
	'version' => '1.4.0',
	'dependencies' => 'css_styled_content,package_manager',
	'conflicts' => 'db_tap,db_yamltv,db_ttv',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Ralf-Rene Schroeder',
	'author_email' => 'if_yaml@image-format.eu',
	'author_company' => 'image[FORMAT]',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-4.9.9',
			'css_styled_content' => '0.3.1-',
			'package_manager' => '0.8.0-',
		),
		'conflicts' => array(
			'db_tap' => '',
			'db_yamltv' => '',
			'db_ttv' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"2265";s:21:"ext_conf_template.txt";s:4:"da57";s:12:"ext_icon.gif";s:4:"dcf5";s:17:"ext_localconf.php";s:4:"6f09";s:14:"ext_tables.php";s:4:"0708";s:16:"locallang_db.xml";s:4:"d8d1";s:14:"doc/manual.sxw";s:4:"0cb9";s:24:"pi1/static/constants.txt";s:4:"ee9a";s:20:"pi1/static/setup.txt";s:4:"9f55";}',
	'suggests' => array(
	),
);

?>