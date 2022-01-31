<?php

use Slub\SlubProfileMessages\Controller\MessageController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

// Add tsconfig page
ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:slub_profile_messages/Configuration/TsConfig/Page.tsconfig"'
);

// Configure plugin - message list
ExtensionUtility::configurePlugin(
    'SlubProfileAccount',
    'MessageList',
    [
        MessageController::class => 'list'
    ],
    [
        MessageController::class => 'list'
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// Register own RTE preset
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['slubProfileMessage'] =
    'EXT:slub_profile_messages/Configuration/RTE/Message.yaml';
