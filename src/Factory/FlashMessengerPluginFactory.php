<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-flashmessenger/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-flashmessenger/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\FlashMessenger\Factory;

use Dot\Controller\Plugin\FlashMessenger\FlashMessengerPlugin;
use Dot\FlashMessenger\FlashMessengerInterface;
use Psr\Container\ContainerInterface;

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
