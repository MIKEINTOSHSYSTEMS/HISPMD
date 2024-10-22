Runner.buttonEvents["sgb_splitSuggestion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'sgb_splitSuggestion';
	
	if ( !pageObj.buttonEventBefore['sgb_splitSuggestion'] ) {
		pageObj.buttonEventBefore['sgb_splitSuggestion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var popup = Runner.displayPopup( {
	url: Runner.pages.getUrl("sgb_split","edit") + "?editid1="+pageObj.masterKeys.masterkey1,
	width: 700,
	height: 800,
	header: 'Split suggestions',
	afterCreate: function(popup) {
		window.popup = popup;
	}
});
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['sgb_splitSuggestion'] ) {
		pageObj.buttonEventAfter['sgb_splitSuggestion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="sgb_splitSuggestion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "sgb_splitSuggestion" + "_" + Runner.genId();
		
		// create object
		var button_sgb_splitSuggestion = new Runner.form.Button({
			id: this.id ,
			btnName: "sgb_splitSuggestion"
		});
		
		// init
		button_sgb_splitSuggestion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

