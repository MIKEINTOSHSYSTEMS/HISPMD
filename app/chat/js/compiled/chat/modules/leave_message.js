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
!function(e){var s=e.Application,a=s.module("LeaveMessage",{startWithParent:!1});a.addInitializer(function(a){var o=e.Objects,t=e.Objects.Models;a.page&&t.page.set(a.page),o.leaveMessageLayout=new e.Layouts.LeaveMessage,s.mainRegion.show(o.leaveMessageLayout),t.leaveMessageForm=new e.Models.LeaveMessageForm(a.leaveMessageForm),o.leaveMessageLayout.leaveMessageFormRegion.show(new e.Views.LeaveMessageForm({model:t.leaveMessageForm})),o.leaveMessageLayout.descriptionRegion.show(new e.Views.LeaveMessageDescription),t.leaveMessageForm.on("submit:complete",function(){o.leaveMessageLayout.leaveMessageFormRegion.empty(),o.leaveMessageLayout.descriptionRegion.empty(),o.leaveMessageLayout.descriptionRegion.show(new e.Views.LeaveMessageSentDescription)})}),a.addFinalizer(function(){e.Objects.leaveMessageLayout.destroy(),delete e.Objects.Models.leaveMessageForm})}(Mibew);