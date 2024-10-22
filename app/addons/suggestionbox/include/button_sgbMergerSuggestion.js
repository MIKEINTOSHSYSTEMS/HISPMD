Runner.buttonEvents["sgbMergerSuggestion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'sgbMergerSuggestion';
	
	if ( !pageObj.buttonEventBefore['sgbMergerSuggestion'] ) {
		pageObj.buttonEventBefore['sgbMergerSuggestion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var popup = Runner.displayPopup( {
	url: Runner.pages.getUrl("sgb_merge","edit") + "?editid1="+pageObj.masterKeys.masterkey1,
	width: 700,
	height: 800,
	header: 'Merge suggestions',
	afterCreate: function(popup) {
		window.popup = popup;
	}
});
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['sgbMergerSuggestion'] ) {
		pageObj.buttonEventAfter['sgbMergerSuggestion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="sgbMergerSuggestion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "sgbMergerSuggestion" + "_" + Runner.genId();
		
		// create object
		var button_sgbMergerSuggestion = new Runner.form.Button({
			id: this.id ,
			btnName: "sgbMergerSuggestion"
		});
		
		// init
		button_sgbMergerSuggestion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

