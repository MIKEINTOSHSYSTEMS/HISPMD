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
!function(e,t,i){e.Views.Message=t.Marionette.ItemView.extend({template:i.templates.message,className:"message",modelEvents:{change:"render"},serializeData:function(){var e=this.model.toJSON(),t=this.model.get("kind");return e.kindName=this.kindToString(t),e},kindToString:function(e){return e==this.model.KIND_USER?"user":e==this.model.KIND_AGENT?"agent":e==this.model.KIND_FOR_AGENT?"hidden":e==this.model.KIND_INFO?"info":e==this.model.KIND_CONN?"connection":e==this.model.KIND_EVENTS?"event":e==this.model.KIND_PLUGIN?"plugin":""}})}(Mibew,Backbone,Handlebars);