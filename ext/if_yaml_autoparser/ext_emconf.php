<?php

########################################################################
# Extension Manager/Repository config file for ext "if_yaml_autoparser".
#
# Auto generated 24-10-2010 23:29
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'if_yaml_autoparser',
	'description' => 'extends if_yaml for autoparser usage',
	'category' => 'templates',
	'shy' => 0,
	'version' => '1.4.0',
	'dependencies' => 'rlmp_tmplselector,automaketemplate,kb_nescefe,if_yaml',
	'conflicts' => 'if_yaml_jetts,if_yaml_templavoila,templavoila',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Ralf-Rene Schroeder',
	'author_email' => 'if_yaml@image-format.eu',
	'author_company' => 'image[FORMAT]',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'rlmp_tmplselector' => '',
			'automaketemplate' => '',
			'kb_nescefe' => '',
			'if_yaml' => '1.4.0-',
		),
		'conflicts' => array(
			'if_yaml_jetts' => '',
			'if_yaml_templavoila' => '',
			'templavoila' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"769b";s:12:"ext_icon.gif";s:4:"dcf5";s:17:"ext_localconf.php";s:4:"e40e";s:14:"ext_tables.php";s:4:"e40e";s:8:"info.txt";s:4:"1c45";s:16:"locallang_db.xml";s:4:"6d13";}',
	'suggests' => array(
	),
);

?>