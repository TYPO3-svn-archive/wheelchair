<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = Array (
	'wheelchair' => Array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:wheelchair/locallang_db.php:fe_users.wheelchair',
		'config' => Array (
			'type' => 'check',
		)
	),
);

t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('fe_users', 'wheelchair;;;;1-1-1');

t3lib_extMgm::addStaticFile($_EXTKEY, 'static/', 'Wheelchair');

?>
