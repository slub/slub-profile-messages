<?php

declare(strict_types=1);

/*
 * This file is part of the package slub/slub-profile-messages
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Slub\SlubProfileMessages\Mvc\View;

use DateTime;
use TYPO3\CMS\Extbase\Mvc\View\JsonView as ExtbaseJsonView;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class JsonView extends ExtbaseJsonView
{
    /**
     * The rendering configuration for this JSON view which
     * determines which properties of each variable to render.
     * In default all data are given.
     *
     * You can exclude fields like:
     *
     * 'account' => [
     *     '_descendAll' => [
     *         '_exclude' => [
     *             'categories',
     *             'contact',
     *             'discipline'
     *         ]
     *     ]
     * ]
     */
    protected array $accountConfiguration = [
        'messageList' => [
            '_descendAll' => [
            ]
        ],
    ];

    public function __construct()
    {
        $this->setConfiguration($this->accountConfiguration);
    }

    /**
     * Always transforming object storages to arrays for the JSON view
     *
     * @param mixed $value
     * @param array $configuration
     * @param bool $firstLevel
     * @return mixed
     */
    protected function transformValue($value, array $configuration, $firstLevel = false)
    {
        if ($value instanceof ObjectStorage) {
            $value = $value->toArray();
        }

        if ($value instanceof DateTime) {
            return [
                'format' => $value->format('c'),
                'timestamp' => $value->getTimestamp()
            ];
        }

        return parent::transformValue($value, $configuration);
    }
}
