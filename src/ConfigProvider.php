<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-flashmessenger
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 6:49 PM
 */

namespace Dot\Controller\Plugin\FlashMessenger;

use Dot\Controller\Plugin\FlashMessenger\Factory\FlashMessengerPluginFactory;

/**
 * Class ConfigProvider
 * @package Dot\Controller\Plugin\FlashMessenger
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'dot_controller' => [
                'plugin_manager' => [
                    'factories' => [
                        'flashMessenger' => FlashMessengerPluginFactory::class,
                    ],
                ],
            ],
        ];
    }
}