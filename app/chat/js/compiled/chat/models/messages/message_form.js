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
!function(e){e.Models.MessageForm=e.Models.Base.extend({defaults:{predefinedAnswers:[],ignoreCtrl:!1},postMessage:function(t){var s=e.Objects.Models.thread,r=e.Objects.Models.user;if(r.get("canPost")){this.trigger("before:post",this);var n=this;e.Objects.server.callFunctions([{"function":"post",arguments:{references:{},"return":{},message:t,threadId:s.get("id"),token:s.get("token"),user:!r.get("isAgent")}}],function(){n.trigger("after:post",n)},!0)}}})}(Mibew);