# slub-profile-messages
SLUB profile service messages extension for TYPO3.


# TYPO3 Extension `slub_profile_messages`

[![TYPO3](https://img.shields.io/badge/TYPO3-11-orange.svg)](https://typo3.org/)

SLUB profile service messages extension for TYPO3.

## 1 Usage

### 1.1 Installation using Composer

The recommended way to install the extension is using [Composer][1].

Run the following command within your Composer based TYPO3 project:

```
composer require slub/slub-profile-messages
```

## 2 Administration corner

### 2.1 Release Management

News uses [semantic versioning][2], which means, that
* **bugfix updates** (e.g. 1.0.0 => 1.0.1) just includes small bugfixes or security relevant stuff without breaking changes,
* **minor updates** (e.g. 1.0.0 => 1.1.0) includes new features and smaller tasks without breaking changes,
* **major updates** (e.g. 1.0.0 => 2.0.0) breaking changes which can be refactorings, features or bugfixes.

## 3 Api

### 3.1 Routes

Please check the routes' configuration. You have to set the matching page (limitToPages). If not the routes will not work properly.

### 3.2 Typoscript

Setup / Constant | Comment
---------------- | -------
plugin.tx_slubprofilemessages.settings.message.list.limit | Limit the quantity of data.
