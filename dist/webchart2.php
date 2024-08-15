<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");


include("include/reportfunctions.php");

	if( !Security::getUserName() )
	{
		$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	}

Reload_Chart(postvalue("cname"));
$arr_join_tables = getChartTablesList();

include('include/xtempl.php');
$xt = new Xtempl();

if (@$_SESSION['webcharts']['settings']['title'] != "") {
	$title=@$_SESSION['webcharts']['settings']['title'];
	if(strlen($title)>25)
		$title=substr($title,0,25)."...";
	$xt->assign("chart_title",", "."Title".": ".$title);
} else {
	$xt->assign("chart_title","");
}
if (@$_SESSION['webcharts']['tables'][0] != "") {
	$stable=@$_SESSION['webcharts']['tables'][0];
	if(strlen($stable)>25)
		$stable=substr($stable,0,25)."...";

	$xt->assign("chart_table",", "."Table".": ".$stable);
} else {
	$xt->assign("chart_table","");
}
$xt->assign("b_is_chart_save",($_SESSION['webcharts']['tmp_active'] != "x"));	
$xt->assign("b_is_chart_name",($_SESSION['webcharts']['settings']['name'] != ""));
$xt->assign("chart_name",$_SESSION['webcharts']['settings']['name']);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/fancybox/jquery.fancybox.css").'" type="text/css" media="screen">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.easing.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.fancybox.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/json.js").'"></script>
'."\r\n";

$xt->assign("h_includes", $h_includes);

$fields = "";
for ($i=0; $i < count($arr_join_tables); $i++ ) {
	$t = $arr_join_tables[$i];
	$arr_fields = array();
	$arr_fields = WRGetNBFieldsList($t);
	for ($j=0; $j < count($arr_fields); $j++) 
	{
		$field=$arr_fields[$j];
		$disp_field=$t.".".$field;
		if(strlen($disp_field)>25)
			$disp_field=substr($disp_field,0,25)."...";
		$fields .= "<option value=\"".runner_htmlspecialchars($disp_field)."\">".$disp_field."</option>";
	}
}
$xt->assign("fields", $fields);

$b_includes .= '
<script type="text/javascript">
var timeout	= 200;
var closetimer	= 0;
var relation_stack = 0;

$(document).ready(function(){
	$("a#sql_query").fancybox({
		fitToView: false,
				autoSize: false,
				width : 800,
				height : 550,
				overlayShow: true
	});
		$("a#preview").fancybox({
			fitToView: false,
				autoSize: false,
				width : 820,
				height : 660,
				overlayShow: true
		});
	';
	$b_includes .= alertDialog();
	$b_includes .= '
	function collect_input_data() {
//	clean up all uncomplete rows
		$("td.field_value select").each(function(){
			if($(this).val()=="-1")
				$(this).trigger("change");
		});
		showNewRow();
		var output = {};
		output.group_by_condition = {};
		var j=0;
		$(".condition-row").each(function(){
			if ($(this).find("td.field_value select").val() != "-1" && $(this).find("td.field_value select").val() != null) 
			{
				output.group_by_condition[j] = {};
				$(this).find("input:text,select").each(function(){
					output.group_by_condition[j][$(this).attr("id")] = $(this).val();
				});
				j++;
			}
		});
		output.group_by_condition["group_by_toggle"] = $("#group_by_toggle").prop("checked").toString();

		return JSON.stringify(output);		
	}
	
	$("#sqlbtn").bind("click", function(){
		var output = collect_input_data();
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "group_by_condition",
				web: "webcharts",
				str_xml: output,
				rnd: (new Date().getTime())
			},
			success: function(msg){
				if ( msg == "OK" ) {
					$("#sql_query").click();
				} else {
					$("#alert").html("<p>"+msg+"</p>").dialog("open");
				}
			}
		});
	});
	
	for (var i=1; i < 10; i++) {
		var tr_elem = $(".condition-row").eq(0).clone();
		$(tr_elem).find("input, select").each(function(){this.value="";});
		$(tr_elem).attr("id","cond_row_"+i);
		$(tr_elem).find("input, select").each(function(){
			this.disabled = true;
		});
		$("#table_wh").append(tr_elem);
		$(tr_elem).hide();
	}

	$("td.field_value select").change(function(){

		if ($(this).val() == "-1") 
		{
			$(this).parents("tr:first").find("input").each(function(){
				$(this).val("");
			});
			$(this).parents("tr:first").find("select").each(function()
			{
				var oldVal=$(this).val();
				$(this).val("-1");
				if(oldVal && oldVal!="-1")
					$(this).trigger("change");
			});
			$(this).parents("tr:first").hide();
		}
		else
		{
			enableRow($(this).parents("tr:first").get(0),true);
			showNewRow();
		}
	});	
	
	
	$("#group_by_toggle").live("click", function(){
		var checked = $(this)[0].checked;
		$(".condition-row").each(function(){
			$(this).find("select#group_by_value").attr("disabled", !checked);
			$(this).find("input#having_value").attr("disabled", !checked);
		});
	});
	
	
	$("#row2")
		.css("cursor", "default")
		.css("font-weight", "bold");

	$("td[id^=row]").mouseover(function(){
		for(var i=0; i<=9; i++) {
			if(i == this.id.replace("row", "")) {
				$("td[id=row" + i + "]").css("background-color","#92BEEB");
			}
			else {
				$("td[id=row" + i + "]").css("background-color","#F4F7FB");
			}
		}
	});
 
