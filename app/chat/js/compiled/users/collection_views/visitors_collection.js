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
!function(i,e,t){i.Views.VisitorsCollection=i.Views.CompositeBase.extend({template:e.templates["users/visitors_collection"],childViewContainer:"#visitors-container",className:"visitors-collection",collectionEvents:{sort:"render"},getChildView:function(e){return i.Views.Visitor},getEmptyView:function(){return i.Views.NoVisitors},childViewOptions:function(e){var t=i.Objects.Models.page;return{tagName:t.get("visitorTag"),collection:e.get("controls")}},initialize:function(){window.setInterval(t.bind(this.updateTimers,this),2e3),this.on("render:collection",this.updateTimers,this)},updateTimers:function(){i.Utils.updateTimers(this.$el,".timesince")}})}(Mibew,Handlebars,_);