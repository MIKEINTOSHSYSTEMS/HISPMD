$("document").ready(function () {
    Runner.customEvents = [];
    var notifyInterval = 5;

    function setPageTimer(pageObj) {
        var notify_params = { pageOpen: 1, pageName: Runner.pages.getUrl(pageObj.shortTName, pageObj.pageType) };

        if (pageObj.pageType === "edit" || pageObj.pageType === "view") {
            notify_params.recordID = pageObj.keys[0];
        }

        $.get("", notify_params, function (TrackerID) {
            if (TrackerID) {
                interval = setInterval(function () {
                    $.get("", { TrackerID: TrackerID });
                }, notifyInterval * 1000);
            }
        });
    }

    var originalInit = Runner.pages.RunnerPage.prototype.init;

    Runner.pages.RunnerPage.prototype.init = function () {
        var pageObj = this;
        var isTab = typeof this.tabControl !== "undefined";

        if (isTab) {
            if (!Runner.customEvents.includes(this.tName + "_" + this.pageType)) {
                Runner.customEvents.push(this.tName + "_" + this.pageType);
                pageObj.on("afterPageReady", function () {
                    pageObj.tabControl.off("hide.bs.tab").on("hide.bs.tab", function (e) {
                        clearInterval(interval);
                    });
                    pageObj.tabControl.off("show.bs.tab").on("show.bs.tab", function (e) {
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