'."\r\n";

$b_includes .= JumpTo();

if (count(GetUserGroups()) < 2 || isset( $_SESSION['webcharts']['settings']['status'] )
	&& $_SESSION['webcharts']['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row7]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row9]").hide();'."\n";

if ($_SESSION['webcharts']['settings']['title'] == "") {
	$b_includes .= '
		for (var i=2; i<=7; i++){
			$("td[id=row" + i + "]").hide();
		};
	'."\r\n";
}

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webchart".$ri)."';\r\n";
    
$b_includes .= '
	var activeXDetectRules = [
            {"name":"ShockwaveFlash.ShockwaveFlash.7"},
            {"name":"ShockwaveFlash.ShockwaveFlash.6"},
            {"name":"ShockwaveFlash.ShockwaveFlash"}
    ];
	var getActiveXObject = function(name){
        var obj = -1;
        try{
            obj = new ActiveXObject(name);
        }catch(err){
            obj = {activeXError:true};
        }
        return obj;
    };
	if(navigator.plugins && navigator.plugins.length>0)
	{
		var type = "application/x-shockwave-flash";
		var mimeTypes = navigator.mimeTypes;
		if(!mimeTypes || !mimeTypes[type] || !mimeTypes[type].enabledPlugin || !mimeTypes[type].enabledPlugin.description)
		{
			$("#previewbtn").parent("span").hide();
			$("#previewbtn").hide();
		}
	}
	else if(navigator.appVersion.indexOf("Mac")==-1 && window.execScript)
	{
		var isFlash = false;
		for(var i=0; i<activeXDetectRules.length; i++){
                var obj = getActiveXObject(activeXDetectRules[i].name);
                if(!obj.activeXError){
					isFlash = true;
				}
			}
		if(!isFlash){
			$("#previewbtn").parent("span").hide();
			$("#previewbtn").hide();
		}
	}	
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, ,#previewbtn").click(function(){
	
		var flag = true;

		//	no validation required	
		var URL = "'.GetTableLink("webchart").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = "'.GetTableLink("webchart3").'";
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webchart1").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webchart6", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row2" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row8" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row9" )
			URL = "'.GetTableLink("menu").'";
		
		var output = collect_input_data();
		var_save=0;
		if( this.id == "savebtn")
			var_save=1;
		if( this.id == "savebtn" || this.id == "previewbtn") {
			id=this.id;
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: var_save,
					web: "webcharts",
					name: "group_by_condition",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						if( id == "savebtn")
						{
							$("#alert")
								.html("<p>'."Chart Saved".'</p>")
								.dialog("option", "close", function(){
									window.location = "'.GetTableLink("webreport").'";
								})
								.dialog("open");					
						}
						else
						{
							$("#preview").click();
						}
					} else {
						$("#alert").html("<p>'."Some problems appear during saving".'</p>").dialog("open");
					}
				},
				error: function() {
					$("#alert").html("<p>'."Some problems appear during saving".'</p>").dialog("open");
				}
			});
		}
		thisid=this.id;
		if(this.id !="row2" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "group_by_condition",
					web: "webcharts",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						window.location = URL;
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
						if( thisid == "row8" || thisid == "row9" )
							window.location=URL;
					}
				}
			});
		}
	});
});



function showNewRow()
{
	if( 0 != $("select[name=field_opt]:visible").filter( function() { 
			var value = $(this).val(); 
			return  value == "-1" || value == null;
		} ).length )
		return;

	var firstHidden=$("select[name=field_opt]:hidden:first").parents("tr").get(0);
	
//	append it to the end	
	$("#table_wh").append(firstHidden);
	enableRow(firstHidden,true);
}

function enableRow(tr,enable)
{
	$(tr).show();
	$("input, select",tr).each(function(){
		if(this.name=="field_opt")
			this.disabled=false;
		else if ((this.name == "group_by_value" || this.name == "having_value")) 
			this.disabled=!enable || !$("#group_by_toggle")[0].checked;
		else
			this.disabled = !enable;
	});
	if($("td.sort_dir select",tr).val() && $("td.sort_dir select",tr).val()!="-1")
		$("td.sort_order select",tr).show();
	else
		$("td.sort_order select",tr).hide();
	
}
</script>'."\r\n";

$arr = $_SESSION['webcharts']['group_by_condition'];

