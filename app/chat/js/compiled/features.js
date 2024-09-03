/*!
 * This file is a part of Mibew Messenger.
 *
 * Copyright 2005-2023 the original author or authors.
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
!function(e){function n(){e("#user-can-send-email").is(":checked")?e(".under-user-can-send-email").show():e(".under-user-can-send-email").hide()}function c(){e("#enable-presurvey").is(":checked")?e(".under-survey").show():e(".under-survey").hide()}function i(){e("#enable-ssl").is(":checked")?e(".under-ssl").show():e(".under-ssl").hide()}function u(){e("#enable-groups").is(":checked")?e(".under-groups").show():e(".under-groups").hide()}function s(){e("#enable-tracking").is(":checked")?e(".under-tracking").show():e(".under-tracking").hide()}function r(){e("#enable-privacy-policy").is(":checked")?e(".under-privacy-policy").show():e(".under-privacy-policy").hide()}e(function(){e("#user-can-send-email").change(function(){n()}),e("#enable-presurvey").change(function(){c()}),e("#enable-ssl").change(function(){i()}),e("#enable-groups").change(function(){u()}),e("#enable-tracking").change(function(){s()}),e("#enable-privacy-policy").change(function(){r()}),n(),c(),i(),u(),s(),r()})}(jQuery);