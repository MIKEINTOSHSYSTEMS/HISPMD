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
!function(n,t){t(document).ready(function(){t("a.uninstall-link").click(function(){var i=t(this).attr("href"),a=n.Localization.trans('Are you sure that you want to uninstall plugin "{0}"?',t(this).data("plugin-name"));return n.Utils.confirm(a,function(n){n&&(window.location.href=i)}),!1})})}(Mibew,jQuery);