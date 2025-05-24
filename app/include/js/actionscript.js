var element = false,
	elementhelp,
	fieldname,
	groupname,
	numChange = 0,
	styleChange = '<attr value="arr">',
	target = 'all';

function getStyleObject(type, glob){
	
    var styleChangeLocal = '<attr value="params">';
    if (type == 'cell'){

        el = $(element);
        var fn=0,gn=0;
        if($(element).attr('fieldname')!=undefined)
            fn=$(element).attr('fieldname');
        if($(element).attr('groupname')!=undefined)
            gn=$(element).attr('groupname');
        
        styleChangeLocal += '<attr value="fieldName">' + fn + '</attr>';
        styleChangeLocal += '<attr value="groupName">' + gn + '</attr>';
        if ($(element).attr('uniqe') != '' && $(element).attr('uniqe') != undefined) styleChangeLocal += '<attr value="uniq">' + $(element).attr('uniqe') + '</attr>';
        else styleChangeLocal += '<attr value="uniq">0</attr>';
    }
    else if (type == 'field'){
        el = $('[fieldname=' + $(element).attr('fieldname') + ']');
        styleChangeLocal += '<attr value="fieldName">' + $(element).attr('fieldname') + '</attr>';
        styleChangeLocal += '<attr value="groupName">0</attr>';
        styleChangeLocal += '<attr value="uniq">0</attr>';
    }
    else if (type == 'group'){
        el = $('[groupname=' + $(element).attr('groupname') + ']');
        styleChangeLocal += '<attr value="groupName">' + $(element).attr('groupname') + '</attr>';
        styleChangeLocal += '<attr value="fieldName">0</attr>';
        styleChangeLocal += '<attr value="uniq">0</attr>';
    }
    else if (type == 'table'){
        el = $(element);
        styleChangeLocal += '<attr value="groupName">0</attr>';
        styleChangeLocal += '<attr value="fieldName">0</attr>';
        styleChangeLocal += '<attr value="uniq">0</attr>';
    }
		
    var str = new Array,
		str_type = new Array,
		t = 0;
		
    if (el.css('font') && ((glob == "all") || (glob == "font"))){ str[t] = 'font: ' + el.css('font') + '; '; str_type[t] = "font"; t++;}
    if (el.css('fontStyle') && ((glob == "all") || (glob == "fontStyle") || (glob == "font"))){ str[t] = 'font-style: ' + el.css('fontStyle') + '; '; str_type[t] = "fontStyle"; t++;}
    if (el.css('fontWeight') && ((glob == "all") || (glob == "fontWeight")) || (glob == "font")){ str[t] = 'font-weight: ' + el.css('fontWeight') + '; '; str_type[t] = "fontWeight"; t++;}
    if (el.css('color') && ((glob == "all") || (glob == "color"))){ str[t] = 'color: ' + el.css('color') + '; '; str_type[t] = "color"; t++;}
	if (el.css('background') && ((glob == "all") || (glob == "background") || (glob == "backgroundColor"))){ str[t] = 'background: ' + el.css('background') + '; '; str_type[t] = "background"; t++;}
	if (el.css('backgroundColor') && ((glob == "all") || (glob == "background") || (glob == "backgroundColor"))){ str[t] = 'background-color: ' + el.css('backgroundColor') + '; '; str_type[t] = "backgroundColor"; t++;}
    if (el.css('fontFamily') && ((glob == "all") || (glob == "fontFamily"))){ str[t] = 'font-family: ' + el.css('fontFamily') + '; '; str_type[t] = "fontFamily"; t++;}
    if (el.css('fontSize') && ((glob == "all") || (glob == "fontSize"))){ str[t] = 'font-size: ' + el.css('fontSize') + '; '; str_type[t] = "fontSize"; t++;}
    if (el.css('textAlign') && ((glob == "all") || (glob == "textAlign"))){ str[t] = 'text-align: ' + el.css('textAlign') + '; '; str_type[t] = "textAlign"; t++;}
    if (el.css('padding') && ((glob == "all") || (glob == "padding"))){ str[t] = 'padding: ' + el.css('padding') + '; '; str_type[t] = "padding"; t++;}
	
	
//    for (var n in str) {
	for (var n=0;n<str.length;n++) {
        styleChange +='<attr value="'+numChange+'">';
        styleChange += styleChangeLocal;
        styleChange += '<attr value="styleStr">' + str[n] + '</attr>';
        styleChange += '<attr value="styleType">' + str_type[n] + '</attr>';
        styleChange += '</attr>'
        styleChange += '<attr value="type">' + type + '</attr>';
        styleChange += '</attr>'
			
        numChange++; n++;
    }
}
	
