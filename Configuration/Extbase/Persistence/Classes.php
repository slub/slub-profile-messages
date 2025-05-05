<?php

declare(strict_types=1);

return [
    \Slub\SlubProfileMessages\Domain\Model\Category::class => [
        'tableName' => 'sys_category',
        'properties' => [
            'code' => [
                'fieldName' => 'tx_slubprofilemessages_code'
            ],
        ],
    ],
];
