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

/**
 * Display popup with a map and a marker on it.
 *
 * @param {String} country Name of the country. It will be used in the
 * marker's title.
 * @param {String} city Name of the city. It will be used in the marker's
 * title.
 * @param {Number} latitude Latitude of the point the marker should be
 * placed.
 * @param {Number} longitude Longitude of the point the marker should be
 * placed.
 */
var showMap = function (country, city, latitude, longitude) {
    var $canvas = $('<div id="map-canvas"></div>');

    jQuery.colorbox({
            html: $canvas,
            onComplete: function() {
                var map = L.map('map-canvas', {
                        center: [latitude, longitude],
                        zoom: 9
                });
                var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                var osmAttrib='Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
                var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 19, attribution: osmAttrib});
                map.addLayer(osm);
                L.marker([latitude, longitude]).addTo(map).bindPopup('<strong>' + city + ', ' + country + '</strong>').openPopup();
            }
        });
}
