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
!function(e,t,r){e.Collections.Threads=t.Collection.extend({model:e.Models.QueuedThread,initialize:function(){this.revision=0;var t=this,i=e.Objects.Models.agent;e.Objects.server.callFunctionsPeriodically(function(){return[{"function":"currentTime",arguments:{agentId:i.id,"return":{time:"currentTime"},references:{}}},{"function":"updateThreads",arguments:{agentId:i.id,revision:t.revision,"return":{threads:"threads",lastRevision:"lastRevision"},references:{}}}]},r.bind(this.updateThreads,this))},comparator:function(e){var t={field:e.get("waitingTime").toString()};return this.trigger("sort:field",e,t),t.field},updateThreads:function(t){if(0==t.errorCode){if(t.threads.length>0){var r;r=t.currentTime?Math.round((new Date).getTime()/1e3)-t.currentTime:0;for(var i=0,s=t.threads.length;i<s;i++)t.threads[i].totalTime=parseInt(t.threads[i].totalTime)+r,t.threads[i].waitingTime=parseInt(t.threads[i].waitingTime)+r;this.trigger("before:update:threads",t.threads);var n=e.Models.Thread.prototype.STATE_CLOSED,a=e.Models.Thread.prototype.STATE_LEFT,o=[];this.set(t.threads,{remove:!1,sort:!1}),o=this.filter(function(e){return e.get("state")==n||e.get("state")==a}),o.length>0&&this.remove(o),this.sort(),this.trigger("after:update:threads")}this.revision=t.lastRevision}}})}(Mibew,Backbone,_);