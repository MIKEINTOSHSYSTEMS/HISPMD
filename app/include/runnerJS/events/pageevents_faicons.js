
Runner.pages.PageSettings.addPageEvent('faicons',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){$(".r-record-body").click(function(){var lookup=$(this).find("[type^='lookupSelect']");if(lookup.size()>0)
lookup.click();});;});