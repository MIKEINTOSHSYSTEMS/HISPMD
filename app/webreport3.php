<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

	if( !Security::getUserName() )
	{
		$_SESSION["MyURL"] = GetTableLink("webreport");
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	}

Reload_Report(postvalue("rname"));

if (is_wr_project()) 
	include("include/" . GetTableURL( $_SESSION['webreports']['tables'][0] ) . "_variables.php");


include('include/xtempl.php');
$xt = new Xtempl();

$arr_tables = getReportTablesList();
$group_fields = array();

foreach($arr_tables as $t)
{
	$tfields = WRGetNBFieldsList($t);
	foreach($tfields as $f)
	{
		if(is_wr_db())
			$group_fields[] = $t.".".$f;
		else
			$group_fields[] = $f;
	}
}
if (@$_SESSION['webreports']['settings']['title'] != "") {
	$title=@$_SESSION['webreports']['settings']['title'];
	if(strlen($title)>25)
		$title=substr($title,25)."...";
	$xt->assign("report_title",", "."Title".": ".$title);
} else {
	$xt->assign("report_title","");
}
if (@$_SESSION['webreports']['tables'][0] != "") {
	$stable=@$_SESSION['webreports']['tables'][0];
	if(strlen($stable)>25)
		$stable=substr($stable,25)."...";

	$xt->assign("report_table",", "."Table".": ".$stable);
} else {
	$xt->assign("report_table","");
}
	
$xt->assign("b_is_report_save",($_SESSION['webreports']['tmp_active'] != "x"));
$xt->assign("b_is_report_name",($_SESSION['webreports']['settings']['name'] != ""));
$xt->assign("report_name",$_SESSION['webreports']['settings']['name']);

$sGroupFields = "";
$types = "";


$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/stylesheet.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
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

arr_color["0"]="FFFFFF";

arr_color["1"]="FF0000";
arr_color["2"]="008000";
arr_color["3"]="0000FF";

arr_color["4"]="DC143C";
arr_color["5"]="2E8B57";
arr_color["6"]="6A5ACD";

arr_color["7"]="FF7F50";
arr_color["8"]="7FFF00";
arr_color["9"]="5F9EA0";

arr_color["10"]="FF8C00";
arr_color["11"]="8FBC8B";
arr_color["12"]="00008B";

arr_color["13"]="FF1493";
arr_color["14"]="556B2F";
arr_color["15"]="00BFFF";

arr_color["16"]="FF69B4";
arr_color["17"]="008B8B";
arr_color["18"]="ADD8E6";

arr_color["19"]="F08080";
arr_color["20"]="32CD32";
arr_color["21"]="4169E1";

arr_color["22"]="A52A2A";
arr_color["23"]="006400";
arr_color["24"]="6495ED";
'."\r\n";
$b_includes .= 'fld_types = new Array();'."\r\n";

if(is_wr_custom())
{
	$fields_type=array();
	$fields_type=WRGetAllCustomFieldType();
}

foreach ($group_fields as $fld) {
	if(!is_wr_custom())
		$type = WRGetFieldType($fld);
	else
		$type = $fields_type[$fld];

	if ( IsNumberType( $type ) ) {
		$b_includes .= "fld_types['" . jsreplace($fld) . "'] = \"number\";"."\r\n";
	} elseif ( IsCharType( $type ) ) {
		$b_includes .= "fld_types['" . jsreplace($fld) . "'] = \"string\";"."\r\n";
	} elseif ( IsDateFieldType( $type ) ) {
		$b_includes .= "fld_types['" . jsreplace($fld) . "'] = \"date\";"."\r\n";
	}
}

if (is_wr_db()) {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webreport4").'",
		PREV_PAGE_URL = "'.GetTableLink("webreport2").'";
	'."\r\n";
} else {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webreport4").'",
		PREV_PAGE_URL = "'.GetTableLink("webreport0").'";
	'."\r\n";	
}

$b_includes .= '
var timeout	= 200,
	closetimerpicker	= 0,
	closetimer=0,
	timeoutpicker	 = 300,
	relation_stack = [],
	int_types = new Array(
		[0, "Normal"],
		[10, "10s"],
		[50, "50s"],
		[100, "100s"],
		[500, "500s"],
		[1000, "1000s"]
	),
	str_types = new Array(
		[0, "Normal"],
		[1, "1st Letter"],
		[2, "2 Initial Letters"],
		[3, "3 Initial Letters"],
		[4, "4 Initial Letters"],
		[5, "5 Initial Letters"]
	),
	date_types = new Array(
		[0, "Normal"],
		[1, "Year"],
		[2, "Quarter"],
		[3, "Month"],
		[4, "Week"],
		[5, "Day"],
		[6, "Hour"],
		[7, "Minute"]
	);

