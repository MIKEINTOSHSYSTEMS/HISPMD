	

Runner.pages.PageSettings.addPageEvent('sgb_users_suggestions', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
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
	

Runner.pages.PageSettings.addPageEvent('sgb_users_suggestions', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[data-dbelement='"+pageObj.tName+"_list'] [data-field='blockip'] .btn").click(function(){
	var link = Runner.pages.getUrl("contributor","dashboard");
	$.post(link,{ipaction:$(this).data("action"),ip:$(this).data("ip")},function(response){
		location.reload();
	});
});;
});

//	AJAX snippets

// fields events
