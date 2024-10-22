	

Runner.pages.PageSettings.addPageEvent('sgb_users_comments', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if( proxy["usergroup"] == "admin"){
	Runner.getControl(pageid,"name").makeReadonly(); 
	Runner.getControl(pageid,"email").makeReadonly(); 
};
});
	

Runner.pages.PageSettings.addPageEvent('sgb_users_comments', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[data-dbelement='"+pageObj.tName+"_list'] [data-field='blockip'] .btn").click(function(){
	var link = Runner.pages.getUrl("contributor","dashboard");
	$.post(link,{ipaction:$(this).data("action"),ip:$(this).data("ip")},function(response){
		location.reload();
	});
});;
});

//	AJAX snippets

// fields events
