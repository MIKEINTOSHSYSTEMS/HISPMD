<?php
/*
 * This file is a part of Mibew Open Street Map Plugin.
 *
 * Copyright 2014-2021 the original author or authors.
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
 * @file The main file of Mibew:OpenStreetMap plugin.
 */

namespace Mibew\Mibew\Plugin\OpenStreetMap;

use Mibew\Asset\AssetManagerInterface;
use Mibew\EventDispatcher\EventDispatcher;
use Mibew\EventDispatcher\Events;
use Mibew\Plugin\PluginManager;

/**
 * Provides an ability to view visitors on Open Street Map.
 */
class Plugin extends \Mibew\Plugin\AbstractPlugin implements \Mibew\Plugin\PluginInterface
{
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
        $dispatcher->attachListener(Events::USERS_FUNCTION_CALL, $this, 'usersFunctionCallHandler');
        $dispatcher->attachListener(Events::PAGE_ADD_JS, $this, 'pageAddJsHandler');
        $dispatcher->attachListener(Events::PAGE_ADD_CSS, $this, 'pageAddCssHandler');
    }

    /**
     * A handler for {@link \Mibew\EventDispatcher\Events::USERS_FUNCTION_CALL}.
     *
     * Provides an ability to use "openStreetMapGetInfo" function at the client
     * side.
     *
     * @see \Mibew\EventDispatcher\Events::USERS_FUNCTION_CALL
     */
    public function usersFunctionCallHandler(&$function)
    {
        if ($function['function'] == 'openStreetMapGetInfo') {
            // An IP string can contain more than one IP address. For example it
            // can be something like this: "x.x.x.x (x.x.x.x)". We need to
            // use only first one.
            $ips = explode(' ', $function['arguments']['ip'], 2);
            $ip = filter_var($ips[0], FILTER_VALIDATE_IP);
            if (!$ip) {
                // There is no valid IP in the string. An error should be returned.
                $function['results'] = array(
                    'errorCode' => 1,
                    'errorMessage' => 'The specified IP is invalid!',
                );

                return;
            }
            $info = PluginManager::getInstance()
                ->getPlugin('Mibew:GeoIp')
                ->getGeoInfo($ip, get_current_locale());

            $function['results'] = array(
                'country' => $info['country_name'] ?: '',
                'city' => $info['city'] ?: '',
                'latitude' => $info['latitude'],
                'longitude' => $info['longitude'],
            );
        }
    }

    /**
     * Adds custom JS files to the page.
     *
     * @see \Mibew\EventDispatcher\Events::PAGE_ADD_JS
     */
    public function pageAddJsHandler(&$args)
    {
        if ($args['request']->attributes->get('_route') == 'users') {
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', $this->getFilesPath());
            $args['js'][] = $filepath . '/vendor/jquery-colorbox/jquery.colorbox-min.js';
            $args['js'][] = $filepath . '/vendor/leaflet/dist/leaflet.js';
            $args['js'][] = $filepath . '/js/common.js';
            $args['js'][] = $filepath . '/js/users.js';
        }
    }

    /**
     * Adds custom CSS files to the page.
     *
     * @see \Mibew\EventDispatcher\Events::PAGE_ADD_CSS
     */
    public function pageAddCssHandler(&$args)
    {
        if ($args['request']->attributes->get('_route') == 'users') {
            $filepath = str_replace(DIRECTORY_SEPARATOR, '/', $this->getFilesPath());
            $args['css'][] = $filepath . '/vendor/jquery-colorbox/example3/colorbox.css';
            $args['css'][] = $filepath . '/vendor/leaflet/dist/leaflet.css';
            $args['css'][] = $filepath . '/css/styles.css';
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getVersion()
    {
        return '0.2.0';
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return array('Mibew:GeoIp' => '1.*');
    }
}
