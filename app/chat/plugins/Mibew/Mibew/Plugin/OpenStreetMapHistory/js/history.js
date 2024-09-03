/*!
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

(function (Mibew, $, L) {
    var visualizeData = function (data) {
        if (data.length > 2) {
            data = JSON.parse(data);
            showMap(data['country'], data['city'], data['latitude'], data['longitude']);
        }
    }

    $(document).ready(function() {
        $('table.list tr td:nth-child(2)').on('click', function() {
            $.ajax({
                url: window.location.pathname + '/geoip',
                timeout: 5000,
                async: true,
                cache: false,
                type: 'POST',
                dataType: 'text',
                data: $(this).context.outerText,
                success: function(data) { visualizeData(data) },
                error: function() { }
            });
        });
    });

})(Mibew, jQuery, L);
