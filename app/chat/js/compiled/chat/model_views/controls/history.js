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
!function(e,t,o){e.Views.HistoryControl=e.Views.Control.extend({template:t.templates["chat/controls/history"],events:o.extend({},e.Views.Control.prototype.events,{click:"showHistory"}),showHistory:function(){var t=e.Objects.Models.user,o=this.model.get("link");if(t.get("isAgent")&&o){var s=e.Utils.buildWindowParams(this.model.get("windowParams"));o=o.replace("&amp;","&","g");var i=window.open(o,"UserHistory",s);null!==i&&(i.focus(),i.opener=window)}}})}(Mibew,Handlebars,_);