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
!function(i,e){i.Models.Status=i.Models.Base.extend({defaults:{visible:!0,weight:0,hideTimeout:4e3,title:""},initialize:function(){this.hideTimer=null},autoHide:function(i){var t=i||this.get("hideTimeout");this.hideTimer&&clearTimeout(this.hideTimer),this.hideTimer=setTimeout(e.bind(function(){this.set({visible:!1})},this),t)}})}(Mibew,_);