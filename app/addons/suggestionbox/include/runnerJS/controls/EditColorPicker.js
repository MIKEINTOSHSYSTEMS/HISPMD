Runner.controls.EditColorPicker = Runner.extend( Runner.controls.Control, {
	myVal: "value of my Field: ", 
	
	/**
	 * Override constructor
	 * @param {Object} cfg
	 */
	constructor: function( cfg ) {		
		this.addEvent( ["change", "keyup"] );		
		// call parent
		Runner.controls.EditColorPicker.superclass.constructor.call( this, cfg );
		
		this.myVal = this.getFieldSetting("myVal");
		$("#" + this.valContId).miniColors({
			letterCase: 'uppercase'
		});		
	},
	
	/**
	 * Clone html for iframe submit
	 * @return {array}
	 */
	getForSubmit: function() {
		if ( !this.appearOnPage() ) {
			return [];
		}
		
		return [ this.valueElem.clone().val( this.getValue() ) ];
	},
	
	setFocus: function() {
		return false;
	}
});

Runner.controls.constants["EditColorPicker"] = "EditColorPicker"; 



