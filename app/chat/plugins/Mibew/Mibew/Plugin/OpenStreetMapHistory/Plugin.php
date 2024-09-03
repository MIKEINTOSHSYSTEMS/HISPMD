<?php
/*
 * This file is a part of Mibew Open Street Map History Plugin.
 *
 * Copyright 2021 the original author or authors.
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
 * @file The main file of Mibew:OpenStreetMapHistory plugin.
 */

namespace Mibew\Mibew\Plugin\OpenStreetMapHistory;

use Mibew\Asset\AssetManagerInterface;
use Mibew\EventDispatcher\EventDispatcher;
use Mibew\EventDispatcher\Events;
use Mibew\Plugin\PluginManager;

/**
 * Main plugin class. Add Open Street Map plugin functionality into chats history page.
 */
class Plugin extends \Mibew\Plugin\AbstractPlugin implements \Mibew\Plugin\PluginInterface
{
    protected $initialized = true;

    /**
     * Class constructor.
     *
     * @param array $config List of the plugin config.
     *
     */
    public function __construct($config)
    {

        $this->initialized = true;
    }

    /**
     * Defines necessary event listeners.
     */
    public function run()
    {
        $dispatcher = EventDispatcher::getInstance();
        $dispatcher->attachListener(Events::PAGE_ADD_JS, $this, 'pageAddJsHandler');
        $dispatcher->attachListener(Events::PAGE_ADD_CSS, $this, 'pageAddCssHandler');
    }

    /**
     * Returns verision of the plugin.
     *
     * @return string Plugin's version.
     */
    public static function getVersion()
    {
        return '0.0.2';
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return array('Mibew:OpenStreetMap' => '0.2.*');
    }

    /**
     * Adds custom JS files to the page.
     *
     * @see \Mibew\EventDispatcher\Events::PAGE_ADD_JS
     */
    public function pageAddJsHandler(&$args)
    {
        if ($args['request']->attributes->get('_route') == 'history') {

            // Add several parts of Open Street Map plugin
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', PluginManager::getInstance()
                                                                ->getPlugin('Mibew:OpenStreetMap')
                                                                ->getFilesPath());
            $args['js'][] = $filepath . '/vendor/jquery-colorbox/jquery.colorbox-min.js';
            $args['js'][] = $filepath . '/vendor/leaflet/dist/leaflet.js';
            $args['js'][] = $filepath . '/js/common.js';

            // Add native js code
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', $this->getFilesPath());
            $args['js'][] = $filepath . '/js/history.js';
        }
    }

    /**
     * Adds custom CSS files to the page.
     *
     * @see \Mibew\EventDispatcher\Events::PAGE_ADD_CSS
     */
    public function pageAddCssHandler(&$args)
    {
        if ($args['request']->attributes->get('_route') == 'history') {
            // Add several parts of Open Street Map plugin
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', PluginManager::getInstance()
                                                                ->getPlugin('Mibew:OpenStreetMap')
                                                                ->getFilesPath());
            $args['css'][] = $filepath . '/vendor/jquery-colorbox/example3/colorbox.css';
            $args['css'][] = $filepath . '/vendor/leaflet/dist/leaflet.css';
            $args['css'][] = $filepath . '/css/styles.css';

            // Add native css
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', $this->getFilesPath());
            $args['css'][] = $filepath . '/css/history.css';
        }
    }
}
