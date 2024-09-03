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
!function(t,e,a,o,r){t.Utils={},t.Utils.toUpperCaseFirst=function(t){return"string"==typeof t&&(""===t?t:t.substring(0,1).toUpperCase()+t.substring(1))},t.Utils.toDashFormat=function(t){if("string"!=typeof t)return!1;var e=t.match(/((?:[A-Z]?[a-z0-9]+)|(?:[A-Z][a-z0-9]*))/g);if(!e)return"";for(var a=0;a<e.length;a++)e[a]=e[a].toLowerCase();return e.join("-")},t.Utils.checkEmail=function(t){if(!t)return!1;var e=t.split("@");if(e.length<2)return!1;var a=e.pop(),o=e.join("@");return!!r.isFQDN(a)&&/^(([a-zA-Z0-9!#$%&'*+\-/=?\^_`{|}~]+(\.[a-zA-Z0-9!#$%&'*+\-/=?\^_`{|}~]+)*)|(\".+\"))$/.test(o)},t.Utils.playSound=function(t){var a=e('audio[data-file="'+t+'"]');if(a.length>0)a.get(0).play();else{var o=e("<audio>",{autoplay:!0,style:"display: none"}).append('<source src="'+t+'.wav" type="audio/x-wav" /><source src="'+t+'.mp3" type="audio/mpeg" codecs="mp3" /><source src="'+t+'.ogg" type="audio/ogg" codecs="vorbis" /><embed src="'+t+'.wav" type="audio/x-wav" hidden="true" autostart="true" loop="false" />');e("body").append(o),e.isFunction(o.get(0).play)&&o.attr("data-file",t)}},t.Utils.buildWindowParams=function(t){var e=a.defaults({},t,{toolbar:!1,scrollbars:!1,location:!1,status:!0,menubar:!1,width:640,heght:480,resizable:!0});return["toolbar="+(e.toolbar?"1":"0"),"scrollbars="+(e.scrollbars?"1":"0"),"location="+(e.location?"1":"0"),"status="+(e.status?"1":"0"),"menubar="+(e.menubar?"1":"0"),"width="+e.width,"height="+e.height,"resizable="+(e.resizable?"1":"0")].join(",")};var i=a.once(function(){o.defaultOptions.className||(o.defaultOptions.className="vex-theme-default"),o.dialog.buttons.YES.text=t.Localization.trans("OK"),o.dialog.buttons.NO.text=t.Localization.trans("Cancel")}),s=function(){return o.getAllVexes().length>0},l=function(t){return t.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#039;")};t.Utils.alert=function(t){if(i(),!s())return o.dialog.alert({message:l(t)})},t.Utils.confirm=function(t,e){i(),o.dialog.confirm({message:l(t),callback:e})},t.Utils.prompt=function(t,e){i(),o.dialog.prompt({message:l(t),callback:e})},t.Utils.closeAlert=function(t){o.close(t.id)}}(Mibew,jQuery,_,vex,validator);