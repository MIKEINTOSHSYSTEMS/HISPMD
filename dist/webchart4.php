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

$root=&$_SESSION['webcharts'];
Reload_Chart(postvalue("cname"));
if(is_wr_project())
{
	include_once("include/" . GetTableURL($root['tables'][0]) . "_settings.php");	
}

include('include/xtempl.php');
$xt = new Xtempl();

$table_name = $root['tables'][0];

if (@$_SESSION['webcharts']['settings']['title'] != "") {
	$title=@$_SESSION['webcharts']['settings']['title'];
	if(strlen($title)>25)
		$title=substr($title,25)."...";
	$xt->assign("chart_title",", "."Title".": ".$title);
} else {
	$xt->assign("chart_title","");
}
if (@$_SESSION['webcharts']['tables'][0] != "") {
	$stable=@$_SESSION['webcharts']['tables'][0];
	if(strlen($stable)>25)
		$stable=substr($stable,25)."...";

	$xt->assign("chart_table",", "."Table".": ".$stable);
} else {
	$xt->assign("chart_table","");
}
$xt->assign("b_is_chart_save",($_SESSION['webcharts']['tmp_active'] != "x"));	
$xt->assign("b_is_chart_name",($_SESSION['webcharts']['settings']['name'] != ""));
$xt->assign("chart_name",$root['settings']['name']);

$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/stylesheet.css").'" type="text/css">
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

$b_includes .= '<script type="text/javascript">'."\r\n";
$b_includes .= '

arr_color = new Array();

arr_color["0"]="#FFFFFF";

arr_color["1"]="#FF0000";
arr_color["2"]="#008000";
arr_color["3"]="#0000FF";

arr_color["4"]="#DC143C";
arr_color["5"]="#2E8B57";
arr_color["6"]="#6A5ACD";

arr_color["7"]="#FF7F50";
arr_color["8"]="#7FFF00";
arr_color["9"]="#5F9EA0";

arr_color["10"]="#FF8C00";
arr_color["11"]="#8FBC8B";
arr_color["12"]="#00008B";

arr_color["13"]="#FF1493";
arr_color["14"]="#556B2F";
arr_color["15"]="#00BFFF";

arr_color["16"]="#FF69B4";
arr_color["17"]="#008B8B";
arr_color["18"]="#ADD8E6";

arr_color["19"]="#F08080";
arr_color["20"]="#32CD32";
arr_color["21"]="#4169E1";

arr_color["22"]="#A52A2A";
arr_color["23"]="#006400";
arr_color["24"]="#6495ED";

var timeout	= 200,
	closetimer	= 0,
	fld_labels = new Array();
'."\r\n";

$dataSeries = "";

/*
$arr_group_by = array();
if ( !empty( $root['group_by_condition'][0] ) )
{
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++) 
	{
		$arr = $root['group_by_condition'][$i];
		if ( rawurldecode($arr['group_by_value']) != "-1" &&
			rawurldecode($arr['group_by_value']) != "GROUP BY" ) {
			$arr_group_by[rawurldecode($arr['field_opt'])]["agr_func"] = rawurldecode($arr['group_by_value']);
			$arr_group_by[rawurldecode($arr['field_opt'])]["label"] = rawurldecode($arr['group_by_value'])."(".rawurldecode($arr['field_opt']).")";
		}
	}
}
*/
$arr_data_series=array();
$arr_label_series=array();
get_chart_series_fields($arr_data_series,$arr_label_series);
foreach ( $arr_data_series as $arr ) 
{
		$dataSeries .= '<option value="'.runner_htmlspecialchars($arr["field"]).'">'.runner_htmlspecialchars($arr["field"]).'</option>';
		$b_includes .= 'fld_labels[\''.jsreplace($arr["field"]).'\'] = \'' . jsreplace($arr["label"]) . '\';'."\r\n";
}
$xt->assign("dataSeries", $dataSeries);

$strLabel = "";
foreach ( $arr_label_series as $arr ) 
{
		$strLabel .= '<option value="'.runner_htmlspecialchars($arr["field"]).'">'.runner_htmlspecialchars($arr["field"]).'</option>';
}
/*
foreach ($arr_label_series as $arr) {
	$strLabel .= '<option value="'.$arr["table"].'.'.$arr["name"].'">'.$arr["table"].'.'.$arr["name"].'</option>';
}
*/
$xt->assign("label", $strLabel);

