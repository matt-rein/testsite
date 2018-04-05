<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:testsite/Configuration/TsConfig/Page.txt">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:testsite/Configuration/TsConfig/User.txt">');

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('flux')) {

    \FluidTYPO3\Flux\Core::registerProviderExtensionKey('MREIT.Testsite', 'Page');
    //\FluidTYPO3\Flux\Core::registerProviderExtensionKey('MREIT.Testsite', 'Content');

    \FluidTYPO3\Flux\Core::registerTemplateAsContentType ('MREIT.Testsite', 'EXT:testsite/Resources/Private/Templates/Content/Trainer.html');
    \FluidTYPO3\Flux\Core::registerTemplateAsContentType ('MREIT.Testsite', 'EXT:testsite/Resources/Private/Templates/Content/Col5050.html');
    \FluidTYPO3\Flux\Core::registerTemplateAsContentType ('MREIT.Testsite', 'EXT:testsite/Resources/Private/Templates/Content/CElementToList.html');

}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('rte_ckeditor')) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom1'] = 'EXT:testsite/Configuration/TsConfig/Rte/MREStandard.yaml';
}