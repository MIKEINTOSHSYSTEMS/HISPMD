
Runner.pages.PageSettings.addPageEvent('public.moh_indicator_data',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,"scope_id");if(ctrl.getValue()!="2")
pageObj.hideField("region_id");ctrl.on('change',function(){if(this.getValue()=="2"){pageObj.showField("region_id");}
else{pageObj.hideField("region_id");}});});Runner.pages.PageSettings.addPageEvent('public.moh_indicator_data',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,"scope_id");if(ctrl.getValue()!="2")
pageObj.hideField("region_id");ctrl.on('change',function(){if(this.getValue()=="2"){pageObj.showField("region_id");}
else{pageObj.hideField("region_id");}});});