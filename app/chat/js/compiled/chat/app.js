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
!function(e,t){var a=e.Application;a.addRegions({mainRegion:"#main-region"}),a.addInitializer(function(n){switch(e.Objects.server=new e.Server(t.extend({interactionType:MibewAPIChatInteraction},n.server)),e.Objects.Models.page=new e.Models.Page(n.page),n.startFrom){case"chat":a.Chat.start(n.chatOptions);break;case"survey":a.Survey.start(n.surveyOptions);break;case"leaveMessage":a.LeaveMessage.start(n.leaveMessageOptions);break;case"invitation":a.Invitation.start(n.invitationOptions);break;default:throw new Error("Don't know how to start!")}}),a.on("start",function(){e.Objects.server.runUpdater()})}(Mibew,_);