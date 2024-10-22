	

Runner.pages.PageSettings.addPageEvent('sgb_admin_comments', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[data-itemid='sgb_admin_comments_filter'] select").change(function(){
	var link=document.createElement("a");
	link.href=$(this).val();
	link.click();
});

$("[data-itemid='grid_checkbox'] input,[data-itemid='grid_checkbox_head'] input").change(function(){
	if(pageObj.getSelectedRecords().length > 0)
		$("[data-itemid='sgb_admin_comments_mark'] .form-control").removeAttr("disabled");
	else
		$("[data-itemid='sgb_admin_comments_mark'] .form-control").attr("disabled");
});

$("[data-itemid='sgb_admin_comments_mark'] .form-control").change(function(){
	var flat_keys = pageObj.getSelectedRecordKeys().map(function(keys){
		return keys[0];
	});
	$.post("",{ids:flat_keys,change_status:$(this).val()},function(){
		location.reload();
	});
});


if(typeof(proxy["selected_status"])!=="undefined"){
	$("option[data-status='"+proxy["selected_status"]+"']").attr("selected","selected");
};
});

//	AJAX snippets

// fields events
