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
!function(t,e){var o=[],n=t.Models.Visitor=t.Models.User.extend({defaults:e.extend({},t.Models.User.prototype.defaults,{controls:null,userName:"",userIp:"",remote:"",userAgent:"",firstTime:0,lastTime:0,invitations:0,chats:0,invitationInfo:!1}),initialize:function(){for(var e=this,o=[],s=n.getControls(),i=0,r=s.length;i<r;i++)o.push(new s[i]({visitor:e}));this.set({controls:new t.Collections.Controls(o)})}},{addControl:function(t){o.push(t)},getControls:function(){return o}})}(Mibew,_);