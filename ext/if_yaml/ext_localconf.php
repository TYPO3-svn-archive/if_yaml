<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
  $_EXTCONF = unserialize($_EXTCONF); 
if ((TYPO3_MODE == 'BE'))
{	

	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['yamlCore']=array(
		'url' 		=>$_EXTCONF['if_yamlCore_url']
		,'license'=>  'http://www.yaml.de/de/lizenz/lizenzbedingungen.html'
		,'path'		=> 	'../../../fileadmin/templates/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['additionalFiles']=array(
		'url' 		=>$_EXTCONF['if_additional_url']
		,'license'=>  ''
		,'path'		=> 	'../../../fileadmin/templates/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['if_ready2go']=array(
		'url' 		=>$_EXTCONF['if_ready2go_url']
		,'license'=>  'http://if-20.com/index.php?id=26'
		,'path'		=> 	'../../../fileadmin/templates/layouts/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['if_layout_A']=array(
		'url' 		=>$_EXTCONF['if_layout_A_url']
		,'license'=>  'http://if-20.com/index.php?id=26'
		,'path'		=> 	'../../../fileadmin/templates/layouts/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['if_layout_B']=array(
		'url' 		=>$_EXTCONF['if_layout_B_url']
		,'license'=>  'http://if-20.com/index.php?id=26'
		,'path'		=> 	'../../../fileadmin/templates/layouts/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['if_layout_C']=array(
		'url' 		=>$_EXTCONF['if_layout_C_url']
		,'license'=>  'http://if-20.com/index.php?id=26'
		,'path'		=> 	'../../../fileadmin/templates/layouts/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
	$TYPO3_CONF_VARS['EXTCONF']['package_manager']['packages'][$_EXTKEY]['if_layout_D']=array(
		'url' 		=>$_EXTCONF['if_layout_D_url_url']
		,'license'=>  'http://if-20.com/index.php?id=26'
		,'path'		=> 	'../../../fileadmin/templates/layouts/'
		,'files'	=>	''
		,'pathToRemove' => ''
	);
}

?>