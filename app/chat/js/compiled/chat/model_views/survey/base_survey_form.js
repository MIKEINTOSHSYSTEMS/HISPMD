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
!function(e,r){e.Views.BaseSurveyForm=r.Marionette.ItemView.extend({events:{'change select[name="group"]':"changeGroupDescription","submit form":"preventSubmit"},ui:{groupSelect:'select[name="group"]',groupDescription:"#group-description",name:'input[name="name"]',email:'input[name="email"]',message:'textarea[name="message"]',errors:".errors",ajaxLoader:"#ajax-loader"},modelEvents:{invalid:"hideAjaxLoader showError","submit:error":"hideAjaxLoader showError"},preventSubmit:function(e){e.preventDefault()},changeGroupDescription:function(){var e=this.ui.groupSelect.prop("selectedIndex"),r=this.model.get("groups")[e].description||"";this.ui.groupDescription.text(r)},showError:function(e,r){var o;o="string"==typeof r?r:r.message,this.ui.errors.html(o)},serializeData:function(){var r=this.model.toJSON();return r.page=e.Objects.Models.page.toJSON(),r},showAjaxLoader:function(){this.ui.ajaxLoader.show()},hideAjaxLoader:function(){this.ui.ajaxLoader.hide()}})}(Mibew,Backbone);