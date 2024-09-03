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
!function(e,t,n){e.Views.StatusPanel=t.Marionette.ItemView.extend({template:n.templates["users/status_panel"],modelEvents:{change:"render"},ui:{changeStatus:"#change-status"},events:{"click #change-status":"changeAgentStatus"},initialize:function(){e.Objects.Models.agent.on("change",this.render,this)},changeAgentStatus:function(){this.model.changeAgentStatus()},serializeData:function(){var t=this.model.toJSON();return t.agent=e.Objects.Models.agent.toJSON(),t}})}(Mibew,Backbone,Handlebars);