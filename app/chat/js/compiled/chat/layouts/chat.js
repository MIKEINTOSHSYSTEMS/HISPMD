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
!function(e,s){e.Layouts.Chat=s.Marionette.LayoutView.extend({template:Handlebars.templates["chat/layout"],regions:{controlsRegion:"#controls-region",avatarRegion:"#avatar-region",messagesRegion:{selector:"#messages-region",regionClass:e.Regions.Messages},statusRegion:"#status-region",messageFormRegion:"#message-form-region"},serializeData:function(){var s=e.Objects.Models;return{page:s.page.toJSON(),user:s.user.toJSON()}}})}(Mibew,Backbone);