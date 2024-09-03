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
!function(e){e.Models.CloseControl=e.Models.Control.extend({getModelType:function(){return"CloseControl"},closeThread:function(){var s=e.Objects.Models.thread,t=e.Objects.Models.user;e.Objects.server.callFunctions([{"function":"close",arguments:{references:{},"return":{closed:"closed"},threadId:s.get("id"),token:s.get("token"),lastId:s.get("lastId"),user:!t.get("isAgent")}}],function(s){s.closed?e.Utils.closeChatPopup():e.Objects.Models.Status.message.setMessage(s.errorMessage||"Cannot close")},!0)}})}(Mibew);