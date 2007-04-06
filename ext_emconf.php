<?php

########################################################################
# Extension Manager/Repository config file for ext: "wheelchair"
#
# Auto generated 08-03-2007 11:28
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Wheelchair',
	'description' => 'This extension adds a checkbox "wheelchair" to the front-end user table, indicating whether a person is using a wheelchair. This can be used to help organizers finding suitable lodging eg. when booking a workshop. In addition, this extension provides a customized CSS-based template for sr_feuser_register that contains this field.',
	'category' => 'misc',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'author_company' => 'oliverklee.de',
	'shy' => 0,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'fe_users',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.3.0',
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"f693";s:12:"ext_icon.gif";s:4:"000d";s:14:"ext_tables.php";s:4:"e7b1";s:14:"ext_tables.sql";s:4:"c059";s:16:"locallang_db.xml";s:4:"1b79";s:14:"doc/manual.sxw";s:4:"8b1d";s:16:"static/setup.txt";s:4:"7a55";s:44:"static/tx_srfeuserregister_pi1_css_tmpl.html";s:4:"f048";}',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'sr_feuser_register' => '',
		),
	),
	'suggests' => array(
	),
);

?>