function replace_string(txt,cut_str,paste_str){
    var f=0;
    var ht='';
    ht = ht + txt;
    f=ht.indexOf(cut_str);
    while (f!=-1){
        f=ht.indexOf(cut_str);
        if (f>0){
            ht = ht.substr(0,f) + paste_str + ht.substr(f+cut_str.length);
        };
    };
    return ht;
};
	
function cleanaligntable(){
    $('#aligntable td').each(function (){
        $(this).css('border','1px solid black').css('margin',2);
    });
}

function applyToSomething(targetCss,targetField){

	var targetToSomeField = '';
    if (targetField == 'field') {
        targetToSomeField = '[fieldname=' + fieldname + ']';
    } else if (targetField == 'group') {
        targetToSomeField = '[groupname=' + groupname + ']';
    } else if (targetField == 'table') {
        targetToSomeField = '#legend td';
    }

    if (targetCss == 'all'){
        $(targetToSomeField).css('textAlign', $(element).css('textAlign'));
        $(targetToSomeField).css('fontWeight', $(element).css('fontWeight'));
        $(targetToSomeField).css('fontStyle', $(element).css('fontStyle'));
        var str = $(element).css('paddingTop') + ' '
            + $(element).css('paddingRight') + ' '
            + $(element).css('paddingBottom') + ' '
            + $(element).css('paddingLeft') + ' ';
        $(targetToSomeField).css('padding', str);
        $(targetToSomeField).css('color', $(element).css('color'));
        $(targetToSomeField).css('fontSize', $(element).css('fontSize'));
        $(targetToSomeField).css('fontFamily', $(element).css('fontFamily'));
        $(targetToSomeField).css('background', $(element).css('background'));
    } else if (targetCss == 'font'){
        $(targetToSomeField).css('fontWeight', $(element).css('fontWeight'));
        $(targetToSomeField).css('fontStyle', $(element).css('fontStyle'));
    } else if (targetCss == 'padding'){
        var str = $(element).css('paddingTop') + ' '
            + $(element).css('paddingRight') + ' '
            + $(element).css('paddingBottom') + ' '
            + $(element).css('paddingLeft') + ' ';
        $(targetToSomeField).css('padding', str);
    }
    else { 
        $(targetToSomeField).css(targetCss, $(element).css(targetCss));
    }
    getStyleObject(targetField,targetCss);
}

function fun(type){
    
	element = type;
    groupname = $(element).attr("groupname");
    fieldname = $(element).attr("fieldname");

    cleanaligntable();

    var str;
    if (($(element).css('textAlign') == '') || ($(element).css('textAlign') == 'start')  || ($(element).css('textAlign') == 'auto')) {
        str = 'left';
    } else { 
        str = $(element).css('textAlign');
    }

    $('#' + str).css('border','3px solid black').css('margin',2);
	$("#fontfamily").html("default");
	if ($(element).css("fontFamily")) {
		$("#fontfamilyselect table td").each(function(){
			if ($(element).css("fontFamily") == $(this).html())
				$("#fontfamily").html($(this).html());
		});
	}
	$("#fontsize").html("default");
    if ($(element).css("fontSize")) {
		$("#fontsizeselect table td").each(function(){
			if ($(element).css("fontSize") == $(this).html())
				$("#fontsize").html($(this).html());
		});
	}
	$("#padding").html("default");
    if ($(element).css("paddingLeft")) {
		$("#paddingselect table td").each(function(){
			if ($(element).css("paddingLeft") == $(this).html())
				$("#padding").html($(this).html());
		});
	}

    if ($(element).css('fontStyle') == 'italic') {
        $("#italic").attr('checked','checked');
    } else {
        $("#italic").removeAttr('checked'); 
    }
    if ($(element).css('fontWeight') == 'bold' || $(element).css('fontWeight')=='700') {
        $("#bold").attr('checked','checked');
    } else {
        $("#bold").removeAttr('checked');
    }

    $('#picker1').attr("color1", $(element).css('color')).css('background-color', $(element).css('color')).html(''); 
    $('#picker2').attr("color1", $(element).css('background-color')).css('background-color', $(element).css('background-color')).html('');
    $("#params").show();
	
}

