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
include('include/xtempl.php');
$xt = new Xtempl();

$arr_tables_db = DBGetTablesListByGroup("db");
$arr_tables_project = DBGetTablesListByGroup("project");
$arr_tables_custom = DBGetTablesListByGroup("custom");

$root=&$_SESSION["webcharts"];
$_SESSION["webchart".GoodFieldName(@$root["settings"]["name"])."_search"]="";

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
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$b_includes .= '
<script type="text/javascript">'."\r\n";

if (is_wr_db() && pre8count($arr_tables_db)) {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webchart1").'",
		PREV_PAGE_URL = "'.GetTableLink("webreport").'";
	'."\r\n";
} else {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webchart3").'",
		PREV_PAGE_URL = "'.GetTableLink("webreport").'";
	'."\r\n";
}

$b_includes .= '
var timeout	= 200,
	closetimer	= 0;

$(document).ready(function(){';
if($wr_is_standalone)
	$b_includes .= '$("#radio_project").hide();';
$b_includes .= '
	$("a#sql_query").fancybox({
		fitToView: false,
				autoSize: false,
				width : 800,
				height : 550,
				overlayShow: true
	});
	';
$b_includes .= alertDialog();
	
	$b_includes.='$("#radio_db,#radio_project,#radio_custom").click(function(){
		$("#tables").empty();
		$("#li_db").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_project").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_custom").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_db").css("background","");
		$("#li_project").css("background","");
		$("#li_custom").css("background","");
		if($(this).attr("id")=="radio_db")
		{
			$("#add_new_query").hide();
			$("#li_db").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");;
			li_selected="db";
			$("#tl").html("'."Select table which you will use to create the chart:".'");
			NEXT_PAGE_URL = "'.GetTableLink("webchart1").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
	$b_includes .= '
			$("td[id=row1], td[id=row2]").show();'."\r\n";			
	foreach ($arr_tables_db as $tbl) 
	{
		$selected="";
		if ( !empty( $root['tables'] ) )
			if ( in_array( $tbl,$root['tables'] ) )
				$selected = "selected";
			$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl)."').html('".jsreplace($tbl)."').appendTo($('#tables'));"."\r\n";
	}		
	$b_includes .= '
		}
		else if($(this).attr("id")=="radio_project")
		{
			$("#add_new_query").hide();
			$("#li_project").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");;
			li_selected="project";
			$("#tl").html("'."Select table which you will use to create the chart:".'");
			NEXT_PAGE_URL = "'.GetTableLink("webchart3").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
	$b_includes .= '
			$("td[id=row1], td[id=row2]").hide();'."\r\n";
	foreach ($arr_tables_project as $tbl) 
	{
		$selected="";
		if ( !empty( $root['tables'] ) )
			if ( in_array( $tbl, $root['tables'] ) )
				$selected = "selected";
		$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl)."').html('".jsreplace(getCaptionTable($tbl)). (getCaptionTable($tbl)!=$tbl ? '&nbsp;('.jsreplace($tbl).')' : '' )."').appendTo($('#tables'));"."\r\n";
	}		
		
	$b_includes .= '
		}
		else
		{';
		
	
		if(isWRAdmin() && ($_SESSION['webcharts']['tmp_active']=="x" || $root['settings']['title']==""))
			$b_includes .= '$("#add_new_query").show();';
		else
			$b_includes .= '$("#add_new_query").hide();';
	$b_includes .= '
			li_selected="custom";
			$("#li_custom").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");;
			$("#tl").html("'."Select SQL query which you will use to create the chart:".'");
			NEXT_PAGE_URL = "'.GetTableLink("webchart3").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
	$b_includes .= '
			$("td[id=row1], td[id=row2]").hide();'."\r\n";
	foreach ($arr_tables_custom as $tbl) 
	{
		$selected="";
		if ( !empty( $root['tables'] ) )
			if ( in_array( $tbl["sqlname"], $root['tables'] ))
				$selected = "selected";
			if(postvalue("sqlname")==$tbl["sqlname"])
				$selected = "selected";
		$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl["sqlname"])."').html('".jsreplace(getCaptionTable($tbl["sqlname"]))."').appendTo($('#tables'));"."\r\n";
	}		
		
	$b_includes .= '
	}
	$("li").css("list-style-type","none");	
	$(".selected").css("padding-bottom","0px");
	if($("#tables").get(0).selectedIndex==-1)
		$("#tables").get(0).selectedIndex=0;
	empty_table_list();
	});
	
	';
	
	$b_includes .= '

	li_selected="db";
	$("#tl").attr("html","Select table which you will use to create the chart:");
	$(function() {
		$("#radio_select_table").tabs();';
if(postvalue("sqlname"))
	$b_includes .= '
					li_selected_start="custom";
					$("#radio_custom").click();
					li_selected="custom";
					$("#tl").html("'."Select SQL query which you will use to create the report:".'");
					';
else
{	
	if(is_wr_db() && pre8count($arr_tables_db))
		$b_includes .= '
						li_selected_start="db";
						$("#radio_db").click();
						li_selected="db";
						$("#tl").html("'."Select table which you will use to create the chart:".'");
						';
	elseif(is_wr_project() && pre8count($arr_tables_project))
		$b_includes .= '
						li_selected_start="project";
						$("#radio_project").click();
						li_selected="project";
						$("#tl").html("'."Select table which you will use to create the chart:".'");
						';
	else
		$b_includes .= '
						li_selected_start="custom";
						$("#radio_custom").click();
						li_selected="custom";
						$("#tl").html("'."Select SQL query which you will use to create the report:".'");
						';
}
	$b_includes .= '});
	
	function empty_table_list()
	{
		if($("#tables").val()==null)
		{
			$("#nextbtn,#sqlbtn,#jumpto").css("display","none");
			$("#nextbtn,#sqlbtn,#jumpto").parent("span").css("display","none");
		}
		else
		{
			$("#nextbtn,#sqlbtn,#jumpto").css("display","");
			$("#nextbtn,#sqlbtn,#jumpto").parent("span").css("display","");

		}
	}
	function collect_input_data() {
		var output = {};
		output.table_type=li_selected;
		output.tables = [];
		$(":selected").each(function(i){
			output.tables[i] = $(this).val();
		});
		return JSON.stringify(output);		
	}
	
	$("#sqlbtn").click(function(){
		
		var output = collect_input_data();
		
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "tables",
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
	
	$("#row0")
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

if (pre8count(GetUserGroups()) < 2 || $root['settings']['status']!="public" )
{
	$b_includes .= '$("td[id=row7]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row9]").hide();'."\n";

//if ($root['settings']['title'] == "") {
//	$b_includes .= '
//		for (var i=2; i<=7; i++){
//			$("td[id=row" + i + "]").hide();
//		};
//	'."\r\n";
//}

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webchart".$ri)."';\r\n";


$b_includes .= '
	$("a#a_addsql").fancybox({
		fitToView: false,
				autoSize: false,
				width : 850,
				height : 550,
				overlayShow: true
	});
	
	$("#addsql").click(function(){
		$("#a_addsql").click();
	});
	
	$("#nextbtn, #backbtn, td[id^=row], #savebtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = NEXT_PAGE_URL;
		if( this.id == "backbtn" )
			URL = PREV_PAGE_URL;
		if( this.id.substr(0,3)=="row" && this.id != "row0" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row8" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row9" )
			URL = "'.GetTableLink("menu").'";

		if (this.id == "backbtn" || this.id == "row8" || this.id == "row9") {
			window.location = URL;
			return;
		}
		
		var output = collect_input_data();
		thisid=this.id;
		if(this.id !="row0") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "tables",
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
	
	if ($("option:selected").length == 0) {
		$("select").get(0).selectedIndex = 0;
	}
	empty_table_list();';
$tables = "";
$arr_tables = array();

if (is_wr_db() && pre8count($arr_tables_db)) 
{
	$arr_tables = $arr_tables_db;
	$isCustom=false;
} 
elseif(pre8count($arr_tables_project) && is_wr_project())
{
	$arr_tables = $arr_tables_project;
	$isCustom=false;
}
else
{
	$arr_tables = $arr_tables_custom;
	$isCustom=true;
}

$b_includes .= '});
</script>'."\r\n";


$xt->assign("b_includes", $b_includes);	
	
foreach ($arr_tables as $tbl_name) 
{
	if($isCustom)
	{
		$tbl=$tbl_name["sqlname"];
		$isStorProc=$tbl_name["isStorProc"];
	}
	else
	{
		$tbl=$tbl_name;
		$isStorProc=false;
	}	
	$selected = "";
	if ( !empty( $root['tables'] ) ){
		if ( in_array( $tbl, $root['tables'] ) )
			$selected = "selected";
	}
	$tables .= '<option ' . $selected . ' value="' . runner_htmlspecialchars($tbl) . '">'.(!is_wr_project() ? $tbl : getCaptionTable($tbl)) . (is_wr_project() ? (getCaptionTable($tbl)!=$tbl ? "&nbsp;(".$tbl.")" : "" ) : "").'</option>'."\r\n";
}

if (@$root['settings']['title'] != "") {
	$xt->assign("chart_title",", "."Title".": ".@$root['settings']['title']);
} else {
	$xt->assign("chart_title","");
}
$xt->assign("tables", $tables);

if(!pre8count($arr_tables_db) && !pre8count($arr_tables_project) || !pre8count($arr_tables_custom) && !pre8count($arr_tables_project) || !pre8count($arr_tables_custom) && !pre8count($arr_tables_db))
	$xt->assign("radio_style","style='display:none';");
	
if(pre8count($arr_tables_db))
	$xt->assign("view_radio_db",true);
if(pre8count($arr_tables_project))
	$xt->assign("view_radio_project",true);

$templatefile = GetTemplateName("", "webchart0");
$xt->display($templatefile);

?>