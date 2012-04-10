<?php

########################################################################
# Extension Manager/Repository config file for ext "additional_scheduler".
#
# Auto generated 29-02-2012 22:17
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Useful tasks in scheduler module',
	'description' => 'Useful tasks in the scheduler module : full backup, update translations, exec SH script with reports...',
	'category' => 'misc',
	'author' => 'CERDAN Yohann',
	'author_email' => 'cerdanyohann@yahoo.fr',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.5',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.3.0-4.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:9:"ChangeLog";s:4:"a4a1";s:16:"ext_autoload.php";s:4:"5d7d";s:12:"ext_icon.gif";s:4:"b5e1";s:17:"ext_localconf.php";s:4:"e57d";s:13:"locallang.xml";s:4:"8118";s:46:"classes/class.tx_additionalscheduler_utils.php";s:4:"e20f";s:14:"doc/manual.sxw";s:4:"fdf3";s:24:"sh/save_typo3_website.sh";s:4:"eca6";s:49:"tasks/class.tx_additionalscheduler_clearcache.php";s:4:"3ed5";s:56:"tasks/class.tx_additionalscheduler_clearcache_fields.php";s:4:"55c5";s:43:"tasks/class.tx_additionalscheduler_exec.php";s:4:"8185";s:50:"tasks/class.tx_additionalscheduler_exec_fields.php";s:4:"5b3d";s:50:"tasks/class.tx_additionalscheduler_savewebsite.php";s:4:"f2d1";s:57:"tasks/class.tx_additionalscheduler_savewebsite_fields.php";s:4:"5256";s:56:"tasks/class.tx_additionalscheduler_translationupdate.php";s:4:"16ec";s:63:"tasks/class.tx_additionalscheduler_translationupdate_fields.php";s:4:"7003";}',
	'suggests' => array(
	),
);

?>