Runner.buttonEvents["Add_Comment"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Add_Comment';
	
	if ( !pageObj.buttonEventBefore['Add_Comment'] ) {
		pageObj.buttonEventBefore['Add_Comment'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var eventParams = {
    tName: "kbcomments",
    pageType: Runner.pages.constants.PAGE_ADD,
    pageId: -1,
    destroyOnClose: true,
    parentPage: pageObj,
    modal: true,
    editType: Runner.pages.constants.ADD_POPUP,
    baseParams: {
        parId: pageObj.id,
        table: pageObj.tName,
        editType: Runner.pages.constants.ADD_POPUP,
        mastertable: pageObj.tName,
        masterkey1: pageObj.keys[0]
    },
    afterSave: {
        fn: function (respObj, formObj, fieldControls, addPageObj) {
				location.reload();
        }
    },
    scope: pageObj
}
//Runner.Event.prototype.stopEvent(e);
Runner.pages.PageManager.openPage(eventParams);
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Add_Comment'] ) {
		pageObj.buttonEventAfter['Add_Comment'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="Add_Comment"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Add_Comment" + "_" + Runner.genId();
		
		// create object
		var button_Add_Comment = new Runner.form.Button({
			id: this.id ,
			btnName: "Add_Comment"
		});
		
		// init
		button_Add_Comment.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

