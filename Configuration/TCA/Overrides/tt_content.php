<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:testsite/Resources/Private/Language/Database.xlf:testsite.';
    /*
     * Grid palette
     */
    $GLOBALS['TCA']['tt_content']['palettes']['gridSettings'] = [
        'showitem' => '
            ,--div--;Grid,
            mre_textmedia_foundation_grid;' . $languageFilePrefix . 'col.mre_textmedia_foundation_grid,
        '
    ];

    $ttContentColumns = [
        'mre_textmedia_foundation_grid' => [
            'exclude' => 1,
            'label'   => $languageFilePrefix . 'col.mre_textmedia_foundation_grid',
            'config'  => [
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => [
                    [
                        '',
                        '0'
                    ],
                    [
                        '1/12',
                        '1'
                    ],
                    [
                        '2/12',
                        '2'
                    ],
                    [
                        '3/12 (25%)',
                        '3'
                    ],
                    [
                        '4/12',
                        '4'
                    ],
                    [
                        '5/12',
                        '5'
                    ],
                    [
                        '6/12 (50%)',
                        '6'
                    ],
                    [
                        '7/12',
                        '7'
                    ],
                    [
                        '8/12',
                        '8'
                    ],
                    [
                        '9/12 (75%)',
                        '9'
                    ],
                    [
                        '10/12',
                        '10'
                    ],
                    [
                        '11/12',
                        '11'
                    ],
                    [
                        '12/12 (100%)',
                        '12'
                    ],
                ],
                'default'    => 6
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $ttContentColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content',
        '--palette--;' . $languageFilePrefix . 'palette.grid_settings;gridSettings', 'textmedia', 'after:imagecols');

});
