/*!
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

(function (Mibew, $) {
    /**
     * Makes all necessary actions to get Geo info and show it on the map.
     *
     * This is a replacement for Mibew.Views.QueuedThread.prototype.showGeoInfo
     * and Mibew.Views.Visitor.prototype.showGeoInfo methods.
     */
    var showGeoInfo = function() {
        var ip = this.model.get('userIp'),
            agentId = Mibew.Objects.Models.agent.get('id'),
            server = Mibew.Objects.server;

        if (ip) {
            server.callFunctions(
                [{
                    'function': 'openStreetMapGetInfo',
                    'arguments': {
                        'agentId': agentId,
                        'ip': ip,
                        'return': {
                            'country': 'country',
                            'city': 'city',
                            'latitude': 'latitude',
                            'longitude': 'longitude'
                        },
                        'references': {}
                    }
                }],
                function (args) {
                    // Make sure there is enough data to display the map
                    if (!args.errorCode) {
                        showMap(args.country, args.city, args.latitude, args.longitude);
                    }
                },
                true
            );
        }
    }

    /**
     * This is a temporary copy of Mibew.Views.QueuedThread which will be used
     * for extending it.
     */
    var baseThreadView = Mibew.Views.QueuedThread;

    Mibew.Views.QueuedThread = baseThreadView.extend(
        /** @lends Mibew.Views.QueuedThread.prototype */
        {
            /**
             * Open window with geo information
             *
             * This method overrides
             * Mibew.Views.QueuedThread.prototype.showGeoInfo method.
             */
            showGeoInfo: showGeoInfo
        }
    );

    /**
     * This is a temporary copy of Mibew.Views.Visitor which will be used for
     * extending it.
     */
    var baseVisitorView = Mibew.Views.Visitor;

    Mibew.Views.Visitor = baseVisitorView.extend(
        /** @lends Mibew.Views.Visitor.prototype */
        {
            /**
             * Open window with geo information.
             *
             * This method overrides Mibew.Views.Visitor.prototype.showGeoInfo
             * method.
             */
            showGeoInfo: showGeoInfo
        }
    );

})(Mibew, jQuery);
