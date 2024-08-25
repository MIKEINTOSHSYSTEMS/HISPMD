
Runner.pages.PageSettings.addPageEvent('<global>',Runner.pages.constants.PAGE_LOGIN,"afterInit",function(pageObj,proxy,pageid){if(!proxy.haveLocation){if(navigator.geolocation){navigator.geolocation.getCurrentPosition(showPosition);}
function showPosition(position){$.post("menu.php",{lat:position.coords.latitude,lng:position.coords.longitude})}}});