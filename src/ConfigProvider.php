<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-flashmessenger/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-flashmessenger/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

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
    public function __invoke(): array
    {
        return [
            'dot_controller' => [
                'plugin_manager' => [
                    'factories' => [
                        'messenger' => FlashMessengerPluginFactory::class,
                    ],
                ],
            ],
        ];
    }
}