$b_includes .= '
var timeout	= 200,
closetimer	= 0,
closetimerpicker = 0,
timeoutpicker = 300;
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
	
	function add_dataseries(num)
	{
		if($("tr[id^=ds]").length!=num)
			return;
		dataseries=$("tr[id=clone]").clone();
		dataseries.insertBefore("#ds");
		dataseries.attr("id","ds"+num);
		dataseries.find("td:eq(1)").html("Data Series "+num);
		';
if ($_SESSION['webcharts']['chart_type']['type']!="ohlc" && $_SESSION['webcharts']['chart_type']['type']!="candlestick")
{
	$b_includes .= '	
			dataseries.find("td:eq(3)").attr("id","label_title_"+num);
			dataseries.find("td:eq(4)").attr("id","label_value_"+num);		
			dataseries.find("input:eq(0)").attr("id","series_label_"+num);					
			dataseries.find("select:eq(0)").attr("id","field"+num);
			dataseries.find("select:eq(0)").attr("name","field"+num);
			$("select[id=field"+num+"]").bind("change", function(){
					add_field_change(this);
			});';

	if ($_SESSION['webcharts']['chart_type']['type']=="gauge")		
	{		
	$b_includes .= '	
			gaugeseries=$("tr[id=clone_range]").clone();
			gaugeseries.insertBefore("#ds");
			gaugeseries.attr("id","tr_range"+num);
			gaugeseries.find("input:eq(0)").attr("name","gaugeMinValue"+num);
			gaugeseries.find("input:eq(1)").attr("name","gaugeMaxValue"+num);
			gaugeseries.show();
	';
	}
	else
	{
	$b_includes .= '
			dataseries.find("td:eq(5)").attr("id","picker_div"+num);
			dataseries.find("td:eq(6)").attr("id","picker_selector"+num);
			dataseries.find("div:eq(0)").attr("id","picker"+num);
			dataseries.find("#picker"+num).css("background-color", arr_color[num]);
			dataseries.find(".selector,.ColorPickerDivSample").click(function(){
				click_color_event(this);
			});
			dataseries.find("td[id^=picker]").hide();
			dataseries.find("td[id^=label_title]").hide();
			dataseries.find("td[id^=label_value]").hide();
			dataseries.find("td[id^=label_title]").prev("td").attr("colSpan",5);';
	}
			
	if ($_SESSION['webcharts']['chart_type']['type']=="bubble")		
	{		
	$b_includes .= '	
			sizeseries=$("tr[id=clone_size]").clone();
			sizeseries.insertAfter("#ds"+num);
			sizeseries.attr("id","");
			sizeseries.find("td:eq(1)").html("Size Series "+num);
			sizeseries.find("select:eq(0)").attr("id","size"+num);
			sizeseries.find("select:eq(0)").attr("name","size"+num);
			sizeseries.show();
			';
	}
}
else
{
	$b_includes .= '
			dataseries1=$("tr[id=clone1]").clone();
			dataseries1.insertBefore("#ds");
			
			dataseries2=$("tr[id=clone2]").clone();
			dataseries2.insertBefore("#ds");
			
			dataseries3=$("tr[id=clone3]").clone();
			dataseries3.insertBefore("#ds");
			
			dataseries1.attr("id","");
			dataseries2.attr("id","");
			dataseries3.attr("id","");
			dataseries1.find("select:eq(0)").attr("id","field_open"+num);
			dataseries1.find("select:eq(0)").attr("name","field_open"+num);
			dataseries1.find("select:eq(1)").attr("id","field_close"+num);
			dataseries1.find("select:eq(1)").attr("name","field_close"+num);
			dataseries2.find("select:eq(0)").attr("id","field_high"+num);
			dataseries2.find("select:eq(0)").attr("name","field_high"+num);
			dataseries2.find("select:eq(1)").attr("id","field_low"+num);
			dataseries2.find("select:eq(1)").attr("name","field_low"+num);
			
			
			$("select[id^=field]").bind("change", function(){
				if($(this).attr("id").length>5)
					add_field_change(this);
			});
			
			
			dataseries3.find("td:eq(1)").attr("id","label_title_"+num);
			dataseries3.find("td:eq(2)").attr("id","label_value_"+num);	
			
			dataseries3.find("td:eq(4)").attr("id","picker1_div"+num);
			dataseries3.find("td:eq(5)").attr("id","picker1_selector"+num);
			dataseries3.find("td:eq(6)").attr("id","picker2_div"+num);
			dataseries3.find("td:eq(7)").attr("id","picker2_selector"+num);
			
			dataseries3.find("div:eq(0)").attr("id","picker1_"+num);
			dataseries3.find("div:eq(1)").attr("id","picker2_"+num);
			
			dataseries3.find("#picker1_"+num).css("background-color", arr_color[num]);
			dataseries3.find("#picker2_"+num).css("background-color", arr_color[num]);
			
			dataseries3.find("input:eq(0)").attr("id","series_label_"+num);		
			dataseries3.find(".selector,.ColorPickerDivSample").click(function(){
				click_color_event(this);
			});
			dataseries3.find("td[id^=picker]").hide();
			dataseries3.find("td[id^=label_title]").hide();
			dataseries3.find("td[id^=label_value]").hide();
			dataseries1.show();
			dataseries2.show();
			dataseries3.show();
			';
}

$b_includes .= '	
		dataseries.show();
		
		separat=$("tr[id=clone_separator]").clone();
		separat.attr("id","tr_separator"+num);
		separat.insertBefore("#ds");
		separat.show();
	}

	function collect_input_data() {
		var output = {};
		output.parameters = [];
		output.fields = [];
		count=0;
		$("tr[id^=ds]").each(function(i){
			var func, reg_match,parts,sfield,stable,ssize,label, color, field_open, field_close, field_high, field_low, color2, color1;
			reg_match = $("select[id^=field]",this).val();
			if (reg_match != null)
				reg_match = reg_match.match(/(.*)\((.*)\)/i);
			if (reg_match != null) 
			{
				parts =	reg_match[2].split(".");
				sfield=parts[parts.length-1];
				stable = reg_match[2];
				stable = stable.substring(0,stable.length-sfield.length-1);
				label=$("input[id=series_label_"+(i+1)+"]").val();
				color=rgbToHex($("#picker"+(i+1)).css("background-color"));
				func = reg_match[1];
			} 
			else 
			{
				parts = $("select[id^=field]",this).val();
				if(parts!=null)
				{
					parts = parts.split(".");
					sfield=parts[parts.length-1];
					stable = $("select[id^=field]",this).val();
					stable = stable.substring(0,stable.length-sfield.length-1);
					label=$("input[id^=series_label_"+(i+1)+"]",this).val();
					color=rgbToHex($("#picker"+(i+1)).css("background-color"));
				}
				func = "";
			}

			trn=$(this).next("tr");';

if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
$b_includes .= '
			//finance
			var fin_fields = new Array();
			fin_tr=trn;
			fin_fields[0]="field_open";
			fin_fields[1]="field_close";
			fin_fields[2]="field_high";
			fin_fields[3]="field_low";
			fin_fields[4]="label";
			
			for(j=0;j<5;j++)
			{	
				if(j<4)
				{
					reg_match = $(fin_tr).find("select[id="+fin_fields[j]+""+(i+1)+"]",this).val();
					if (reg_match != null)
						reg_match = reg_match.match(/(.*)\((.*)\)/i);
					if (reg_match != null) 
					{
						parts =	reg_match[2].split(".");
						sfield=parts[parts.length-1];
						stable = reg_match[2];
						stable = stable.substring(0,stable.length-sfield.length-1);
					} 
					else 
					{
						parts = $(fin_tr).find("select[id="+fin_fields[j]+""+(i+1)+"]",this).val();
						if(parts!=null)
						{
							parts = parts.split(".");
							sfield=parts[parts.length-1];
							stable = $("select[id="+fin_fields[j]+""+(i+1)+"]").val();
							stable = stable.substring(0,stable.length-sfield.length-1);
						}
					}
					eval(fin_fields[j]+"=sfield;");
					if(j==1 || j==3)
						fin_tr=$(fin_tr).next("tr");
				}
				else
				{
					label=$("input[id=series_label_"+(i+1)+"]").val();
					color1=rgbToHex($("#picker1_"+(i+1)).css("background-color"));
					color2=rgbToHex($("#picker2_"+(i+1)).css("background-color"));
					break;
				}
			}';
			
$b_includes .= '			
			
			//bubble size
			reg_match = $(trn).find("select[id^=size]",this).val();
			if (reg_match != null)
				reg_match = reg_match.match(/(.*)\((.*)\)/i);
			if (reg_match != null) 
			{
				parts =	reg_match[2].split(".");
				ssize=parts[parts.length-1];
			} 
			else 
			{
				parts = $(trn).find("select[id^=size]",this).val();
				if(parts!=null)
				{
					parts = parts.split(".");
					ssize=parts[parts.length-1];
				}
			}
			
			//gauge range
			gminvalue=$(trn).find("input[name^=gaugeMinValue]").val();
			gmaxvalue=$(trn).find("input[name^=gaugeMaxValue]").val();
			
			//gauge color 
			k=0;
			var gcolorzone = [];
			gcolorzone[0] = {
						gaugeColor : "FF0000",
						gaugeBeginColor : "",
						gaugeEndColor : ""
					};
			$("tr[name=tr_color"+(i+1)+"]").each(function(j){
				if($(this).find("tr[minus=yes]").attr("minus")=="yes")
				{
					gcolorzone[k] = {
						gaugeColor : rgbToHex($(this).find("div[name=gaugeColor"+(i+1)+"]").css("background-color")) || "",
						gaugeBeginColor : $(this).find("input[name=gaugeBeginColor"+(i+1)+"]").val() || "",
						gaugeEndColor : $(this).find("input[name=gaugeEndColor"+(i+1)+"]").val() || ""
					};
					k++;
				}
			});';
if ($_SESSION['webcharts']['chart_type']['type']!="ohlc" && $_SESSION['webcharts']['chart_type']['type']!="candlestick")
	$b_includes .= 'if(sfield!="")';
else
	$b_includes .= 'if(field_open!="" && field_close!="" && field_high!="" && field_low!="")';
$b_includes .= '
			{
				output.parameters[count] = {
					name     : sfield || "",
					size     : ssize || "",
					gaugeMinValue     : gminvalue || "",
					gaugeMaxValue     : gmaxvalue || "",
					gaugeColorZone     : gcolorzone || "",
					table    : stable || "",
					agr_func : func,
					series_color	: color || "",
					label    : label || "",
					ohlcOpen : field_open || "",
					ohlcClose : field_close || "",
					ohlcHigh : field_high || "",
					ohlcLow : field_low || "",
					ohlcColor : color1 || "",
					ohlcCandleColor : color2 || ""
					
				};
				// needed for compliance with previous version
				output.fields[count] = {
					name   : sfield || "",
					label  : label || "",
					search : ""
				};
				count++;
			}
		});
		return JSON.stringify(output);			
	}

	$("td[id^=label_title]").hide();
	$("td[id^=label_value]").hide();
	$("td[id^=picker]").hide();';
	if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
		$b_includes .= '$("td[id^=label_title]").next("td").next("td").attr("colSpan",2);';
	else
		$b_includes .= '$("td[id^=label_title]").prev("td").attr("colSpan",5);';
	
	$b_includes .= '$("div[id^=picker]").css("background-color", "#FF0000");
	
	$("select[id^=field]").bind("change", function(){
		if($(this).attr("id").length>5)
			add_field_change(this);
	});
	
	function add_field_change(th)
	{
		var value = $(th).val(),
			tr = $(th).parents("tr:first");';
if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
{
	$b_includes .= '
		if($(tr).prev("tr:[id^=ds]").length==0)
			tr=$(tr).prev("tr").prev("tr:[id^=ds]")
		else
			tr=$(tr).prev("tr:[id^=ds]");
		
		tr_input1=$(tr).next("tr");
		tr_input2=$(tr).next("tr").next("tr");

		val1=$(tr_input1).find("select:eq(0)").val();
		val2=$(tr_input1).find("select:eq(1)").val();
		val3=$(tr_input2).find("select:eq(0)").val();
		val4=$(tr_input2).find("select:eq(1)").val();
		
		if(val1=="" || val2=="" || val3=="" || val4=="")
			value="";
		id=$(tr).attr("id").replace("ds","");
		tr=$(tr).next("tr").next("tr").next("tr");
	';			
}
		
$b_includes .= '
		if ( value != "" && value != null)
		{
			$(tr).find("td[id^=label_title]").show();
			$(tr).find("td[id^=label_value]").show();
			$(tr).find("td[id^=picker_div]").show();';
if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")			
	$b_includes .= '$(tr).find("td[id^=label_title]").next("td").next("td").attr("colSpan",2);';
else	
	$b_includes .= '$(tr).find("td[id^=label_title]").prev("td").attr("colSpan",1);';
	
	$b_includes .= '$(tr).find("td[id^=picker_selector]").show();
			$(tr).find("input[id^=series_label]").val(fld_labels[value]);
			if($(th).attr("id")!="field")
			{
				num=$(th).attr("id").replace("field","");';

if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
{
	$b_includes .= '
				$(tr).find("input[id^=series_label]").val("Data Series "+id);
				$(tr).find("td[id^=picker1_div]").show();
				$(tr).find("td[id^=picker1_selector]").show();';
	if($_SESSION['webcharts']['chart_type']['type']=="candlestick")
	{
		$b_includes .= '
				$(tr).find("td[id^=picker2_div]").show();
				$(tr).find("td[id^=picker2_selector]").show();
		';
	}	
}
$b_includes .= '
				num=num.replace("_open","");
				num=num.replace("_close","");
				num=num.replace("_high","");
				num=num.replace("_low","");
'."\r\n";				
				
$b_includes .= 'add_dataseries(parseInt(num)+1);
			}
			'."\r\n";
			

if ($_SESSION['webcharts']['chart_type']['type']=="gauge")		
{			
$b_includes .= '
			ds_id=$(tr).attr("id");
			ds_id=ds_id.replace("ds","");
			if($("tr[name=tr_color"+ds_id+"]").attr("name")==undefined)
			{
				add_new_color(ds_id);
			}
			'."\r\n";
}			
			
			
$b_includes .= '
		} 
		else 
		{';
if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
{
	$b_includes .= '
			$(tr).find("td[id^=picker1_div]").hide();
			$(tr).find("td[id^=picker1_selector]").hide();
			$(tr).find("td[id^=picker2_div]").hide();
			$(tr).find("td[id^=picker2_selector]").hide();
	';
}		
$b_includes .= '
			$(tr).find("td[id^=picker_div]").hide();
			$(tr).find("td[id^=picker_selector]").hide();
			$(tr).find("td[id^=label_title]").hide();
			$(tr).find("td[id^=label_value]").hide();';
if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")			
	$b_includes .= '$(tr).find("td[id^=label_title]").next("td").next("td").attr("colSpan",4);';
else	
	$b_includes .= '$(tr).find("td[id^=label_title]").prev("td").attr("colSpan",5);';
	
	$b_includes .= '$(tr).find("input[id^=series_label]").val("");'."\r\n";
			
if ($_SESSION['webcharts']['chart_type']['type']=="bubble")		
{
	$b_includes .= 'trn = $(tr).next("tr");'."\r\n";
	$b_includes .= '$(trn).find("select[id ^=size]")[0].selectedIndex = 0;'."\r\n";
}
if ($_SESSION['webcharts']['chart_type']['type']=="gauge")		
{
	//$b_includes .= '$("tr_").find("select[id ^=size]")[0].selectedIndex = 0;'."\r\n";
	$b_includes .= 'ds_id=$(tr).attr("id");'."\r\n";
	$b_includes .= 'ds_id=ds_id.replace("ds","");'."\r\n";
	$b_includes .= '$("tr[name=tr_color"+ds_id+"]").remove();'."\r\n";
	$b_includes .= '$("input[name=gaugeMinValue"+ds_id+"]").val("");'."\r\n";
	$b_includes .= '$("input[name=gaugeMaxValue"+ds_id+"]").val("");'."\r\n";
}


$b_includes .= '
		}
	}
	
	function add_new_color(ds_id)
	{
		tr_color=$("tr[name=tr_color]").clone();
		tr_color.insertBefore("#tr_separator"+ds_id);
		tr_color.attr("name","tr_color"+ds_id);
		tr_color.find("input[name=gaugeBeginColor]").attr("name","gaugeBeginColor"+ds_id);
		tr_color.find("input[name=gaugeEndColor]").attr("name","gaugeEndColor"+ds_id);
		tr_color.find("input[name=minus]").attr("name","minus"+ds_id);
		tr_color.find("div[name=gaugeColor]").attr("name","gaugeColor"+ds_id);
		div_len=$("div[name=gaugeColor"+ds_id+"]").length;
		div_len=div_len-parseInt(div_len/24);
		tr_color.find("div[name=gaugeColor"+ds_id+"]").css("background-color", arr_color[div_len]);
		tr_color.find(".selector,.ColorPickerDivSample").click(function(){
			click_color_event(this);
		});
		tr_color.find("input[name=gaugeEndColor"+ds_id+"]").keydown(function(){
			endcolor_event(this);
		});
		tr_color.find("input[name=gaugeBeginColor"+ds_id+"]").keydown(function(){
			begincolor_event(this);
		});
		tr_color.find("input[name=minus"+ds_id+"]").click(function(){
			$(this).parents("tr:first").parents("tr:first").hide();
			$(this).parents("tr:first").attr("minus","");
		});
		tr_color.show();
	}
	
	function endcolor_event(th)
	{
		tr = $(th).parents("tr:first");
		id=$(th).attr("name").replace("gaugeEndColor","");
		if(tr.find("input[name=gaugeBeginColor"+id+"]").val()!="" && tr.attr("minus")!="yes")
		{
			tr.attr("minus","yes");
			tr.find("input[name=minus"+id+"]").show();
			add_new_color(id);
		}
	}
	
	function begincolor_event(th,ev)
	{
		tr = $(th).parents("tr:first");
		id=$(th).attr("name").replace("gaugeBeginColor","");
		if(tr.find("input[name=gaugeEndColor"+id+"]").val()!="" && tr.attr("minus")!="yes")
		{
			tr.attr("minus","yes");
			tr.find("input[name=minus"+id+"]").show();
			add_new_color(id);
		}
	}
	
	
	$("#sqlbtn").click(function(){
		
		var output = collect_input_data();
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "parameters",
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
	
	$("#row4")
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

$b_includes .= colorPickerMouse();

$b_includes .= JumpTo();

if (count(GetUserGroups()) < 2 || isset( $root['settings']['status'] )
	&& $root['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row7]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row9]").hide();'."\n";
	
if ($root['settings']['title'] == "") {
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
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn").click(function(){
		if($("#colorPickerVtd"))
			$("#colorPickerVtd").hide();
		var URL = "'.GetTableLink("webchart").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = "'.GetTableLink("webchart5").'";
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webchart3").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webchart6", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row4" )
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
					name: "parameters",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						if( id == "savebtn" )
						{
							$("#alert")
								.html("<p>'."Chart Saved".'</p>")
								.dialog("option", "close", function(){
									window.location = "'.GetTableLink("webreport").'";
								})
								.dialog("open");
						}
						else
							$("#preview").click();
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
		if(this.id != "row4" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "parameters",
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
	});'."\r\n";

$arr = $root['parameters'];
//print_r($arr);
if ( !empty( $arr ) ){
	for ( $i=0; $i < count($arr)-1; $i++ ) 
	{
		if(is_wr_custom())
			$table_name="";
		else
			$table_name=$arr[$i]["table"].".";
		$computed_value = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["name"].")" : $table_name.$arr[$i]["name"];
		$b_includes .= '
			add_dataseries('.($i+1).');
			$("select[id=field' . ($i+1) . ']").val(\'' . jsreplace($computed_value) . '\');';
			if($arr[$i]["series_color"])
				$b_includes .= '$("#picker' . ($i+1) . '").css("background-color", "#'.$arr[$i]["series_color"].'");'."\r\n";
		if ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
		{
			$value_Open = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["ohlcOpen"].")" : $table_name.$arr[$i]["ohlcOpen"];
			$value_Close = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["ohlcClose"].")" : $table_name.$arr[$i]["ohlcClose"];
			$value_High = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["ohlcHigh"].")" : $table_name.$arr[$i]["ohlcHigh"];
			$value_Low = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["ohlcLow"].")" : $table_name.$arr[$i]["ohlcLow"];
			$b_includes .= '
			$("select[id=field_open' . ($i+1) . ']").val(\'' . jsreplace($value_Open) . '\');
			$("select[id=field_close' . ($i+1) . ']").val(\'' . jsreplace($value_Close) . '\');
			$("select[id=field_high' . ($i+1) . ']").val(\'' . jsreplace($value_High) . '\');
			$("select[id=field_low' . ($i+1) . ']").val(\'' . jsreplace($value_Low) . '\');';
			
			if( $arr[$i]["ohlcColor"] || $arr[$i]["ohlcCandleColor"] )
				$b_includes .= '
				$("#picker1_' . ($i+1) . '").css("background-color", "#'.$arr[$i]["ohlcColor"].'");
				$("#picker2_' . ($i+1) . '").css("background-color", "#'.$arr[$i]["ohlcCandleColor"].'");
				'."\r\n";
		}
		if ($_SESSION['webcharts']['chart_type']['type']=="bubble")
		{
			$size_value = ($arr[$i]["agr_func"]) ? $arr[$i]["agr_func"]."(".$table_name.$arr[$i]["size"].")" : $table_name.$arr[$i]["size"];
			$b_includes .= '$("select[id=size' . ($i+1) . ']").val(\'' . jsreplace($size_value) . '\');
			'."\r\n";
		}
		if ($_SESSION['webcharts']['chart_type']['type']=="gauge")
		{
			$b_includes .= '$("input[name=gaugeMinValue' . ($i+1) . ']").val(\'' . jsreplace($arr[$i]["gaugeMinValue"]) . '\');'."\r\n";
			$b_includes .= '$("input[name=gaugeMaxValue' . ($i+1) . ']").val(\'' . jsreplace($arr[$i]["gaugeMaxValue"]) . '\');'."\r\n";
			
			for ( $j=0; $j < count($arr[$i]["gaugeColorZone"]); $j++ ) 
			{
				$b_includes .= 'add_new_color('.($i+1).');'."\r\n";
				$b_includes .= '$("input[name=gaugeBeginColor' . ($i+1) . ']:last").val(\'' . jsreplace($arr[$i]["gaugeColorZone"][$j]["gaugeBeginColor"]) . '\');
				$("input[name=gaugeEndColor' . ($i+1) . ']:last").val(\'' . jsreplace($arr[$i]["gaugeColorZone"][$j]["gaugeEndColor"]) . '\');
				$("div[name=gaugeColor' . ($i+1) . ']:last").css("background-color","#'.$arr[$i]["gaugeColorZone"][$j]["gaugeColor"].'");';
				if ( $j!==0 ) {
					$b_includes .= '
					tr = $("input[name=gaugeBeginColor' . ($i+1) . ']:last").parents("tr:first");
					tr.attr("minus","yes");
					tr.find("input[name=minus'.($i+1).']:last").show();'."\r\n";
				}
			}
			$b_includes .= 'add_new_color('.($i+1).');'."\r\n";
		}
	}
	
	if(is_wr_custom())
		$label_name="";
	else
		$label_name=$arr[count($arr)-1]["table"].".";
		
	$b_includes .= '		
	$("select[id=field]").val(\'' . jsreplace($label_name.$arr[count($arr)-1]["name"]). '\');
	$("select[id^=field]").change();
	'."\r\n";
	for ( $i=0; $i < count($arr)-1; $i++ ) 
	{
		if(is_wr_custom())
			$table_name="";
		else
			$table_name=$arr[$i]["table"].".";
		$computed_value = ($arr[$i]["agr_func"]) ?
			$arr[$i]["agr_func"]."(".$table_name.$arr[$i]["name"].")" :
			$table_name.$arr[$i]["name"];
			
		if ($_SESSION['webcharts']['chart_type']['type']!="ohlc" && $_SESSION['webcharts']['chart_type']['type']!="candlestick")
		{
			$b_includes .= 'if($("select[id=field' . ($i+1) . ']").val()==\''.jsreplace($computed_value).'\')
			$("input[id=series_label_' . ($i+1) . ']").val(\''.jsreplace($arr[$i]["label"]).'\');'."\r\n";
		}
		else
			$b_includes .= '$("input[id=series_label_' . ($i+1) . ']").val(\''.jsreplace($arr[$i]["label"]).'\');'."\r\n";
	}		
}

$b_includes .= '});
</script>'."\r\n";


if(is_wr_project())
	$xt->assign("disable", "disabled");
	
if ($_SESSION['webcharts']['chart_type']['type']!="gauge" && $_SESSION['webcharts']['chart_type']['type']!="bubble")
	$xt->assign("separator","style='display:none'");

if ($_SESSION['webcharts']['chart_type']['type']!="bubble")
	$xt->assign("span_style","style='display:none'");

$xt->assign("b_includes", $b_includes);
	$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("chart_name_preview",$_SESSION['webcharts']['settings']['name']);

if ($_SESSION['webcharts']['chart_type']['type']=="gauge")
	$templatefile = GetTemplateName("", "webchart4_gauge");
elseif ($_SESSION['webcharts']['chart_type']['type']=="ohlc" || $_SESSION['webcharts']['chart_type']['type']=="candlestick")
	$templatefile = GetTemplateName("", "webchart4_ohlc");
else
	$templatefile = GetTemplateName("", "webchart4");
$xt->display($templatefile);


?>