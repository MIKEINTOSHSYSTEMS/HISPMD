
Runner.pages.PageSettings.addPageEvent('public.moh_indicator_data',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,"scope_id");if(ctrl.getValue()!="2")
pageObj.hideField("region_id");ctrl.on('change',function(){if(this.getValue()=="2"){pageObj.showField("region_id");}
else{pageObj.hideField("region_id");}});var dataSourceCtrl=Runner.getControl(pageid,"data_source_id");if(dataSourceCtrl.getValue()!="1"){pageObj.hideField("data_source_detail");}
dataSourceCtrl.on('change',function(){if(this.getValue()=="1"){pageObj.showField("data_source_detail");}else{pageObj.hideField("data_source_detail");}});});Runner.pages.PageSettings.addPageEvent('public.moh_indicator_data',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,"scope_id");if(ctrl.getValue()!="2")
pageObj.hideField("region_id");ctrl.on('change',function(){if(this.getValue()=="2"){pageObj.showField("region_id");}
else{pageObj.hideField("region_id");}});});