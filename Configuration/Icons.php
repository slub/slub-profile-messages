<?php

defined('TYPO3') || die();

return [
    'slubprofilemessages-overlay-extension' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:slub_profile_messages/Resources/Public/Icons/Overlay/extension.svg'
    ],
    'slubprofilemessages-model-message' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:slub_profile_messages/Resources/Public/Icons/Model/message.svg'
    ],
    'slubprofilemessages-pagetree-messagefolder' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:slub_profile_messages/Resources/Public/Icons/PageTree/message-folder.svg'
    ],
    'slubprofilemessages-wizard-messagelist' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:slub_profile_messages/Resources/Public/Icons/Wizard/message-list.svg'
    ],
];
