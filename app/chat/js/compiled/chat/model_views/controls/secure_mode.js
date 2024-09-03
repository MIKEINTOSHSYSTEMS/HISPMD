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
!function(e,t,o){e.Views.SecureModeControl=e.Views.Control.extend({template:t.templates["chat/controls/secure_mode"],events:o.extend({},e.Views.Control.prototype.events,{click:"secure"}),secure:function(){if("https:"!=window.location.protocol){var t=this.model.get("link");if(t){var o=e.Objects.Models.page.get("style");window.location.href=t.replace(/\&amp\;/g,"&")+(o?(t.indexOf("?")>-1?"&":"?")+"style="+o:"")}}}})}(Mibew,Handlebars,_);