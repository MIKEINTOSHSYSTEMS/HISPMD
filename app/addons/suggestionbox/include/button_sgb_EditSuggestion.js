Runner.buttonEvents["sgb_EditSuggestion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'sgb_EditSuggestion';
	
	if ( !pageObj.buttonEventBefore['sgb_EditSuggestion'] ) {
		pageObj.buttonEventBefore['sgb_EditSuggestion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
console.log(pageObj);
var link=document.createElement("a");

link.href=Runner.pages.getUrl("sgb_suggestions","edit")+"?editid1="+pageObj.masterKeys.masterkey1;
link.click();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['sgb_EditSuggestion'] ) {
		pageObj.buttonEventAfter['sgb_EditSuggestion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="sgb_EditSuggestion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "sgb_EditSuggestion" + "_" + Runner.genId();
		
		// create object
		var button_sgb_EditSuggestion = new Runner.form.Button({
			id: this.id ,
			btnName: "sgb_EditSuggestion"
		});
		
		// init
		button_sgb_EditSuggestion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

