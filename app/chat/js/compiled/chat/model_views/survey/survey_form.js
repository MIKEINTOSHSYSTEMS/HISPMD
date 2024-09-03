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
!function(e,s,t){var i=e.Views.BaseSurveyForm;e.Views.SurveyForm=i.extend({template:s.templates["survey/form"],events:t.extend({},i.prototype.events,{"click #submit-survey":"submitForm"}),submitForm:function(){this.showAjaxLoader();var e={};this.model.get("groups")&&(e.groupId=this.ui.groupSelect.val()),this.model.get("canChangeName")&&(e.name=this.ui.name.val()||""),this.model.get("showEmail")&&(e.email=this.ui.email.val()||""),this.model.get("showMessage")&&(e.message=this.ui.message.val()||""),this.model.set(e,{validate:!0}),this.model.submit()}})}(Mibew,Handlebars,_);