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
!function(e,n){var t=[],o=e.Models.QueuedThread=e.Models.Thread.extend({defaults:n.extend({},e.Models.Thread.prototype.defaults,{controls:null,userName:"",userIp:"",remote:"",userAgent:"",agentName:"",canOpen:!1,canView:!1,canBan:!1,ban:!1,totalTime:0,waitingTime:0,firstMessage:null}),initialize:function(){for(var n=this,t=[],s=o.getControls(),a=0,r=s.length;a<r;a++)t.push(new s[a]({thread:n}));this.set({controls:new e.Collections.Controls(t)})}},{addControl:function(e){t.push(e)},getControls:function(){return t}})}(Mibew,_);