$(document).ready(function(){
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
	function add_dataseries(th)
	{
		total_fields=$("select[id^=field]").length;
		this_id=parseInt($(th).attr("id").replace("field",""));
		if($(th)[0].selectedIndex==0)
		{
			color="FFFFFF";
			if(this_id<25) 
				color=arr_color[this_id];
			$("#picker"+this_id).css("background-color",color);
			for(i=this_id+1;i<=total_fields;i++)
				$("#groupfield"+i).remove();
		}
		else
		{
			if($("select[id=field"+total_fields+"]")[0].selectedIndex!=0)
			{
				groupfield=$("tr[id=clone]").clone();
				groupfield.insertBefore("#end_of_group_fields");
				groupfield.attr("id","groupfield"+parseInt(total_fields+1));
				groupfield.find("input:eq(0)").attr("id","go"+parseInt(total_fields+1))
					.attr("name","go"+parseInt(total_fields+1))
					.attr("value",parseInt(total_fields+1));
				groupfield.find("select:eq(0)").attr("id","field"+parseInt(total_fields+1))
					.attr("name","field"+parseInt(total_fields+1))
					.change(function(){
						add_dataseries(this);
					})[0].selectedIndex = 0;
				groupfield.find("select:eq(1)").attr("id","type"+parseInt(total_fields+1))
					.attr("name","type"+parseInt(total_fields+1));
				groupfield.find("select:eq(2)").attr("id","group_type"+parseInt(total_fields+1))
					.attr("name","group_type"+parseInt(total_fields+1));
				groupfield.find("input:eq(1)").attr("id","ss"+parseInt(total_fields+1))
					.attr("name","ss"+parseInt(total_fields+1));
				color = "FFFFFF";
				if((total_fields+1)<25) 
					color = arr_color[total_fields+1];
				arr = HexToDec(color);
				red = parseInt( arr[0] * 0.85 );
				green = parseInt( arr[1] * 0.85 );
				blue = parseInt( arr[2] * 0.85 );
				hex = DecToHex( red, green, blue );
				groupfield.find("div:eq(0)").attr("id","picker"+parseInt(total_fields+1))
					.css("background-color",color)
					.attr("color1",color)
					.attr("color2",hex)
					.click(function(){
						click_color_event(this);
					});
				groupfield.find(".selector").click(function(){
					click_color_event(this);
				});
				groupfield.show();
			}
		}
		$("select[id=type" + this_id + "]").empty();
	  	switch ( fld_types[th.value] ) {
			case "number":
				for (var i=0; i < int_types.length; i++) {
					$("select[id=type" + this_id + "]").append(\'<option value="\' + int_types[i][0] + \'">\' + int_types[i][1] + \'</option>\');
				}
				$("select[id=type" + this_id + "]")[0].selectedIndex = 0;
				break;
			case "string":
				for (var i=0; i < str_types.length; i++) {
					$("select[id=type" + this_id + "]").append("<option value=\"" + str_types[i][0] + "\">" + str_types[i][1] +"</option>");
				}
				$("select[id=type" + this_id + "]")[0].selectedIndex = 0;
				break;
			case "date":
				for (var i=0; i < date_types.length; i++) {
					$("select[id=type" + this_id + "]").append(\'<option value="\' + date_types[i][0] + \'">\' + date_types[i][1] + \'</option>\');
				}
				$("select[id=type" + this_id + "]")[0].selectedIndex = 0;
				break;
			default:
				break;
		}
	}
	function collect_input_data() {
		var output = {};
		output.group_fields = [];
		k=0;
		$("tr[id^=groupfield]").each(function(i){
			val_field=$(this).find("select:eq(0)").val();
			flag=true;
			$("tr[id^=groupfield]").each(function(j){
				if(j >= i)
					return false;
				if(j<i && val_field==$(this).find("select:eq(0)").val()){
					flag = false;
					return false;
				}
			});
			if ( $(this).find("select:eq(0)").val() != "" && $(this).find("select:eq(0)").val() != undefined && flag) {
				output.group_fields[k] = {
					name        : $("select[id^=field]",this).val(),
					int_type    : $("select[id^=type]",this).val(),
					ss          : $("input[id^=ss]",this).prop("checked").toString(),
					group_order : $("input[id^=go]",this).val(),
					group_type      : $("select[id^=group_type]",this).val(),
					color1      : $("div[id^=picker]",this).attr("color1"),
					color2      : $("div[id^=picker]",this).attr("color2")
				};
				k++;
			}
		});
		output.group_fields.push({
			name : "Summary",
			cross_table	: $("#select_cross")[0].checked.toString(),
			sps  : $("#sps").prop("checked").toString(),
			sds  : $("#sds").prop("checked").toString(),
			sgs  : $("#sgs").prop("checked").toString(),
			sum_x  : $("#sum_x").prop("checked").toString(),
			sum_y  : $("#sum_y").prop("checked").toString(),
			sum_total  : $("#sum_total").prop("checked").toString()
			});
		return JSON.stringify(output);
	}';
	
$b_includes .= colorPickerMouse();

$b_includes .= '
	
	$("#sum_x,#sum_y").click(function(){
		if(!$("#sum_x")[0].checked || !$("#sum_y")[0].checked)
		{
			$("#sum_total")[0].checked=false;
			$("#sum_total")[0].disabled=true;
		}
		else
			$("#sum_total")[0].disabled=false;
	});
	$("#select_cross").click(function(){
		show_hide_cross_table_report($(this)[0].checked);
	});
	function show_hide_cross_table_report(ch)
	{
		if(ch)
		{
			$("td[name=report_col],th[name=report_col],table[name=report_col]").hide();
			$("td[name=cross_col],th[name=cross_col],table[name=cross_col]").show();
			if($("#field2").length>0)
			{
				if($("#field2")[0].selectedIndex==0)
				{
					$("#field2")[0].selectedIndex=2;
					$("#field2").change();
					$("#group_type2")[0].selectedIndex=1;
				}
			}
			$("#row5,#row6").hide();
			if(!$("#sum_x")[0].checked || !$("#sum_y")[0].checked)
			{
				$("#sum_total")[0].checked=false;
				$("#sum_total")[0].disabled=true;
			}
			else
				$("#sum_total")[0].disabled=false;
		}
		else
		{
			$("td[name=report_col],th[name=report_col],table[name=report_col]").show();
			$("td[name=cross_col],th[name=cross_col],table[name=cross_col]").hide();
			$("#row5,#row6").show();
		}
	}
	$("select[id^=field]").change(function(){
	  	add_dataseries(this);
	});	
	$("#row3")
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
 

'."\r\n";

$b_includes .= JumpTo();

if (count(GetUserGroups()) < 2
	|| isset( $_SESSION['webreports']['settings']['status'] ) && $_SESSION['webreports']['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row9]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row11]").hide();'."\n";

if ($_SESSION['webreports']['settings']['title'] == "") {
	$b_includes .= '
		for (var i=2; i<=9; i++){
			$("td[id=row" + i + "]").hide();
		};
	'."\r\n";
}

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webreport".$ri)."';\r\n";
    
$b_includes .= '
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn").click(function(){
		if($("#colorPickerVtd"))
			$("#colorPickerVtd").hide();
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = NEXT_PAGE_URL;
		if( this.id == "backbtn" )
			URL = PREV_PAGE_URL;
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row3" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";
			
		var output = collect_input_data();
		var_save=0;
		if( this.id == "savebtn")
			var_save=1;
		if( this.id == "savebtn" || this.id == "previewbtn" ) {
			id=this.id;
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: var_save,
					web: "webreports",
					name: "group_fields",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						if(id=="savebtn")
						{
							$("#alert")
								.html("<p>'."Report Saved".'</p>")
								.dialog("option", "close", function(){
									window.location = "'.GetTableLink("webreport").'";
								})
								.dialog("open");
						}
						else
							$("#preview").click();
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
					}
				},
				error: function() {
					$("#alert").html("<p>'."Some problems appear during saving".'</p>").dialog("open");
				}
			});
		}

		thisid=this.id;
		if(this.id != "row3" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "group_fields",
					web: "webreports",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						window.location = URL;
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
						if( thisid == "row10" || thisid == "row11" )
							window.location=URL;	
					}
				}
			});
		}
	});'."\r\n";

