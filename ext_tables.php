<?php
defined('TYPO3_MODE') or die();

$boot = function ($_EXTKEY) {

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    // Content Elements Icons
    $contentElementIconFilePrefix = 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/ContentElements/';
    $contentElementIcons = [
        'content-elements-newElement' => 'customElement.svg'
    ];
    foreach ($contentElementIcons as $identifier => $contentElementIcon) {
        $iconRegistry->registerIcon(
            $identifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $contentElementIconFilePrefix . $contentElementIcon]
        );
    }
};

$boot($_EXTKEY);

unset($boot);
