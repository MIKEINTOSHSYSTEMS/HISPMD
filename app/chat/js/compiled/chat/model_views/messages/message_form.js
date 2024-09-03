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
!function(e,s,t){e.Views.MessageForm=s.Marionette.ItemView.extend({template:t.templates["chat/message_form"],events:{"click #send-message":"postMessage","keydown #message-input":"messageKeyDown","keyup #message-input":"checkUserTyping","change #message-input":"checkUserTyping","change #predefined":"selectPredefinedAnswer"},modelEvents:{change:"render"},ui:{message:"#message-input",send:"#send-message",predefinedAnswer:"#predefined"},initialize:function(){e.Objects.Models.user.on("change:canPost",this.render,this)},serializeData:function(){var s=this.model.toJSON();return s.user=e.Objects.Models.user.toJSON(),s.sendShortcut=this.getSendShortcut(),s},postMessage:function(){if(!this.isDisabledInput()){var s=this.ui.message.val();""!=s&&(this.disableInput(),this.model.postMessage(s),e.Objects.Collections.messages.once("multiple:add",this.postMessageComplete,this))}},messageKeyDown:function(e){var s=e.which,t=e.ctrlKey;(13==s&&(t||this.model.get("ignoreCtrl"))||10==s)&&this.postMessage()},enableInput:function(){this.ui.message.removeAttr("disabled")},disableInput:function(){this.ui.message.attr("disabled","disabled")},isDisabledInput:function(){return"disabled"==this.ui.message.attr("disabled")},clearInput:function(){this.ui.message.val("").change()},postMessageComplete:function(){this.clearInput(),this.enableInput(),this.ui.message.focus()},selectPredefinedAnswer:function(){var e=this.ui.message,s=this.ui.predefinedAnswer,t=s.get(0).selectedIndex;t&&(e.val(this.model.get("predefinedAnswers")[t-1].full).change(),e.focus(),s.get(0).selectedIndex=0)},checkUserTyping:function(){var s=e.Objects.Models.user,t=""!=this.ui.message.val();t!=s.get("typing")&&s.set({typing:t})},getSendShortcut:function(){return this.model.get("ignoreCtrl")?"Enter":navigator.userAgent.indexOf("mac")!==-1?"&#8984;-Enter":"Ctrl-Enter"}})}(Mibew,Backbone,Handlebars);