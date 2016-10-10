<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-flashmessenger
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 6:49 PM
 */

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
     * @param string $namespace
     * @param mixed $value
     */
    public function addMessage($namespace, $value)
    {
        $this->flashMessenger->addMessage($namespace, $value);
    }

    /**
     * @param $key
     * @param $value
     */
    public function addData($key, $value)
    {
        $this->flashMessenger->addData($key, $value);
    }

    /**
     * @param $error
     */
    public function addError($error)
    {
        $this->flashMessenger->addError($error);
    }

    /**
     * @param $message
     */
    public function addWarning($message)
    {
        $this->flashMessenger->addWarning($message);
    }

    /**
     * @param $message
     */
    public function addInfo($message)
    {
        $this->flashMessenger->addInfo($message);
    }

    /**
     * @param $message
     */
    public function addSuccess($message)
    {
        $this->flashMessenger->addSuccess($message);
    }

    /**
     * @param $namespace
     * @return array|null
     */
    public function getMessages($namespace = null)
    {
        return $this->flashMessenger->getMessages($namespace);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getData($key)
    {
        return $this->flashMessenger->getData($key);
    }
}