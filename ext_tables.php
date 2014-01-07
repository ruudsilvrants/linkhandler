<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Include static TypoScript configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Linkhandler');

