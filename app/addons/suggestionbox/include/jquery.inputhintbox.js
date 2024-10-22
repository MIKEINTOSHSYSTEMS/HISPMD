/**
 * Input Floating Hint Box - jQuery plugin 1.1 Beta
 *
 * Copyright (c) 2008 Nicolae Namolovan (nicolae.namolovan gmail.com)
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Revision: 20
 * @xlineSoft patched
 */
 
/**
 * Home page http://nicolae.namolovan.googlepages.com/jquery.inputHintBox.html
 * Demo http://nicolae.namolovan.googlepages.com/jquery.inputHintBox.demo.html

 * Provide an automatic box hint in the right side of a input when user click it, it disapear when focus change (blur)
 *
 * The source(@source) of the text/html can be an attribute (title for example), or a pure html.
 * Attribute can contain escaped html, example: title="This will be &lt;b&gt;Bold&lt;/b&gt;"
 *
 * All hints can use one div element(@div option) with your custom design, and only some subelement of 
 * this @div will change (according to source).
 *
 * You can provide only the @className, and for each input a separate <div> element will be created
 * with @className as class.
 *
 * If user click on the box to select some text (for copy/paste for example), box will not disappear.
 *
 * If you need to make the box appear in more left, use incrementLeft, same for top - incrementTop,
 * you can use - sign if you want to decrement.
 **/

/**
 * Provide a hint box near input as a absolute positioned div.
 * @name InputHintBox
 * @cat Plugins/Forms
 * @type $
 * @param Map options Optional settings
 * @option jQueryDom @div box to show, if this is set then className do not apply
 * @option String @div_sub css selector, use this when you need to write the Dynamic html into a element Inside the @div box,
 							example: .body, this will search for .body in context of @div
 * @option String @className This class will be added to the dynamic created div box. Default: "input_hint_box"
 * @option String @source Source of box message text html: attr | html, Default: "attr"
 * @option String @attr If @source = "attr" then html will be taken from the attribute named @attr. Default: "title"
 * @option String @html If @source = "html" them html will be taken from @html
 * @option Integer @incrementLeft This value will be incremented to the left property of the absolute positioned hint box. Default: 0
 * @option Integer @incrementTop This value will be incremented to the top property of the absolute positioned hint box. Default: 0
 * @option String @attachTo Hint box will be appended to this. Default: "body"
 */

(function($) {
$.fn.inputHintBox = function(options) {
	options = $.extend({}, $.inputHintBoxer.defaults, options);
	
	this.each(function(){
		new $.inputHintBoxer(this,options);
	});
	return this;
}

$.inputHintBoxer = function( input, options ) {
	//$guideObject - in left of this object hint box will be positioned
	var $guideObject = $(options.el || input),
		$input = $(input), 
		box, 
		boxMouseDown = false, 
		html = '';
	
	// If @type=radio then it must be inside a label and we should put the hint box in the right side of the label
	if ( ($guideObject.attr('type') == 'radio' || $guideObject.attr('type') == 'checkbox') && $guideObject.parent().is('label') ) {
		$guideObject = $guideObject.parent();
	}

	function init() {
		var boxHtml;
		
		boxHtml = options.html || ( options.source == 'attr' ? $input.attr( options.attr ) : '' );
		boxHtml = boxHtml === undefined ? '' : boxHtml;
		
		box = options.div || $("<div/>").addClass( options.className );
		box.css('display', 'none').addClass('_hintBox')
			.appendTo( options.attachTo );
		
		if ( options.isFly ) {
			box.css('z-index', Runner.genZIndexMax());
		}
		
		$input
			.click( function() {
				$(this).trigger("focus");
			})
			.focus( function() {
				box.data("inUse", true);
				$('body').bind("mousedown", global_mousedown_listener);
				box.data("tooltip", boxHtml);
				show();
			})
			.blur( function() {
				box.data("inUse", false);
				prepare_hide();
			})
			.bind('mouseenter', function(e) {
				if ( box.data("inUse") ) {
					return;
				}
				
				$('body').bind("mousedown", global_mousedown_listener);		
				box.data("tooltip", boxHtml);
				show();
			})
			.bind('mouseleave', function(e) {
				if ( box.data("inUse") ) {
					return;
				}
				
				prepare_hide();
			});
	}
	/**
	 * This is evaluated each time to prevent probs with elements with display none
	 * Sets the tooltip's position
	 */
	function align() {
		var offset = $guideObject.offset();

		box.css({
			position:"absolute",
			top: offset.top + "px", 
			left: offset.left + ( Runner.isDirRTL() ? -box.outerWidth() : $guideObject.outerWidth() ) + options.incrementLeft + "px"
		});
	}
	
	function show() {		
		clearTimeout( $.inputHintBoxer.mostRecentHideTimer );

		var $tooltipBox = options.div_sub ? $(options.div_sub, box) : box;
		
		$('div.shiny_box').hide();
		align();
		$tooltipBox.html( box.data("tooltip") );
		
		if ( $guideObject.offset().top > 0 ) {
			box.show();
		}
	}
	
	function prepare_hide( noTimeout ) {
		// We want to allow user to select and copy/paste content from the box
		// So delay a bit to see where user click
		$('body').click( global_click_listener );
		if ( boxMouseDown ) { 
			return;
		}
		
		if ( noTimeout ) {
			hide( true );
			return;
		} 
		$.inputHintBoxer.mostRecentHideTimer = setTimeout( function() {
			hide()
		}, 300);			
	}
	
	var global_click_listener = function(e) {
		var $e = $( e.target );
		
		clearTimeout( $.inputHintBoxer.mostRecentHideTimer );
		if ( !$e.closest('.titleHintBox').length && !$e.closest('._hintBox').length ) {
			hide();
		}
	};
	
	// Prevent hiding when selecting..
	// When user Select a text to select, a Mousedown is fired BEFORE blur of input
	// This why we need to know when a Mousedown is done to our object
	var global_mousedown_listener = function(e) {
		var $e = $( e.target );
		
		boxMouseDown = $e.parents('._hintBox').length || $e.is('._hintBox');
	};
	
	function hide( noTimeout ) {
		clearTimeout( $.inputHintBoxer.mostRecentHideTimer );

		$('body').unbind('click', global_click_listener)
			.unbind('mousedown', global_mousedown_listener);

		noTimeout ? box.hide() : box.fadeOut('fast');	
	};
	
	init();
};

$.inputHintBoxer.mostRecentHideTimer = 0;

$.inputHintBoxer.defaults = {
	div: '',
	className: 'input_hint_box',
	source: 'attr', // attr or html
	div_sub: '', // Where to write
	attr: 'title',
	html: '',
	incrementLeft: 0,
	incrementTop: 0,
	attachTo: 'body'
}
})(jQuery);