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
!function(e,t){var a=e.Models.BaseSurveyForm;e.Models.LeaveMessageForm=a.extend({defaults:t.extend({},a.prototype.defaults,{showCaptcha:!1,captcha:""}),validate:function(t){var a=e.Localization;if("undefined"!=typeof t.email){if(!t.email)return a.trans('Please fill "{0}".',a.trans("Your email"));if(!e.Utils.checkEmail(t.email))return a.trans('Please fill "{0}" correctly.',a.trans("Your email"))}return"undefined"==typeof t.name||t.name?"undefined"==typeof t.message||t.message?this.get("showCaptcha")&&"undefined"!=typeof t.captcha&&!t.captcha?a.trans("The letters you typed don't match the letters that were shown in the picture."):void 0:a.trans('Please fill "{0}".',a.trans("Message")):a.trans('Please fill "{0}".',a.trans("Your name"))},submit:function(){if(!this.validate(this.attributes)){var t=this;e.Objects.server.callFunctions([{"function":"processLeaveMessage",arguments:{references:{},"return":{},groupId:t.get("groupId"),name:t.get("name"),info:t.get("info"),email:t.get("email"),message:t.get("message"),referrer:t.get("referrer"),captcha:t.get("captcha"),threadId:null,token:null}}],function(e){0==e.errorCode?t.trigger("submit:complete",t):t.trigger("submit:error",t,{code:e.errorCode,message:e.errorMessage||""})},!0)}},ERROR_WRONG_CAPTCHA:10})}(Mibew,_);