function changeact(act,value,td){
	if($("#crosstable").val())
	{
		fieldname=$(element).attr("fieldname");
		if(act=='background')
		{
			$("td[fieldname="+fieldname+"]").css(act,value);
			$("td[fieldname="+fieldname+"]").find("div").css("border","0px");
			$(element).find("div").css('border','2px solid red');
		}
		else 
		{
			if (act == 'textAlign')
			{ 
				cleanaligntable();
				$(td).css('border','3px solid black');
			}
			$("td[fieldname="+fieldname+"]").css(act,value);
		}
		getStyleObject("field", act);
	}
	else
	{
		if (act == 'font') {
			value = replace_string(value,',',' ') + ' ' + $(element).css('fontSize') + ' sans-serif';
		}else if (act == 'textAlign'){ 
			cleanaligntable();
			$(td).css('border','3px solid black');
		}
		$(element).css(act,value);
		getStyleObject("cell", act);
	}
}

var tdborder,
	group = new Array(
		'', 
		Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_WR_HEADER, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_COUNT, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_AVG, 
		Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_WR_HEADER, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_COUNT, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_AVG, 
		Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_WR_HEADER, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_COUNT, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_AVG,
		Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_WR_HEADER, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_COUNT, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_AVG, 
		Runner.lang.constants.TEXT_WR_TOTAL_DATA, 
		Runner.lang.constants.TEXT_PAGE_SUMMARY, Runner.lang.constants.TEXT_PAGE_SUMMARY+' '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_PAGE_SUMMARY+' '+ Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_PAGE_SUMMARY+' '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_PAGE_SUMMARY+' '+Runner.lang.constants.TEXT_AVG, 
		Runner.lang.constants.TEXT_GLOBAL_SUMMARY, Runner.lang.constants.TEXT_GLOBAL_SUMMARY+' '+Runner.lang.constants.TEXT_MIN, Runner.lang.constants.TEXT_GLOBAL_SUMMARY+' '+Runner.lang.constants.TEXT_MAX, Runner.lang.constants.TEXT_GLOBAL_SUMMARY+' '+Runner.lang.constants.TEXT_SUM, Runner.lang.constants.TEXT_GLOBAL_SUMMARY+' '+Runner.lang.constants.TEXT_AVG,
		Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 1 '+Runner.lang.constants.TEXT_WR_SUMMARY, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 2 '+Runner.lang.constants.TEXT_WR_SUMMARY, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 3 '+Runner.lang.constants.TEXT_WR_SUMMARY, Runner.lang.constants.TEXT_WR_CROSS_GROUP+' 4 '+Runner.lang.constants.TEXT_WR_SUMMARY, Runner.lang.constants.TEXT_FIELD+' '+Runner.lang.constants.TEXT_WR_HEADER
	);
	
