/*!
 * This file is a part of Mibew Advanced Button Plugin
 *
 * Copyright 2014, 2018, 2021 the original author or authors.
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
(function(Mibew) {
    Mibew.APIFunctions.refreshButton = function(data) {

        var button_object;

        var button = document.getElementById("mibew-agent-button");
        if (!button) {
            // The button is operator code field
            button_object = document.getElementById("mibew-operator-code-field");
        }
        else {
            button_object = button.getElementsByTagName("img")[0];
            if (!button_object) {
                // The button is text link
                button_object = button;
            }
            else {
                // The button is image, refresh it
                var originalSrc = button_object.src.replace(/&dummy=\d+/, '');
                button_object.src = originalSrc + "&dummy=" + (new Date()).getTime();
            }
        }

        // Unable to find button of any type - nothing to do
        if (!button_object) { return; }

        // Hide the button if all popups are open or make it visible otherwise
        var visible = false;
        for(var key in Mibew.Objects.ChatPopups) {
            var popup = Mibew.Objects.ChatPopups[key];
            visible = visible || !popup.isOpened;
        }

        // Check whether we actually need to hide the button
        if (data.refreshButton.mode != 'none') {
            if (data.refreshButton.mode == 'visibility') {
                button_object.style.visibility = visible ? 'visible' : 'hidden';
            }
            else if (data.refreshButton.mode == 'display') {
                button_object.style.display = visible ? data.refreshButton.submode : 'none';
            }
        }

        // Set appropriate class for the button depending on its alleged visibility
        button_object.className = button_object.className.replace(/ mibew_(visible|hidden)/, '');
        if (visible) {
            button_object.className = button_object.className.concat(' mibew_visible');
        }
        else {
            button_object.className = button_object.className.concat(' mibew_hidden');
        }
    }
})(Mibew);
