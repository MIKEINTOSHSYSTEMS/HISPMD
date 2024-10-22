	

Runner.pages.PageSettings.addPageEvent('sgb_merge', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".fisrt_select").on("click",function(e){
	e.stopPropagation();
	$("[data-itemid$='_select']").removeClass("open");
	$(this).parent().toggleClass("open");

});
$(document).click(function (e){ 
		e.stopPropagation();
		if (!$(".select_list").is(e.target)) { 
			$(".select_list").parent().removeClass("open"); 
		}
});

if(window.mobileCheck()){
	/*$("[data-itemid='sgb_top_new_buttons']").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		if($(this).find(".select_list").size() == 0) $(this).append()
		var sib = $(this).siblings().first();
		if($(this).siblings().size() == 1) $(this).after( $(this).clone() );
		$(this).siblings().last().show();
	});*/
}
else{
	/*for desctop*/
	if($('[data-itemid="add"]').size() > 0){
		var element_position = $('[data-itemid="add"]').offset().top;
		$(window).on('scroll', function() {
			var y_scroll_pos = window.pageYOffset;
			var scroll_pos_test = element_position;
			if(y_scroll_pos > scroll_pos_test ) {
				//bottom corner
				if(!$('[data-itemid="add"]').hasClass("tobottom")){
					$('[data-itemid="add"]').css("opacity","0");
					$('[data-itemid="add"]').addClass("tobottom");
					$('[data-itemid="add"]').animate({opacity: "1"},"slow");
				}
			}
			else{
				//normal
				$('[data-itemid="add"]').removeClass("tobottom");
			}
		});
	}
}
$(".pina").click(function(){
	var r = new Object;
	r[$(this).data("action")] = $(this).data("id");
	$.get("",r,function(){
		location.reload();
	});
});
$(".showDeleted").click(function(){
	var val = ($(this).is(':checked'))?1:-1;
	$.get("",{showDeleted:val},function(){
		location.reload();
	});
});

;
});
	

Runner.pages.PageSettings.addPageEvent('sgb_merge', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var title = Runner.getControl(pageid, "title");
title.on("keyup", function() {
    var title = Runner.getControl(pageid, "title");
    title.on("keyup", function() {
        var value = encodeURI(this.getValue());
        var search_link = Runner.pages.getUrl("sgb_suggestions", "list");
        var request = { page: "already_posted", qs: value, criteria: "or", mode: "ajax", rndVal: 0.19472583117837705 };
        Runner.runnerAJAX(search_link, request, function(respObj) {
            var rhtm = $(respObj.html);
            $(".slist").html("");
            $.each(rhtm.find("span[data-field='title']"), function(i, title) {
                $(".slist").append($(title).html());
            });
            if (rhtm.find("span[data-field='title']").size() > 0)
                $("[data-itemid='sgb_already_posted']").addClass("show");
            else
                $("[data-itemid='sgb_already_posted']").removeClass("show");
            $(".sar a").attr("href", search_link + "?qs=" + value);
            $(".rcount span").html(rhtm.find("span[data-field='title']").size());

        });
    });
});;
});
	

Runner.pages.PageSettings.addPageEvent('sgb_merge', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".cancelmerge").click(function(){
   window.parent.popup.close();
});

;
});

//	AJAX snippets

// fields events
