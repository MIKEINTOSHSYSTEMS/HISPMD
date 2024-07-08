
Runner.pages.PageSettings.addPageEvent('MFR_Facilities',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){document.addEventListener("DOMContentLoaded",function(){var urlParams=new URLSearchParams(window.location.search);if(!urlParams.has('page')){urlParams.set('page','1');}
if(!urlParams.has('pagesize')){urlParams.set('pagesize','20');}
var newUrl=window.location.pathname+'?'+urlParams.toString();if(window.location.search!=='?'+urlParams.toString()){window.history.replaceState({},'',newUrl);}});;});