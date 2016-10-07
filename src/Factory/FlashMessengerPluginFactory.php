<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-flashmessenger
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 6:50 PM
 */

namespace Dot\Controller\Plugin\FlashMessenger\Factory;

use Dot\Controller\Plugin\FlashMessenger\FlashMessengerPlugin;
use Dot\FlashMessenger\FlashMessengerInterface;
use Interop\Container\ContainerInterface;

/**
 * Class FlashMessengerPluginFactory
 * @package Dot\Controller\Plugin\FlashMessenger\Factory
 */
class FlashMessengerPluginFactory
{
    /**
     * @param ContainerInterface $container
     * @return FlashMessengerPlugin
     */
    public function __invoke(ContainerInterface $container)
    {
        return new FlashMessengerPlugin($container->get(FlashMessengerInterface::class));
    }
}