foreach ($group_fields as $fld) {
   $sGroupFields .= "<option value=\"" . runner_htmlspecialchars($fld) . "\">" . $fld . "</option>"."\r\n";
}

$aGroupFields = array();
//$aGroupFields = $sGroupFields;
$aTypes = array();
$aChecked = array();
$aColor1 = array();
$aColor2 = array();
$aGrTypes=array();

$arr = $_SESSION['webreports']['group_fields'];
if(count($arr)==1)
{
	$arr[]=$arr[0];
	$table=@$_SESSION['webreports']['tables'][0];
    $arr_fields = WRGetNBFieldsList($table);

	$gfield=$arr_fields[0];
	if(is_wr_db())
		$gfield=$table.".".$arr_fields[0];
	$arr[0] = array(

        array(
			"name" => $gfield,
            "int_type" => "0",
            "ss" => "true",
            "group_order" => "1",
            "color1" => "FF0000",
            "color2" => "CC0000"
        )
    );		
}
	
if ( !empty( $arr )){
	for ( $i=0; $i < count($arr)-1; $i++ ) {
	
		$sGroupFields = "";
		$key=0;
		$j=0;
		foreach ($group_fields as $fld) 
		{
			if($fld == $arr[$i]["name"])
				$key=$j+1;
			$sGroupFields .= "<option value=\"" . runner_htmlspecialchars($fld) . "\">" . $fld . "</option>"."\r\n";
			$j++;
		}
		$aGroupFields[$i] = $sGroupFields;
		$aTypes[$i] = $arr[$i]["int_type"];
		$aColor1[$i] = $arr[$i]["color1"];
		$aColor2[$i] = $arr[$i]["color2"];
		$aGrTypes[$i] = $arr[$i]["group_type"];
		if($arr[$i]["ss"] == "true")
			$b_includes .= '$("#ss'.($i+1).'")[0].checked=true;';
		$b_includes .= '
		$("#field'.($i+1).'")[0].selectedIndex='.$key.';
		add_dataseries($("#field'.($i+1).'"));
		'."\r\n";
	}

	$akeys = array_keys($arr);
	$summIdx = $akeys[count($akeys)-1];
	$xt->assign("sps", ( $arr[$summIdx]["sps"] == "true" ) ? "checked" : "");
	$xt->assign("sds", ( $arr[$summIdx]["sds"] == "true" ) ? "checked" : "");
	$xt->assign("sgs", ( $arr[$summIdx]["sgs"] == "true" ) ? "checked" : "");
	$xt->assign("sum_x", ( $arr[$summIdx]["sum_x"] == "true" ) ? "checked" : "");
	$xt->assign("sum_y", ( $arr[$summIdx]["sum_y"] == "true" ) ? "checked" : "");
	$xt->assign("sum_total", ( $arr[$summIdx]["sum_total"] == "true" ) ? "checked" : "");
} else {
	$xt->assign("sps", "");
	$xt->assign("sds", "checked");
	$xt->assign("sgs", "");
	$xt->assign("sum_x", "checked");
	$xt->assign("sum_y", "checked");
	$xt->assign("sum_total", "checked");
}