$(document).ready(function(){
	$(".selectstyle")
		.mouseover(
			function (){
				$(this).css('backgroundColor','rgb(146, 190, 235)').parent().css('backgroundColor','rgb(146, 190, 235)');
			})
		.mouseout( 
			function (){
				$(this).css('backgroundColor','rgb(244, 247, 251)').parent().css('backgroundColor','rgb(244, 247, 251)');
			});

/* font family
 *------------------------------------------------------------------*/
	var timeoutfamily	 = 300,
		closetimerfamily = 0;
	$(".selectorfamily, #fontfamily").click(function(){
		$("#fontfamilyselect").show();
	}).mouseout(function(){
		closetimerfamily = window.setTimeout("$(\"#fontfamilyselect\").hide();", timeoutfamily);
	}).mouseover(function(){
		if(closetimerfamily) {
			window.clearTimeout(closetimerfamily);
			closetimerfamily = null;
		}
	});
	$("#fontfamilyselect table").mouseout(function(){
		closetimerfamily = window.setTimeout("$(\"#fontfamilyselect\").hide();", timeoutfamily);
	}).mouseover(function(){
		if(closetimerfamily) {
			window.clearTimeout(closetimerfamily);
			closetimerfamily = null;
		}
	});
	$("#fontfamilyselect table td").click(function(){
		if ($(this).html() != 'define') 
			changeact('fontFamily',$(this).html());
		else changeact('fontFamily','');
		$("#fontfamily").html($(this).html());
		$("#fontfamilyselect").hide();
	});
/*-------------------------------------------------------*/

/* font size
 *------------------------------------------------------------------*/
	var timeoutsize	 = 300,
		closetimersize = 0;
	$(".selectorfontsize,#fontsize").click(function(){
		$("#fontsizeselect").show();
	}).mouseout(function(){
		closetimersize = window.setTimeout("$(\"#fontsizeselect\").hide();", timeoutsize);
	}).mouseover(function(){
		if(closetimersize) {
			window.clearTimeout(closetimersize);
			closetimersize = null;
		}
	});
	$("#fontsizeselect table").mouseout(function(){
		closetimersize = window.setTimeout("$(\"#fontsizeselect\").hide();", timeoutsize);
	}).mouseover(function(){
		if(closetimersize) {
			window.clearTimeout(closetimersize);
			closetimersize= null;
		}
	});
	$("#fontsizeselect table td").click(function(){
		if ($(this).html() != 'define') 
			changeact('fontSize',$(this).html());
		else changeact('fontSize','');
		$("#fontsize").html($(this).html());
		$("#fontsizeselect").hide();
	});
/*-------------------------------------------------------*/

/* padding
 *------------------------------------------------------------------*/
	var timeoutpadding	 = 300,
		closetimerpadding = 0;
	$(".selectorpadding,#padding").click(function(){
		$("#paddingselect").show();
	}).mouseout(function(){
		closetimerpadding = window.setTimeout("$(\"#paddingselect\").hide();", timeoutpadding);
	}).mouseover(function(){
		if(closetimerpadding) {
			window.clearTimeout(closetimerpadding);
			closetimerpadding = null;
		}
	});
	$("#paddingselect table").mouseout(function(){
		closetimerpadding = window.setTimeout("$(\"#paddingselect\").hide();", timeoutpadding);
	}).mouseover(function(){
		if(closetimerpadding) {
			window.clearTimeout(closetimerpadding);
			closetimerpadding= null;
		}
	});
	$("#paddingselect table td").click(function(){
		if ($(this).html() != 'define') 
			changeact('padding',$(this).html());
		else changeact('padding','');
		$("#padding").html($(this).html());
		$("#paddingselect").hide();
	});
/*-------------------------------------------------------*/
	
	$("#default").click(function(){
		$.cookie('position_top',$("#example").css("top"),{'expires': 10000});	
		$.cookie('position_left',$("#example").css("left"),{'expires': 10000});	
		$.ajax({
			type: "POST",
			url: Runner.getPageUrl("save-style"),
			data: {
				repname: $("#location").attr('src'),
				str_xml: 'del_all'
			},
			success: function(msg){
				window.location.reload();
			}
		});
	});

	
	$('#legend td').click(function(){
        if (tdborder){
			$('div',tdborder).css('border','2px solid '+$(tdborder).css("backgroundColor"));
		}
        tdborder = this;
		$('div',tdborder).css('border','2px solid red');
    });     
    
    $("#example").hide();

    $("#colorPickerVtd td").each(function(){
        $(this).css("border","1px solid " + $(this).css("backgroundColor"));
    })
		.css("cursor","pointer");
	$(".ColorPickerDivSample").css("cursor","pointer");

    $("#headerpanel").css("textAlign",'center');
    $("#middlepanel").css("textAlign",'center');
    $("#headerpanel td").css("textAlign",'center');

    $("#legend td img, .legend td img").hide();
    $("#legend td, .legend td").click(function (){fun(this);})
    .each(function (){
        var str = $(this).html();
		$(this).html('<div style="border: 2px solid '+$(this).css("backgroundColor")+'">'+$(this).html()+'</div>');
		if (($(this).attr('groupname') == 1) || ($(this).attr('groupname') == 7) || ($(this).attr('groupname') == 13) || ($(this).attr('groupname') == 19) || ($(this).attr('groupname') == 26) || ($(this).attr('groupname') == 31) || ($(this).attr('groupname') == 36) || ($(this).attr('groupname') == 37) || ($(this).attr('groupname') == 38) || ($(this).attr('groupname') == 39)){
			$('div',this).html(group[$(this).attr('groupname')]);
		}
		else if (($(this).attr('groupname') != 40 && $('div',this).html()!="&nbsp;")){
			$('div',this).html('[text]');
		}
		//$(this).html('<div style="border: 2px solid '+$(this).css("backgroundColor")+'">'+group[$(this).attr('groupname')]+'</div>');
		//if ($(this).attr('groupname') != 40)
            //$(this).html('<div style="border: 2px solid '+$(this).css("backgroundColor")+'">[text]</div>');		
    });

    $("#example").draggable({handle: "#wnd_header"})
		.css("top", $(document).height() - $("#example").height() - 150)
		.css("left", $(document).width()/2 - $("#example").width()/2)		
		.parent().parent()
		.css("border","1px solid black");
	if ($.cookie('position_top')) {
		$("#example").css('top',$.cookie('position_top'));
		$.cookie('position_top',null);
	}
	if ($.cookie('position_left')) {
		$("#example").css('left',$.cookie('position_left'));
		$.cookie('position_top',null);
	}
    $("#legend td:first").click();

    $("#groupSelectField").hover(
		function (){
			$('[fieldname=' + fieldname + ']').each(function(){
				$('div',this).css('border','2px solid red');
			});
		}, 
		function (){
			$('[fieldname=' + fieldname + ']').each(function(){
				$('div',this).css('border','2px solid '+$(this).css("backgroundColor"));
			});
			$('div',element).css('border','2px solid red');
		}
	);
    $("#groupSelectGroup").hover(
		function (){
			$('[groupname=' + groupname + ']').each(function(){
				$('div',this).css('border','2px solid red');
			});
		}, 
		function (){
			$('[groupname=' + groupname + ']').each(function(){
				$('div',this).css('border','2px solid '+$(this).css("backgroundColor"));
			});
			$('div',element).css('border','2px solid red');
		}
	);

       $("#bold").click(function(){
        if ($("#bold").attr("checked")) 
		{
			$(element).css('fontWeight','bold');
			if($("#crosstable").val())
				$("td[fieldname="+$(element).attr("fieldname")+"]").css('fontWeight','bold');
		}
        else 
		{
			$(element).css('fontWeight','normal');
			if($("#crosstable").val())
				$("td[fieldname="+$(element).attr("fieldname")+"]").css('fontWeight','normal');
		}
		if(!$("#crosstable").val())
			getStyleObject('cell', 'fontWeight');
		else
			getStyleObject('field', 'fontWeight');
    });

    $("#italic").click(function(){
        if ($("#italic").attr("checked")) 
		{
			$(element).css('fontStyle','italic');
			if($("#crosstable").val())
				$("td[fieldname="+$(element).attr("fieldname")+"]").css('fontStyle','italic');
		}
        else 
		{	
			$(element).css('fontStyle','normal');
			if($("#crosstable").val())
				$("td[fieldname="+$(element).attr("fieldname")+"]").css('fontStyle','normal');
		}
		if(!$("#crosstable").val())
			getStyleObject('cell', 'fontStyle');
		else
			getStyleObject('field', 'fontStyle');
    });	

    $("#load").hide();
    $("#legend, #example, .legend").show();

    $("#legend td, .legend td").click(function(){
        $("#example").parent().parent().css('display','block');
        $(this).toggleClass("active"); return false;
    });

var timeoutpicker	 = 300,
	closetimerpicker = 0,
	div_id=0;
	
/* Color picker
 *------------------------------------------------------------------*/	
	
	$(".selector,#picker2,#picker1").click(function(){
		
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		
		/*$(".ColorPickerDivSample").each(function(){
			this.active = "no";
		});*/
		
		var activeDiv = $("div.ColorPickerDivSample.active"), colorPicker = $("#colorPickerVtd"),
			currentDiv = $("div.ColorPickerDivSample", $(this).parents("tr").eq(0));
		if(activeDiv.length){
			activeDiv.css("background-color", activeDiv.attr("color1"));
			activeDiv.removeClass("active");
		}
		
		div_id = currentDiv[0].id;
		
		currentDiv.addClass("active");
		
		var top = $('#pick').position().top + $('#example').position().top;
		var left = $(this).position().left + $('#example').position().left;
		if ((top + 210) > $(window).height()){
			top = $(window).height() - colorPicker.height();
		}
		
		if ((left + 210) > $(window).width()){
			left = $(window).width() - colorPicker.width();
		}
		bc = currentDiv.css("background-color");
		colorPicker.css("top", top + 8);
		colorPicker.css("left", left + 8);
		colorPicker.show();
		$("td", colorPicker).each(function(){
			$(this).css("border", "1px solid " + $(this).css("background-color"));
			if(bc == $(this).css("background-color"))
				$(this).css("border", "1px dotted #fff");
		});
	});
		
	$("#colorPickerVtd").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		//closetimerpicker = window.setTimeout("$(\"#colorPickerVtd\").hide();", timeoutpicker);
		closetimerpicker = window.setTimeout(function (){
			$('#colorPickerVtd').hide();
			$("div.ColorPickerDivSample.active").css("background-color", $("div.ColorPickerDivSample.active").attr("color1"));
		}, timeoutpicker);
	});
	
	$("#colorPickerVtd td").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css("border", "1px dashed white");
		if ($(this).attr('id')!="nocolor"){
			$("div.ColorPickerDivSample.active").html('').css("background-color", $(this).css("background-color"));
		}
		else{
			$("div.ColorPickerDivSample.active").css("backgroundColor",'').html(Runner.lang.constants.TEXT_WR_NO_COLOR);
		}
	});

	$("#colorPickerVtd td").mouseout(function(){
		$(this).css("border", "1px solid " + $(this).css("backgroundColor"));
	});

	$("#colorPickerVtd td").click(function(){
		if ( this.name == "none" ) {
			$("#"+div_id).attr("color1", "");
			$("#"+div_id).attr("color2", "");
			changeact($("div.ColorPickerDivSample.active").attr('act'),'');
		} else {
			$("#"+div_id).attr("color1", $(this).css("backgroundColor"));
			if ($(this).attr('id')!="nocolor"){
				$("#"+div_id).css("backgroundColor",$(this).css("backgroundColor")).html('');
				changeact($("#"+div_id).attr('act'),$(this).css("backgroundColor"));
			}
			else{
				$("#"+div_id).css("backgroundColor",'').html(Runner.lang.constants.TEXT_WR_NO_COLOR);
				if($("#"+div_id).attr('act')=='color')
					changeact($("#"+div_id).attr('act'),'black');
				else
					changeact($("#"+div_id).attr('act'),'none');
			}
		}
		$("#colorPickerVtd").hide();
	});
	
	$(".apply-style").change(function(){
		applyToSomething($(this).attr("id"), $(this).val());
	});	
	
