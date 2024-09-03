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
!function(i,e){var n,t=!1,o=function(i){if(0!=e("#messages-region").size()){var n=e("#messages-region"),o=e("#avatar-region");if(t===!1||i){var s=0;e("body > *").each(function(){var i=e(this),n=i.offset(),t=i.height();s<n.top+t&&(s=n.top+t)}),t=s-n.height()}var a=e(window).height()-t;a<parseInt(n.css("minHeight"))||(n.height(a),o.size()>0&&o.height(n.innerHeight()))}},s=function(i){n&&clearTimeout(n),n=setTimeout(function(){o(i||!1)},0)};i.Application.Chat.addInitializer(function(){var n=e("img").size(),t=0,a=function(){t++,n==t&&(o(),e("#messages-region").scrollTop(e("#messages-region").prop("scrollHeight")),e(window).resize(s))};e("img").each(function(){var i=e(this);i.height()>0?a():i.load(a)}),i.Objects.Models.user.on("change:canPost",function(){s(!0)})})}(Mibew,jQuery);