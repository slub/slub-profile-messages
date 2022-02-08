<?php

declare(strict_types=1);

/*
 * This file is part of the package slub/slub-profile-messages
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Slub\SlubProfileMessages\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class MessageRepository extends Repository
{
    protected $defaultOrderings = [
        'datetime' => QueryInterface::ORDER_DESCENDING
    ];

    /**
     * @param int $categoryUid
     * @param int $limit
     * @return QueryResultInterface
     */
    public function findByCategoryUid(int $categoryUid, int $limit = 10): QueryResultInterface
    {
        $query = $this->createQuery();
        $constraint = $query->equals('categories.uid', $categoryUid);

        $query->matching($constraint);
        $query->setLimit($limit);

        return $query->execute();
    }
}
