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
!function(e,t,a){var s=e.Views.BaseSurveyForm;e.Views.LeaveMessageForm=s.extend({template:t.templates["leave_message/form"],events:a.extend({},s.prototype.events,{"click #send-message":"submitForm"}),ui:a.extend({},s.prototype.ui,{captcha:'input[name="captcha"]',captchaImg:"#captcha-img"}),modelEvents:a.extend({},s.prototype.modelEvents,{"submit:error":"hideAjaxLoader showError submitError"}),submitForm:function(){this.showAjaxLoader();var e={};this.model.get("groups")&&(e.groupId=this.ui.groupSelect.val()),e.name=this.ui.name.val()||"",e.email=this.ui.email.val()||"",e.message=this.ui.message.val()||"",this.model.get("showCaptcha")&&(e.captcha=this.ui.captcha.val()||""),this.model.set(e,{validate:!0}),this.model.submit()},submitError:function(e,t){if(t.code==e.ERROR_WRONG_CAPTCHA&&e.get("showCaptcha")){var a=this.ui.captchaImg.attr("src");a=a.replace(/\?d\=[0-9]+/,""),this.ui.captchaImg.attr("src",a+"?d="+(new Date).getTime())}}})}(Mibew,Handlebars,_);