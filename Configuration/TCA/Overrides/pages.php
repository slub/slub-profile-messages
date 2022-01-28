<?php

defined('TYPO3_MODE') || die();

(static function ($extensionKey, string $extensionName): void {
    $ll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_backend.xlf';

    // Override folder icon - user folder
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-' . $extensionKey] = $extensionName . '-pagetree-messagefolder';
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        $ll . ':plugin.title',
        $extensionKey,
        $extensionName . '-pagetree-userfolder'
    ];
})(
    \Slub\SlubProfileMessages\Utility\ConstantsUtility::EXTENSION_KEY,
    \Slub\SlubProfileMessages\Utility\ConstantsUtility::EXTENSION_NAME
);