$is_crosstable_report="";
if(count($group_fields)<3)
	$b_includes .= '$("#select_cross").parent().parent().hide();
					$("#select_cross")[0].checked=false';
else	
	$is_crosstable_report=$arr[count($arr)-1]["cross_table"];

if($is_crosstable_report=="true")
	$b_includes .= '
		$("#select_cross")[0].checked=true;
		$("#row5,#row6").hide();show_hide_cross_table_report(true);
	'."\r\n";

for ( $i=0; $i < count($aGroupFields); $i++ ) {
	$xt->assign("groupFields" . ($i+1), $aGroupFields[$i]);
	//$xt->assign("schecked" . ($i+1), $aChecked[$i]);
}

$b_includes .= '
	$("select[id^=field]").change();'."\r\n";

for ( $i=0; $i < count($aTypes); $i++ ) {
	$b_includes .= '$("select[id=type' . ($i+1) . ']").children().each(function(i){
		if ( $(this).attr("value") == "' . $aTypes[$i] . '" ) {
			setTimeout("$(\'select[id=type' . ($i+1) . ']\')[0].selectedIndex = " + i + ";",500);
		}
	});'."\r\n";
}
for ( $i=0; $i < count($aGrTypes); $i++ ) {
	$b_includes .= '$("select[id=group_type' . ($i+1) . ']").children().each(function(i){
		if ( $(this).attr("value") == "' . $aGrTypes[$i] . '" ) {
			setTimeout("$(\'select[id=group_type' . ($i+1) . ']\')[0].selectedIndex = " + i + ";",500);
		}
	});'."\r\n";
}
for ( $i=0; $i < count($aColor1); $i++ ) {
	$b_includes .= ' var picker' . ($i+1) . ' = $("div[id=picker' . ($i+1) . ']");
	';
	if ( $aColor1[$i] != "" ) {
		$b_includes .= 'picker' . ($i+1) . '.css("background-color","#' . $aColor1[$i] . '");'."\r\n";
	}
	$b_includes .= 'picker' . ($i+1) . '.attr("color1", "' . $aColor1[$i] . '");' . "\r\n";
	$b_includes .= 'picker' . ($i+1) . '.attr("color2", "' . $aColor2[$i] . '");' . "\r\n";
	$b_includes .= 'if( $("#field'.($i+1).'").attr("disabled") ){' . "\r\n";
	$b_includes .= 'picker' . ($i+1) . '.css("cursor","default");' . "\r\n";
	$b_includes .= 'picker' . ($i+1) . '.parent().next("td").find("img").css("cursor","default");' . "\r\n";
	$b_includes .= '}' . "\r\n";

}

$b_includes .= '});
</script>';
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);
$xt->assign("b_includes", $b_includes);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$templatefile = GetTemplateName("", "webreport3");
$xt->display($templatefile);
?>