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
!function(e,n,t){var s=0,o=null,i=function(){s++,o||10!=s||(o=e.Utils.alert(e.Localization.trans("Network problems detected. Please refresh the page.")),s=0)},r=function(){s=0,o&&e.Utils.closeAlert(o),o=null},a=new n.Marionette.Application;a.addRegions({agentsRegion:"#agents-region",statusPanelRegion:"#status-panel-region",threadsRegion:"#threads-region",visitorsRegion:"#visitors-region"}),a.addInitializer(function(n){var s=e.Objects,o=e.Objects.Models,l=e.Objects.Collections;s.server=new e.Server(t.extend({interactionType:MibewAPIUsersInteraction,onTimeout:i,onTransportError:i,onReceiveResponse:r},n.server)),o.page=new e.Models.Page(n.page),o.agent=new e.Models.Agent(n.agent),l.threads=new e.Collections.Threads,a.threadsRegion.show(new e.Views.ThreadsCollection({collection:l.threads})),n.page.showVisitors&&(l.visitors=new e.Collections.Visitors,a.visitorsRegion.show(new e.Views.VisitorsCollection({collection:l.visitors}))),o.statusPanel=new e.Models.StatusPanel,a.statusPanelRegion.show(new e.Views.StatusPanel({model:o.statusPanel})),n.page.showOnlineOperators&&(l.agents=new e.Collections.Agents,a.agentsRegion.show(new e.Views.AgentsCollection({collection:l.agents}))),s.server.callFunctionsPeriodically(function(){return[{"function":"update",arguments:{"return":{},references:{},agentId:o.agent.id}}]},function(){})}),a.on("start",function(){e.Objects.server.runUpdater()}),e.Application=a}(Mibew,Backbone,_);