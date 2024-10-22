	

Runner.pages.PageSettings.addPageEvent('sgb_admin_suggestions', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[data-itemid='moderate_filter_status'] select").change(function(){
	var link=document.createElement("a");
	link.href=$(this).val();
	link.click();
});

$("[data-itemid='grid_checkbox'] input,[data-itemid='grid_checkbox_head'] input").change(function(){
	if(pageObj.getSelectedRecords().length > 0)
		$("[data-itemid='sgb_moderate_mark_as'] .form-control").removeAttr("disabled");
	else
		$("[data-itemid='sgb_moderate_mark_as'] .form-control").attr("disabled");
});

$("[data-itemid='sgb_moderate_mark_as'] .form-control").change(function(){
	var flat_keys = pageObj.getSelectedRecordKeys().map(function(keys){
		return keys[0];
	});
	$.post("",{ids:flat_keys,change_status:$(this).val()},function(){
		location.reload();
	});
});

;
});

//	AJAX snippets

// fields events
