<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
    if (!isset($GLOBALS['TCA']['tt_content']['palettes']['frames'])) {
        $GLOBALS['TCA']['tt_content']['palettes']['frames'] = [
            'showitem' => 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel'
        ];
    }

    $contentElementLanguageFilePrefix = 'LLL:EXT:subtheme_t3kit_template/Resources/Private/Language/ContentElements.xlf:';
    $t3kitContentElementLanguageFilePrefix = 'LLL:EXT:theme_t3kit/Resources/Private/Language/ContentElements.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    $frontendLanguageDatabaseFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:';
    $coreLanguageFilePrefix = 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:';

    // Content elements Flexform Path
    $flexformPath = 'FILE:EXT:subtheme_t3kit_template/Configuration/FlexForms/';


    // Example how to add comments
    // ======================= contentName [begin] ==========================================
    // contentName CType
    // contentName backend fields
    // contentName flexform
    // ======================= contentName [end] ==========================================


    // Example how to configure the backend fields for our new content element. Just remove unneeded parts. For example, check theme_t3kit ext.

    // 'showitem' => '
    //     --div--;' .  $coreLanguageFilePrefix .'general,
    //         --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
    //         header;' . $frontendLanguageFilePrefix . 'header_formlabel,
    //         --linebreak--,bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
    //         --linebreak--,subheader;' . $frontendLanguageFilePrefix . 'subheader_formlabel,
    //         --linebreak--,header_link;' . $frontendLanguageFilePrefix . 'header_link_formlabel,
    //         --linebreak--,pi_flexform;' . $contentElementLanguageFilePrefix . 'tt_content.tabs.settings,

    //     --div--;' . $frontendLanguageFilePrefix . 'tabs.media,assets,
    //     --div--;' . $frontendLanguageFilePrefix . 'tabs.images,image,
    //         --palette--;' . $contentElementLanguageFilePrefix . 'tt_content.palette.imageSize;imageSize,
    //         --palette--;' . $contentElementLanguageFilePrefix . 'tt_content.palette.imageSize;imageMaxSize,
    //         --palette--;' . $frontendLanguageDatabaseFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
    //         --palette--;' . $frontendLanguageDatabaseFilePrefix . 'tt_content.palette.gallerySettings;gallerySettings,
    //         --palette--;' . $frontendLanguageFilePrefix . 'palette.imagelinks;imagelinks,

    //     --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
    //         --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
    //         --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
    //     --div--;' .  $coreLanguageFilePrefix .'language,
    //         --palette--;;language,
    //     --div--;' .  $coreLanguageFilePrefix .'access,
    //         --palette--;;hidden,
    //         --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
    //     --div--;' .  $coreLanguageFilePrefix .'categories,categories,
    //     --div--;' .  $coreLanguageFilePrefix .'notes,rowDescription,
    //     --div--;' .  $coreLanguageFilePrefix .'extended,
    // '



    // Content elements

    // ======================= newElement [begin] ==========================================
    // newElement CType
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $contentElementLanguageFilePrefix . 'newElement.title',
            'newElement',
            'content-elements-newElement'
        ],
        'copyrightText',
        'after'
    );
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['newElement'] = 'content-elements-newElement';

    // newElement backend fields
    $GLOBALS['TCA']['tt_content']['types']['newElement'] = [
        'showitem' => '
            --div--;' .  $coreLanguageFilePrefix .'general,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                header;' . $frontendLanguageFilePrefix . 'header_formlabel,
                --linebreak--,bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
                --linebreak--,pi_flexform;' . $contentElementLanguageFilePrefix . 'element.settings,

            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' .  $coreLanguageFilePrefix .'language,
                --palette--;;language,
            --div--;' .  $coreLanguageFilePrefix .'access,
                --palette--;;hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' .  $coreLanguageFilePrefix .'categories,categories,
            --div--;' .  $coreLanguageFilePrefix .'notes,rowDescription,
            --div--;' .  $coreLanguageFilePrefix .'extended,
        '
    ];

    // newElement flexform
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,newElement'] = $flexformPath . 'flexform_newElement.xml';
    // ======================= newElement [end] ==========================================



    // Add additional fields for tt_content
    $additionalColumns = [
        'aligning' => [
            'exclude' => true,
            'label' => $t3kitContentElementLanguageFilePrefix . 'tt_content.aligning',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$t3kitContentElementLanguageFilePrefix . 'label.default', 0]
                ],
                'default' => 0
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'aligning', '', 'after:layout');


});


// gridelements TCA overrides
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns');
