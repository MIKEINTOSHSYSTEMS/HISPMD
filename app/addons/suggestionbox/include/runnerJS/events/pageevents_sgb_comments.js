	

Runner.pages.PageSettings.addPageEvent('sgb_comments', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	

$("a.mastertable .fa,a.mastertable .sLabel").click(function(e){
	e.stopPropagation();
	e.preventDefault();
	var a = $(this).parent();
	$.get("",{updateVoite:1},function(voite){
		var votes = parseInt($(".votes").html());
		$(".votes").html( votes + parseInt(voite) );
		a.toggleClass("votedup");
		if(a.hasClass("votedup")) showSubcribePopup();
	});
});
pageObj.inlineAdd.on("afterInit", function(pageObj, proxy, id, row, inlineObject) {
	pageObj.toggleItem("sgb_comments_countheader", false, id );
	pageObj.toggleItem("edit_comment", false, id );
	pageObj.toggleItem("sgb_comments_moderate_panel", false, id ); 
});
pageObj.inlineAdd.on("afterSubmit", function() {
	location.reload();
});
pageObj.inlineAdd.inlineAdd();
function showSubcribePopup(){
	Runner.displayPopup( {
		header: 'Voted up',
		width:600,
		height:300,
		url: Runner.pages.getUrl("sgb_notify","add") + "?sid="+pageObj.masterKeys.masterkey1,
		afterCreate: function(popup) {
			window.popup = popup;
		}
	});
}

if(proxy["usertype"] === "admin"){
	$(".fisrt_select").on("click",function(e){
		e.stopPropagation();
		$("[data-itemid$='_change']").removeClass("open");
		$(this).parent().toggleClass("open");
	});
	$(document).click(function (e){ 
		e.stopPropagation();
		if (!$(".select_list").is(e.target)) { 
			$(".select_list").parent().removeClass("open"); 
		}
	});

}

$("[data-itemid='sgb_status_change'] .select_list span[data-value],[data-itemid='sgb_category_change'] .select_list span[data-value]").click(function(){
	$(this).siblings().removeClass("active");
	$(this).addClass("active");
	var gparams = new Object;
	var ation = $(this).parent().data("action");
	gparams[ation] = $(this).data("value");
	gparams["label"] =  $(this).html();
	$.get("",gparams,function(txt){
		$("[data-itemid='sgb_change_info'] .alert").html(txt);
		$("[data-itemid='sgb_change_info']").show();
	});
	pageObj.toggleItem("sgb_change_info", true );
	

});

$(".status_buttons [data-status]").click(function(){
	$(this).siblings().removeClass("active");
	$(this).addClass("active");
	var commentid = $(this).parent().data("comment-id");
	$.get("",{commentid:commentid,updateStatus:$(this).data("status")},function(){
		
	});
});
if(typeof(proxy["commentid"]) !== "undefined"){
	$('html, body').animate({
        scrollTop: $("[data-id='"+proxy["commentid"]+"']").offset().top  // класс объекта к которому приезжаем
    }, 1); // Скорость прокрутки

}
;
});
	

Runner.pages.PageSettings.addPageEvent('sgb_comments', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if( proxy["usergroup"] == "admin"){
	Runner.getControl(pageid,"name").makeReadonly(); 
	Runner.getControl(pageid,"email").makeReadonly(); 
};
});
	

Runner.pages.PageSettings.addPageEvent('sgb_comments', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var url_params = Runner.getUrlParams();
if(!url_params.masterkey1){
	$("[data-itemid='edit_back_list'],[data-itemtype='edit_back_list'] a").off().on("click",function(){
		var link=document.createElement("a");
		link.href = Runner.pages.getUrl("sgb_admin_comments","list");
		link.click();
	});
}
;
});

//	AJAX snippets

// fields events