var timeoutselector	= 400,
	closetimerselector	= 0;
/* Group Selector
 *------------------------------------------------------------------*/


	$(".selectorApply").parent().parent().click(function(){
		if(closetimerselector) {
			window.clearTimeout(closetimerselector);
			closetimerselector = null;
		}
		var top = $(this).position().top + $('#example').position().top+$(this).parent().parent().height();
		var left = $(this).position().left + $('#example').position().left;
		if ((top + 80) > $(window).height()){
			top = top-66;
		}		
		if ((left + 200) > $(window).width()){
			left = $(window).width() - $("#groupSelectorDiv").width();
		}
		$("#groupSelectorDiv").css("top", top);
		$("#groupSelectorDiv").css("left", left+5);
		$("#groupSelectorDiv").css("width",$(this).parent().parent().width());
		$("#groupSelectorDiv").show();
		target = $(".selectorApply",this).attr("act");
	});
	$(".selectorApply").parent().parent().mouseout(function(){
		closetimerselector = window.setTimeout("$(\"#groupSelectorDiv\").hide();", timeoutselector);
	}).mouseover(function(){
		if(closetimerselector) {
			window.clearTimeout(closetimerselector);
			closetimerselector = null;
		}
	});
	$("#groupSelectorDiv td").mouseover(function(){
		if(closetimerselector) {
			window.clearTimeout(closetimerselector);
			closetimerselector = null;
		}
	});
		
	$("#groupSelectorDiv td").mouseout(function(){
		closetimerselector = window.setTimeout("$(\"#groupSelectorDiv\").hide();", timeoutselector);
	}).mouseover(function(){
		if(closetimerselector) {
			window.clearTimeout(closetimerselector);
			closetimerselector = null;
		}
	});
	
	$(".groupSelect").click(function(){
		applyToSomething(target,$(this).attr("value"));
		$("#groupSelectorDiv").hide();
	}).hover(
		function (){
			$(this).css('backgroundColor','rgb(146, 190, 235)').parent().parent().css('backgroundColor','rgb(146, 190, 235)');
		}, 
		function (){
			$(this).css('backgroundColor','rgb(244, 247, 251)').parent().parent().css('backgroundColor','rgb(244, 247, 251)');
		}
	);
	$(".selectorApply").parent().parent().find("td:first").mouseover(function(){
		if(closetimerselector) {
			window.clearTimeout(closetimerselector);
			closetimerselector = null;
		}
	});

