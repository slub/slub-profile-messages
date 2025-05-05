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
use Slub\SlubProfileMessages\Domain\Model\Category;
use Slub\SlubProfileMessages\Domain\Repository\MessageRepository;
use Slub\SlubProfileMessages\Mvc\View\JsonView;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MessageController extends ActionController
{
    protected $view;
    protected $defaultViewObjectName = JsonView::class;
    protected MessageRepository $messageRepository;

    /**
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    /**
     * @param Category $category
     * @return ResponseInterface
     */
    public function listAction(Category $category): ResponseInterface
    {
        $messages = $this->messageRepository->findByCategoryUid(
            $category->getUid(),
            (int)$this->settings['message']['list']['limit']
        );

        $this->view->setVariablesToRender(['messageList']);
        $this->view->assign('messageList', $messages);

        return $this->jsonResponse();
    }
}
