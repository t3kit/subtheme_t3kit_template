<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['subtheme_t3kit_template_default']
= 'EXT:subtheme_t3kit_template/Resources/Private/Extensions/RTE/Default.yaml';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/tsconfig.txt">'
);
