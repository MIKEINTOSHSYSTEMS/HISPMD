	

Runner.pages.PageSettings.addPageEvent('sgb_notify', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".cancelmerge").click(function(){
   window.parent.popup.close();
});

;
});

//	AJAX snippets

// fields events
