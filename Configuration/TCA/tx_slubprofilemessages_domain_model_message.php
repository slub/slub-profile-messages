<?php

defined('TYPO3_MODE') || die();

$ll = [
    'core' => [
        'general' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf',
        'tabs' => 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf',
        'tca' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf'
    ],
    'frontend' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf',
    'slubProfileMessages' => 'LLL:EXT:slub_profile_messages/Resources/Private/Language/locallang_db.xlf'
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_slubprofilemessages_domain_model_message',
    'categories'
);

return [
    'ctrl' => [
        'title' => $ll['slubProfileMessages'] . ':tx_slubprofilemessages_domain_model_message',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group'
        ],
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'descriptionColumn' => 'description',
        'translationSource' => 'l10n_source',
        'origUid' => 't3_origuid',
        'versioningWS' => true,
        'searchFields' => 'title, content, categories',
        'typeicon_classes' => [
            'default' => 'slubprofilemessages-model-message'
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;' . $ll['core']['tabs'] . ':general,
                    title, content,
                --div--;' . $ll['core']['tabs'] . ':categories,
                    categories,
                --div--;' . $ll['core']['tabs'] . ':language,
                    --palette--;;language,
                --div--;' . $ll['core']['tabs'] . ':access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;' . $ll['core']['tabs'] . ':extended'
        ]
    ],
    'palettes' => [
        'access' => [
            'label' => $ll['frontend'] . ':palette.access',
            'showitem' => '
                starttime;' . $ll['frontend'] . ':starttime_formlabel,
                endtime;' . $ll['frontend'] . ':endtime_formlabel,
                --linebreak--,
                editlock
            ',
        ],
        'hidden' => [
            'showitem' => '
                hidden;' . $ll['frontend'] . ':field.default.hidden
            ',
        ],
        'language' => [
            'showitem' => '
                sys_language_uid;' . $ll['frontend'] . ':sys_language_uid_formlabel,
                l18n_parent
            ',
        ],
    ],
    'columns' => [
        'editlock' => [
            'exclude' => true,
            'displayCond' => 'HIDE_FOR_NON_ADMINS',
            'label' => $ll['core']['tca'] . ':editlock',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
            ],
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => $ll['core']['general'] . ':LGL.language',
            'config' => [
                'type' => 'language'
            ]
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => $ll['core']['general'] . ':LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0]
                ],
                'foreign_table' => 'tx_slubprofilemessages_domain_model_message',
                'foreign_table_where' => 'AND tx_slubprofilemessages_domain_model_message.pid=###CURRENT_PID### AND tx_slubprofilemessages_domain_model_message.sys_language_uid IN (-1,0)',
                'default' => 0
            ]
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label' => $ll['core']['general'] . ':LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ]
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => $ll['frontend'] . ':starttime_formlabel',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => $ll['frontend'] . ':endtime_formlabel',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'title' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $ll['slubProfileMessages'] . ':tx_slubprofilemessages_domain_model_message.title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required',
            ]
        ],
        'content' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $ll['slubProfileMessages'] . ':tx_slubprofilemessages_domain_model_message.content',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true
            ]
        ],
        'categories' => [
            'config' => [
                'type' => 'category'
            ]
        ],
    ]
];
