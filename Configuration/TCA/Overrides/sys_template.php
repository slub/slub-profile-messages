<?php

defined('TYPO3') || die();

// Add static typoscript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'slub_profile_messages',
    'Configuration/TypoScript/',
    'SLUB profile messages'
);
