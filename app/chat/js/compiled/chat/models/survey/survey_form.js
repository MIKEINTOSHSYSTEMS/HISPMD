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
!function(e,t){var r=e.Models.BaseSurveyForm;e.Models.SurveyForm=r.extend({defaults:t.extend({},r.prototype.defaults,{showEmail:!1,showMessage:!1,canChangeName:!1}),validate:function(t){if(this.get("canChangeName")&&"undefined"!=typeof t.name){var r=t.name.replace(/^\s+/,"").replace(/\s+$/,"");if(0===r.length)return e.Localization.trans("Name is required.")}if(this.get("showEmail")&&"undefined"!=typeof t.email&&!e.Utils.checkEmail(t.email))return e.Localization.trans("Wrong email address.")},submit:function(){if(!this.validate(this.attributes)){var t=this;e.Objects.server.callFunctions([{"function":"processSurvey",arguments:{references:{},"return":{next:"next",options:"options"},groupId:t.get("groupId"),name:t.get("name"),info:t.get("info"),email:t.get("email"),message:t.get("message"),referrer:t.get("referrer"),threadId:null,token:null}}],function(r){if(0==r.errorCode)switch(t.trigger("submit:complete",t),e.Application.Survey.stop(),r.next){case"chat":e.Application.Chat.start(r.options);break;case"leaveMessage":e.Application.LeaveMessage.start(r.options);break;default:throw new Error("Do not know how to continue!")}else t.trigger("submit:error",t,{code:r.errorCode,message:r.errorMessage||""})},!0)}}})}(Mibew,_);