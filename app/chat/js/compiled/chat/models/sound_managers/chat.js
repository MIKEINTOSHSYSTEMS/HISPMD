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
!function(e,s){e.Models.ChatSoundManager=e.Models.BaseSoundManager.extend({defaults:s.extend({},e.Models.BaseSoundManager.prototype.defaults,{skipNextMessageSound:!1}),initialize:function(){var s=e.Objects,t=this;s.Collections.messages.on("multiple:add",this.playNewMessageSound,this),s.Models.messageForm.on("before:post",function(){t.set({skipNextMessageSound:!0})})},playNewMessageSound:function(){if(!this.get("skipNextMessageSound")){var s=e.Objects.Models.page.get("mibewBasePath");"undefined"!=typeof s&&(s+="/sounds/new_message",this.play(s))}this.set({skipNextMessageSound:!1})}})}(Mibew,_);