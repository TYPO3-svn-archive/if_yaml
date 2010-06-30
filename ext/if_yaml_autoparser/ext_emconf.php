<?php

########################################################################
# Extension Manager/Repository config file for ext "if_yaml_autoparser".
#
# Auto generated 19-05-2010 22:51
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'if_yaml_autoparser',
	'description' => 'extends if_yaml for autoparser usage',
	'category' => 'templates',
	'author' => 'Ralf-Rene Schroeder',
	'author_email' => 'if_yaml@image-format.eu',
	'author_company' => 'image[FORMAT]',
	'shy' => 0,
	'dependencies' => 'rlmp_tmplselector,automaketemplate,kb_nescefe,if_yaml',
	'conflicts' => 'if_yaml_jetts,if_yaml_templavoila,templavoila',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'rlmp_tmplselector' => '',
			'automaketemplate' => '',
			'kb_nescefe' => '',
			'if_yaml' => '1.2.0-',
		),
		'conflicts' => array(
			'if_yaml_jetts' => '',
			'if_yaml_templavoila' => '',
			'templavoila' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"e7ef";s:12:"ext_icon.gif";s:4:"dcf5";s:17:"ext_localconf.php";s:4:"e40e";s:14:"ext_tables.php";s:4:"e40e";s:8:"info.txt";s:4:"1c45";s:16:"locallang_db.xml";s:4:"6d13";}',
	'suggests' => array(
	),
);

?>