<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('MREIT.Testsite', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('MREIT.Testsite', 'Content');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:testsite/Configuration/TsConfig/Page.txt">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:testsite/Configuration/TsConfig/User.txt">');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom1'] = 'EXT:testsite/Configuration/TsConfig/Rte/MREStandard.yaml';