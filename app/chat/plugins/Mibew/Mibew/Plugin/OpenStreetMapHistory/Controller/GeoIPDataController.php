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

namespace Mibew\Mibew\Plugin\OpenStreetMapHistory\Controller;

use Mibew\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Mibew\Plugin\PluginManager;

/**
* GeoIP data actions
*/
class GeoIPDataController extends AbstractController
{
    /**
    * Returns JSON with geo data for the incoming IP address.
    *
    * @param  Request  $request
    * @return Response JSON structure with geo data
    */
    public function getGeoIPData(Request $request)
    {
        $geo_data = array( 'function' => 'openStreetMapGetInfo',
                           'arguments' => array( 'ip' => $request->getContent() ),
                           'results' => array() );

        $osm_plugin = PluginManager::getInstance()->getPlugin('Mibew:OpenStreetMap');
        $osm_plugin->usersFunctionCallHandler($geo_data);

        $results = array_key_exists('errorCode', $geo_data) && $geo_data['errorCode'] ? array() : $geo_data['results'];
        return new JsonResponse($results);
    }
}
