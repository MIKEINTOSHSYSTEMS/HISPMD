$("document").ready(function() {
    Runner.customEvents = [];
    // every notifyInterval seconds we execute an AJAX requests that tells the server that user is still ont he page
    var notifyInterval = 5;

    // this function is executed on every page load, here we tell the server what page the user currently on

    function setPageTimer(pageObj) {
	// ajax- parameters with the page URL
        var notify_params = { pageOpen: 1, pageName: Runner.pages.getUrl(pageObj.shortTName,pageObj.pageType) };
	// if this is an Edit/View page we also pass an ID of the record
        if (pageObj.pageType === "edit" || pageObj.pageType === "view") notify_params.recordID = pageObj.keys[0];
	// we send AJAX request and get back trackerId value of the current log table recod
        $.get("", notify_params, function(TrackerID) {
	// send AJAX request with the current notifyInterval value, that tells the server the user is still on the page
            interval = setInterval(function() {
                $.get("", { TrackerID: TrackerID });
            }, notifyInterval * 1000);
        });
    }

    var originalInit = Runner.pages.RunnerPage.prototype.init;
  
    Runner.pages.RunnerPage.prototype.init = function() {
        var pageObj = this;
        var isTab = typeof this.tabControl !== "undefined";
	// check if the current page a details tab
        if (isTab) {

	if (!Runner.customEvents.includes(this.tName + "_" + this.pageType)) {
            Runner.customEvents.push(this.tName + "_" + this.pageType);
            pageObj.on("afterPageReady", function() {
                // when tab is closed we clear the interval counter
		pageObj.tabControl.off("hide.bs.tab").on("hide.bs.tab", function(e) {
                    clearInterval(interval);
                });
		// when details tab is open we start the counter
                pageObj.tabControl.off("show.bs.tab").on("show.bs.tab", function(e) {
                    var activeTab = $(e.target);
                    var panelContent = activeTab.parents("ul").next();
                    var activePanel = panelContent.find(".tab-pane.active");

                    setPageTimer(Runner.pages.PageManager.getById(activePanel.find(".r-form").attr("data-pageid")));

                });
            });
				}

        }

        if (!isTab || (isTab && this.$panel.parents(".tab-pane").hasClass("active"))) {
            setPageTimer(pageObj);
        }

        originalInit.call(this);
    }
});

// Place event code here.
// Use "Add Action" button to add code snippets.