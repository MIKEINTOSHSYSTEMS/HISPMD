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
!function(e){var r=e.Application,o=r.module("Survey",{startWithParent:!1});o.addInitializer(function(o){var s=e.Objects,u=e.Objects.Models;s.surveyLayout=new e.Layouts.Survey,r.mainRegion.show(s.surveyLayout),u.surveyForm=new e.Models.SurveyForm(o.surveyForm),s.surveyLayout.surveyFormRegion.show(new e.Views.SurveyForm({model:u.surveyForm}))}),o.addFinalizer(function(){e.Objects.surveyLayout.destroy(),delete e.Objects.Models.surveyForm})}(Mibew);