/* Navigation Buttons
 *------------------------------------------------------------------*/
var timeout	= 200,
	closetimer	= 0;
	
	$("#alert").dialog({
		title: "Message",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog("close");
			}
		}
	});
	
	$("#row7")
		.css("cursor", "default")
		.css("font-weight", "bold");

	$("td[id^=row]").mouseover(function(){
		for(var i=0; i<=11; i++) {
			if(i == this.id.replace("row", "")) {
				$("td[id=row" + i + "]").css("background-color","#92BEEB");
			}
			else {
				$("td[id=row" + i + "]").css("background-color","#F4F7FB");
			}
		}
	});
 
	$("#jumpto").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var menujump = $("#menujump");  
		if ($("#jumpto").offset().top + $("#jumpto").height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			menujump.css("top", ($(this).offset().top - menujump.height()) + "px");		
			menujump.css("left", ($(this).offset().left) + "px");					
		} else {
			menujump.css("top", ($(this).offset().top + $(this).height()) + "px");		
			menujump.css("left", ($(this).offset().left) + "px");			
		}
		menujump.css('display', '');
	});

	$("#jumpto").mouseout(function(){
		closetimer = window.setTimeout("$(\"#menujump\").css('display', 'none');", timeout);
	});
	
	$("#menujump td").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});
		
	$("#menujump td").mouseout(function(){
		closetimer = window.setTimeout("$(\"#menujump\").hide();", timeout);
	});
	
	$(document.body).click(function(){
		$("#menujump").hide();
	});
	
	
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn, #languageSelector").click(function(){
		var URL = Runner.getPageUrl("webreport");
		if( this.id == "nextbtn" )
			URL = Runner.getPageUrl("webreport8");
		if( this.id == "backbtn" )
			if( this.id == "backbtn" )
			if($("#row6").css("display")=="none")
				URL = Runner.getPageUrl("webreport4");
			else
				URL = Runner.getPageUrl("webreport6");
		if( this.id == "saveasbtn" )
			URL = Runner.getPageUrl("webreport8") + "?saveas=1";
		if( this.id.substr(0,3)=="row" && this.id != "row7" )
			URL = Runner.getPageUrl("webreport" + this.id.replace("row", ""));
		if( this.id == "row10" )
			URL = Runner.getPageUrl("webreport");
		if( this.id == "row11" )
			URL = defURL;
		if(URL.substr(-1)=="/")
			URL = URL.substr(0,URL.length-1);
		var_save=0;
		if( this.id == "savebtn")
			var_save=1;
		if( this.id == "savebtn" || this.id == "previewbtn") {
			id=this.id;
			$.ajax({
				type: "POST",
				url: Runner.getPageUrl("save-state"),
				data: {
					save: var_save,
					name: "style_editor",
					web: "webreports",
					str_xml: '{ "style_editor" : { "status" : "success" } }',
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						$.ajax({
							type: "POST",
							url: Runner.getPageUrl("save-style"),
							data: {
								repname: $("#location").attr('src'),
								str_xml: styleChange + "</attr>"
							},
							success: function(msg){
								if(id=="savebtn")
								{
									styleChange = new String('<attr value="arr">');
									$("#alert").html("<p>"+Runner.lang.constants.TEXT_WR_REPORT_SAVED+"</p>").dialog("option", "close", function(){
										window.location = Runner.getPageUrl("webreport");
									}).dialog("open");
								}
								else
									$("#preview").click();
							},
							error: function() {
								$("#alert").html("<p>"+Runner.lang.constants.TEXT_WR_SOME_PROBLEM+"</p>").dialog("open");
							}
						});						
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
					}
				}
			});			
			styleChangeLocal = '<attr value="arr">';
		}
	
		if(this.id == "row10")
			window.location = URL;
		
		if(this.id != "row7" && this.id != "row10" && this.id !="savebtn" && this.id !="previewbtn") {
			obj=this;
			$.ajax({
				type: "POST",
				url: Runner.getPageUrl("save-style"),
				data: {
					repname: $("#location").attr('src'),
					str_xml: styleChange + "</attr>"
				},
				success: function(msg){
					styleChange = new String('<attr value="arr">');
					if(obj.id !="languageSelector")
						window.location = URL;
				},
				error: function() {
					$("#alert").html("<p>"+Runner.lang.constants.TEXT_WR_SOME_PROBLEM+"</p>").dialog("open");
				}
			});			
		}
	});	
});
