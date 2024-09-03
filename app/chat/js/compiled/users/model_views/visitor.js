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
!function(e,i){e.Views.Visitor=e.Views.CompositeBase.extend({template:i.templates["users/visitor"],childView:e.Views.Control,childViewContainer:".visitor-controls",className:"visitor",modelEvents:{change:"render"},events:{"click .invite-link":"inviteUser","click .geo-link":"showGeoInfo","click .track-control":"showTrack"},inviteUser:function(){if(!this.model.get("invitationInfo")){var i=this.model.id,o=e.Objects.Models.page;o.get("operatorCouldNotInvite")?e.Utils.alert(e.Localization.trans("Unable to invite user: groups are enabled, and you don't belong to any of them.")):e.Popup.open(o.get("inviteLink")+"?visitor="+i,"ImCenter"+i,e.Utils.buildWindowParams(o.get("inviteWindowParams")))}},showTrack:function(){var i=this.model.id,o=e.Objects.Models.page;e.Popup.open(o.get("trackedLink")+"?visitor="+i,"ImTracked"+i,e.Utils.buildWindowParams(o.get("trackedVisitorWindowParams")))},showGeoInfo:function(){var i=this.model.get("userIp");i&&e.Utils.alert(e.Localization.trans("No geolocation data available. We recommend you to install Mibew:GeoIp and Mibew:OpenStreetMap (or Mibew:GoogleMaps) plugins."))}})}(Mibew,Handlebars);