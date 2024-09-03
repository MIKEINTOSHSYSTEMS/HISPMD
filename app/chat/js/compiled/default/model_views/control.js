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
!function(e,t,s){e.Views.Control=t.Marionette.ItemView.extend({template:s.templates.default_control,modelEvents:{change:"render"},events:{mouseover:"mouseOver",mouseleave:"mouseLeave"},attributes:function(){var e=[];e.push("control"),this.className&&(e.push(this.className),this.className="");var t=this.getDashedControlType();return t&&e.push(t),{"class":e.join(" ")}},mouseOver:function(){var e=this.getDashedControlType();this.$el.addClass("active"+(e?"-"+e:""))},mouseLeave:function(){var e=this.getDashedControlType();this.$el.removeClass("active"+(e?"-"+e:""))},getDashedControlType:function(){return"undefined"==typeof this.dashedControlType&&(this.dashedControlType=e.Utils.toDashFormat(this.model.getModelType())||""),this.dashedControlType}})}(Mibew,Backbone,Handlebars);