if ( !empty( $arr ) ){
	$b_includes .= '<script type="text/javascript">
		$(document).ready(function(){
			$("#group_by_toggle")[0].checked = '.($arr["group_by_toggle"]=='true'?"true":"false").';
		'."\r\n";
	
	foreach($arr as $i=>$tarr)
	{
		if(!is_numeric($i))
			continue;
		$b_includes .= '
		tr_elem = $(".condition-row").eq('.$i.');
		$(tr_elem).show();
		$(tr_elem).find("input, select").each(function(){
			if ((this.id == "group_by_value" || this.id == "having_value") && !$("#group_by_toggle")[0].checked) {
				return;
			}
			this.disabled = false;
		});
		$(tr_elem).find("select#field_opt").val(\''.jsreplace($arr[$i]['field_opt']).'\');
		$(tr_elem).find("input#filter_value").val(\''.jsreplace($arr[$i]['filter_value']).'\');
		$(tr_elem).find("input#first_or_value").val(\''.jsreplace($arr[$i]['first_or_value']).'\');
		$(tr_elem).find("input#second_or_value").val(\''.jsreplace($arr[$i]['second_or_value']).'\');
		$(tr_elem).find("input#third_or_value").val(\''.jsreplace($arr[$i]['third_or_value']).'\');
		sortDir = $(tr_elem).find("select#sort_dir").get(0);
		$(sortDir).val("'.($arr[$i]['sort_dir']).'");
		sortOrder=$(tr_elem).find("select#sort_order").get(0);
		sortOrder.options[sortOrder.options.length]=new Option("","'.($arr[$i]['sort_order']).'");
		$(sortOrder).val("'.($arr[$i]['sort_order']).'");
		$(tr_elem).find("select#group_by_value").val("'.($arr[$i]['group_by_value']).'");
		$(tr_elem).find("input#having_value").val("'.($arr[$i]['having_value']).'");
		if(!$(sortDir).val() || $(sortDir).val()=="-1")
			$(sortOrder).hide();
		else
			$(sortOrder).show();
		'."\r\n";	
	}
	
	$b_includes .= '
/*
		tr_elem = $(".condition-row").eq('.(count($arr)-1).');
		$(tr_elem).show();
		$(tr_elem).find("input, select").each(function(){
			if ((this.id == "group_by_value" || this.id == "having_value") && !$("#group_by_toggle")[0].checked) {
				return;
			}		
			this.disabled = false;
		});
*/		
	showNewRow();
	window.refillOrderCombos = function(combo,shift)
	{
		var newVal  = parseInt($(combo).val());
		var changedElement=combo;
		var optionsFound=new Array();
		var optionsCount=0;
//	find the options available
		$("td.sort_order select").each( function() {
			var curVal=parseInt($(this).val());
			if(curVal>0)
			{
				optionsFound[curVal]=true;
				optionsCount++;
			}
		});
		var oldVal=-1;
//	find the hole
		for(i=1;i<optionsFound.length;i++)
		{
			if(!optionsFound[i])
			{
				oldVal=i;
				break;
			}
		}
//	update all comboboxes		
		$("td.sort_order select").each( function() 
		{
//	calc options list and control value
			var curVal=parseInt($(this).val());
			if(isNaN(curVal))
				curVal=-1;
//	shift the value if needed
			if(shift)
			{
				var hole=oldVal;
				if(hole<0)
					hole=optionsFound.length;
				var bump=newVal;
				if(newVal<0)
					bump=optionsFound.length;
				if(hole<bump)
				{
					if(curVal>hole && curVal<=bump && this!=changedElement)
						curVal--;
				}
				else if(hole>bump)
				{
					if(curVal>=bump && curVal<hole && this!=changedElement)
						curVal++;
				}
			}
//	recreate options
			this.length=0;
			this.options[0]=new Option("",-1);
			var largest=optionsCount;
			if(curVal<0)
				largest++;
			if(largest<1)
				largest=1;
			for(i=1;i<=largest;i++)
				this.options[i]=new Option(i,i);
			this.selectedIndex=curVal;
//	update sort direction control
			var sort_dir=$("td.sort_dir select",$(this).parents("tr").get(0)).get(0);
			if(!sort_dir)
				return;
			if(curVal<0)
			{
				$(sort_dir).val("-1");
			}
		});
	}
	$("td.sort_order select").change(function(){
		refillOrderCombos(this,true);
	});
	refillOrderCombos($("td.sort_order:first select")[0],false);

	$("td.sort_dir select").change(function(){
		var sort_order=$("td.sort_order select",$(this).parents("tr").get(0)).get(0);
		if(!$(this).val() || $(this).val()=="-1")
		{
			$(sort_order).val("-1");
			$(sort_order).trigger("change");
			$(sort_order).hide();
		}
		else
		{
			if($(sort_order).val()>0)
				return;
			$(sort_order).show();
//	count number of sort fields
			var optionsCount=0;
//	find the options available
			$("td.sort_order select").each( function() {
				var curVal=parseInt($(this).val());
				if(curVal>0)
				{
					optionsCount++;
				}
			});
//	set the max value
			$(sort_order).val(optionsCount+1);
			$(sort_order).trigger("change");
		}
	});
	showNewRow();
});


	</script>'."\r\n";
}
$xt->assign("chart_name_preview",$_SESSION['webcharts']['settings']['name']);
$xt->assign("b_includes", $b_includes);

$templatefile = GetTemplateName("", "webchart2");
$xt->display($templatefile);
?>