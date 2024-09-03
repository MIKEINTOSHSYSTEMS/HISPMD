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
!function(e,t,i){e.Views.RedirectControl=e.Views.Control.extend({template:t.templates["chat/controls/redirect"],events:i.extend({},e.Views.Control.prototype.events,{click:"redirect"}),initialize:function(){e.Objects.Models.user.on("change",this.render,this)},serializeData:function(){var t=this.model.toJSON();return t.user=e.Objects.Models.user.toJSON(),t},redirect:function(){var t=e.Objects.Models.user;if(t.get("isAgent")&&t.get("canPost")){var i=this.model.get("link");if(i){var s=e.Objects.Models.page.get("style"),n="";s&&(n=(i.indexOf("?")===-1?"?":"&")+"style="+s),window.location.href=i.replace(/\&amp\;/g,"&")+n}}}})}(Mibew,Handlebars,_);