<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-flashmessenger
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 6:49 PM
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\FlashMessenger;

use Dot\Controller\Plugin\PluginInterface;
use Dot\FlashMessenger\FlashMessengerInterface;

/**
 * Class FlashMessengerPlugin
 * @package Dot\Controller\Plugin\FlashMessenger
 */
class FlashMessengerPlugin implements PluginInterface
{
    /** @var FlashMessengerInterface */
    protected $flashMessenger;

    /**
     * FlashMessengerPlugin constructor.
     * @param FlashMessengerInterface $flashMessenger
     */
    public function __construct(FlashMessengerInterface $flashMessenger)
    {
        $this->flashMessenger = $flashMessenger;
    }

    /**
     * @param string $type
     * @param string $channel
     * @param mixed $value
     */
    public function addMessage(string $type, mixed $value, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addMessage($type, $value, $channel);
    }

    /**
     * @param string $key
     * @param string $channel
     * @param mixed $value
     */
    public function addData(string $key, mixed $value, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addData($key, $value, $channel);
    }

    /**
     * @param mixed $error
     * @param string $channel
     */
    public function addError(mixed $error, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addError($error, $channel);
    }

    /**
     * @param mixed $message
     * @param string $channel
     */
    public function addWarning(mixed $message, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addWarning($message, $channel);
    }

    /**
     * @param mixed $message
     * @param string $channel
     */
    public function addInfo(mixed $message, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addInfo($message, $channel);
    }

    /**
     * @param mixed $message
     * @param string $channel
     */
    public function addSuccess(mixed $message, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL)
    {
        $this->flashMessenger->addSuccess($message, $channel);
    }

    /**
     * @param string $type
     * @param string $channel
     * @return array
     */
    public function getMessages(
        string $type = null,
        string $channel = FlashMessengerInterface::DEFAULT_CHANNEL
    ): array {
        return $this->flashMessenger->getMessages($type, $channel);
    }

    /**
     * @param string $key
     * @param string $channel
     * @return mixed
     */
    public function getData(string $key, string $channel = FlashMessengerInterface::DEFAULT_CHANNEL): ?mixed
    {
        return $this->flashMessenger->getData($key, $channel);
    }
}
