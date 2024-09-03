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
!function(T){T.Models.Thread=T.Models.Base.extend({defaults:{id:0,token:0,lastId:0,userId:null,agentId:null,state:null},STATE_QUEUE:0,STATE_WAITING:1,STATE_CHATTING:2,STATE_CLOSED:3,STATE_LOADING:4,STATE_LEFT:5,STATE_INVITED:6})}(Mibew);