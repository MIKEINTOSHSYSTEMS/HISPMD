<?php
/*
 * This file is a part of Mibew Button Refresh Plugin.
 *
 * Copyright 2014 Dmitriy Simushev <simushevds@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @file The main file of Mibew:ButtonRefresh plugin.
 */

namespace Mibew\Mibew\Plugin\ButtonRefresh;

use Canteen\HTML5;
use Mibew\Button\Generator\ImageGenerator;
use Mibew\EventDispatcher\EventDispatcher;
use Mibew\EventDispatcher\Events;
use Mibew\Plugin\PluginManager;

/**
 * The main plugin's file definition.
 *
 * It only attaches handlers to some events.
 */
class Plugin extends \Mibew\Plugin\AbstractPlugin implements \Mibew\Plugin\PluginInterface
{
    /**
     * List of the plugin configs.
     *
     * @var array
     */
    protected $config;

    /**
     * Class constructor.
     *
     * @param array $config List of the plugin config. The following options are
     * supported:
     *   - 'refresh_frequency': int, time in seconds between button refreshes.
     *     The default value is 3.
     */
    public function __construct($config)
    {
        $this->config = $config + array('refresh_frequency' => 3);
    }

    /**
     * The plugin does not need extra initialization thus it is always ready to
     * work.
     *
     * @return boolean
     */
    public function initialized()
    {
        return true;
    }

    /**
     * The main entry point of a plugin.
     */
    public function run()
    {
        $dispatcher = EventDispatcher::getInstance();
        $dispatcher->attachListener(Events::BUTTON_GENERATE, $this, 'alterButton');
    }

    /**
     * Specify version of the plugin.
     *
     * @return string Plugin's version.
     */
    public static function getVersion()
    {
        return '0.1.2';
    }

    /**
     * A handler for
     * {@link \Mibew\EventDispatcher\Events::BUTTON_GENERATE} event.
     *
     * @param array $args Event arguments.
     */
    public function alterButton(&$args)
    {
        if ($args['generator'] instanceof ImageGenerator) {
            // Only image buttons should be refreshed
            $script = HTML5\html('script');
            $script->addChild($this->buildRefreshJs($this->config['refresh_frequency']));
            $script->setAttribute('type', 'text/javascript');

            $last_index = count($args['button']->getChildren()) - 1;
            $args['button']->addChildAt($script, $last_index);
        }
    }

    /**
     * Builds JavaScript source for button refresh.
     *
     * @param int $time Interval between button refreshes in seconds.
     * @return string
     */
    protected function buildRefreshJs($time)
    {
        $js = '(function() {'
            . 'var img = document.getElementById("mibew-agent-button").getElementsByTagName("img")[0];'
            . 'var originalSrc = img.src;'
            . 'setInterval(function() {'
                . 'img.src = originalSrc + "&dummy=" + (new Date()).getTime();'
            . '}, %u);})();';

        return sprintf($js, $time * 1000);
    }
}
