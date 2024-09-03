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
!function(e,t){e.Models.Avatar=e.Models.Base.extend({defaults:{imageLink:!1},initialize:function(){this.registeredFunctions=[],this.registeredFunctions.push(e.Objects.server.registerFunction("setupAvatar",t.bind(this.apiSetupAvatar,this))),e.Objects.Models.thread.on("change:agentId",this.setFromThread,this)},finalize:function(){for(var t=0;t<this.registeredFunctions.length;t++)e.Objects.server.unregisterFunction(this.registeredFunctions[t])},apiSetupAvatar:function(e){this.set({imageLink:e.imageLink||!1})},setFromThread:function(i){return i.get("agentId")?void e.Objects.server.callFunctions([{"function":"getAvatar",arguments:{references:{},"return":{imageLink:"imageLink"},threadId:i.get("id"),token:i.get("token")}}],t.bind(this.apiSetupAvatar,this),!0):void this.set({imageLink:!1})}})}(Mibew,_);