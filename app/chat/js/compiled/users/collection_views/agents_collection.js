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
!function(e){e.Views.AgentsCollection=e.Views.CollectionBase.extend({className:"agents-collection",collectionEvents:{"sort add remove reset":"render"},getChildView:function(i){return e.Views.Agent},initialize:function(){this.on("childview:before:render",this.updateIndexes,this)},updateIndexes:function(e){var i=this.collection,n=e.model;n&&(e.isModelFirst=0==i.indexOf(n),e.isModelLast=i.indexOf(n)==i.length-1)}})}(Mibew);