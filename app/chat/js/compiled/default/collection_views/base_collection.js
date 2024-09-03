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
!function(e,i,t){var n=function(i,n,o){var w=t.extend({model:i},o);if("function"!=typeof i.getModelType)return new n(w);var l=i.getModelType();return l&&e.Views[l]?new e.Views[l](w):new n(w)};e.Views.CollectionBase=i.Marionette.CollectionView.extend({childView:i.Marionette.ItemView,buildChildView:n}),e.Views.CompositeBase=i.Marionette.CompositeView.extend({buildChildView:n})}(Mibew,Backbone,_);