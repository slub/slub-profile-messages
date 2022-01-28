<?php

declare(strict_types=1);

/*
 * This file is part of the package slub/slub-profile-messages
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Slub\SlubProfileMessages\Controller;

use Psr\Http\Message\ResponseInterface;
use Slub\SlubProfileAccount\Mvc\View\JsonView;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MessageController extends ActionController
{
    protected $view;
    protected $defaultViewObjectName = JsonView::class;

    /**
     * @return ResponseInterface
     */
    public function listAction(): ResponseInterface
    {
        $messages = ['hey', 'ho'];

        $this->view->setVariablesToRender(['messageList']);
        $this->view->assign('messageList', $messages);

        return $this->jsonResponse();
    }
}
