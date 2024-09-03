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
!function(e,s,t){e.Collections.Messages=s.Collection.extend({model:e.Models.Message,initialize:function(){this.periodicallyCalled=[],this.periodicallyCalled.push(e.Objects.server.callFunctionsPeriodically(t.bind(this.updateMessagesFunctionBuilder,this),t.bind(this.updateMessages,this)))},finalize:function(){for(var s=0;s<this.periodicallyCalled.length;s++)e.Objects.server.stopCallFunctionsPeriodically(this.periodicallyCalled[s])},updateMessages:function(s){s.lastId&&e.Objects.Models.thread.set({lastId:s.lastId});for(var t,l,a,i,d=e.Models.Message.prototype.KIND_PLUGIN,o=[],n=0,r=s.messages.length;n<r;n++)t=s.messages[n],t.kind==d?"object"==typeof t.data&&null!==t.data&&(l=t.plugin||!1,a="process:"+(l!==!1?l+":":"")+"plugin:message",i={messageData:t,model:!1},this.trigger(a,i),i.model&&(i.model.get("id")||i.model.set({id:t.id}),o.push(i.model))):o.push(new e.Models.Message(t));o.length>0&&this.add(o)},updateMessagesFunctionBuilder:function(){var s=e.Objects.Models.thread,t=e.Objects.Models.user;return[{"function":"updateMessages",arguments:{"return":{messages:"messages",lastId:"lastId"},references:{},threadId:s.get("id"),token:s.get("token"),lastId:s.get("lastId"),user:!t.get("isAgent")}}]},add:function(){var e=Array.prototype.slice.apply(arguments),t=s.Collection.prototype.add.apply(this,e);return this.trigger("multiple:add"),t}})}(Mibew,Backbone,_);