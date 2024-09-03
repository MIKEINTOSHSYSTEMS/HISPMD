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
!function(e,t,n){e.Views.SendMailControl=e.Views.Control.extend({template:t.templates["chat/controls/send_mail"],events:n.extend({},e.Views.Control.prototype.events,{click:"sendMail"}),serializeData:function(){var t=this.model.toJSON();return t.user=e.Objects.Models.user.toJSON(),t},sendMail:function(){var t=this.model.get("link"),n=e.Objects.Models.page;if(t){var o=e.Utils.buildWindowParams(this.model.get("windowParams")),i=n.get("style"),l="";i&&(l=(t.indexOf("?")===-1?"?":"&")+"style="+i),t=t.replace(/\&amp\;/g,"&")+l;var s=window.open(t,"ForwardMail",o);null!==s&&(s.focus(),s.opener=window)}}})}(Mibew,Handlebars,_);