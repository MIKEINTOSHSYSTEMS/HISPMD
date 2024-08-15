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

include('include/xtempl.php');
$xt = new Xtempl();

$arr_tables_db = DBGetTablesListByGroup("db");
$arr_tables_project = DBGetTablesListByGroup("project");
$arr_tables_custom = DBGetTablesListByGroup("custom");
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

$_SESSION["webreport".GoodFieldName($_SESSION["webreports"]["settings"]["name"])."_search"]="";

$b_includes .= '
<script type="text/javascript">'."\r\n";

if ( is_wr_db() && !!$arr_tables_db ) {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webreport1").'",
		PREV_PAGE_URL = "'.GetTableLink("webreport").'";
	'."\r\n";
} else {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webreport3").'",
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
	table_name=$("#tables").val();
	li_selected="db";
	$("#tl").html("'."Select table which you will use to create the report:".'");
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
	if(is_wr_db() && !!$arr_tables_db )
		$b_includes .= '
						li_selected_start="db";
						$("#radio_db").click();
						li_selected="db";
						$("#tl").html("'."Select table which you will use to create the report:".'");
						';
	elseif(is_wr_project() && !!$arr_tables_project )
		$b_includes .= '
						li_selected_start="project";
						$("#radio_project").click();
						li_selected="project";
						$("#tl").html("'."Select table which you will use to create the report:".'");
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
		
		$("#radio_db,#radio_project,#radio_custom").click(function(){
		if($(this).parent().hasClass("selected"))
			return;
		$("#add_new_query").hide();
		$("#tables").empty();
		$("#li_db").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_project").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_custom").removeClass("selected").removeClass("ui-state-selected").removeClass("ui-state-active");
		$("#li_db").css("background","");
		$("#li_project").css("background","");
		$("#li_custom").css("background","");
		if($(this).attr("id")=="radio_db")
		{
			$("#li_db").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");
			li_selected="db";
			$("#tl").html("'."Select table which you will use to create the report:".'");
			NEXT_PAGE_URL = "'.GetTableLink("webreport1").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
	$b_includes .= '$("td[id=row1], td[id=row2]").show();'."\r\n";			
	foreach ($arr_tables_db as $tbl) 
	{
		$selected="";
		if ( !empty( $_SESSION['webreports']['tables'] ) )
			if ( in_array( $tbl, $_SESSION['webreports']['tables'] ) )
				$selected = "selected";
						$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl)."').html('".jsreplace($tbl)."').appendTo($('#tables'));"."\r\n";
	}		
		$b_includes .= '
		}
		else if($(this).attr("id")=="radio_project")
		{
			$("#li_project").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");
			$("#add_new_query").hide();
			li_selected="project";
			$("#tl").html("'."Select table which you will use to create the report:".'");
			NEXT_PAGE_URL = "'.GetTableLink("webreport3").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
			$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
	foreach ($arr_tables_project as $tbl) 
	{
		$selected="";
		if ( !empty( $_SESSION['webreports']['tables'] ) )
			if ( in_array( $tbl, $_SESSION['webreports']['tables'] ) )
				$selected = "selected";
				$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl)."').html('".jsreplace(getCaptionTable($tbl)). (getCaptionTable($tbl)!=$tbl ? '&nbsp;('.jsreplace($tbl).')' : '' )."').appendTo($('#tables'));"."\r\n";
	}		
		
	$b_includes .= '
	}
	else
	{
			$("#li_custom").addClass("selected").addClass("ui-state-selected").addClass("ui-state-active");
			$("#add_new_query").show();
			$("#tl").html("'."Select SQL query which you will use to create the report:".'");
			li_selected="custom";';
		if(isWRAdmin() && ($_SESSION['webreports']['tmp_active']=="x" || @$_SESSION['webreports']['settings']['title']==""))
			$b_includes .= '$("#add_new_query").show();';
		else
			$b_includes .= '$("#add_new_query").hide();';
	$b_includes .= '
	
			NEXT_PAGE_URL = "'.GetTableLink("webreport3").'";
			PREV_PAGE_URL = "'.GetTableLink("webreport").'";';
			$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
	foreach ($arr_tables_custom as $tbl) 
	{
		if(!$tbl["isStorProc"])
		{
			$selected="";
			if ( !empty( $_SESSION['webreports']['tables'] ) )
				if ( in_array( $tbl["sqlname"], $_SESSION['webreports']['tables'] ) )
					$selected = "selected";
				if(postvalue("sqlname")==$tbl["sqlname"])
					$selected = "selected";
				$b_includes .= "$('<option ".$selected."></option>').attr('value', '".jsreplace($tbl["sqlname"])."').html('".jsreplace(getCaptionTable($tbl["sqlname"]))."').appendTo($('#tables'));"."\r\n";
		}
	}		
	$b_includes .= '
	}
	$("li").css("list-style-type","none");	
	$(".selected").css("padding-bottom","0px");
	
	if($("#tables").get(0).selectedIndex==-1)
		$("#tables").get(0).selectedIndex=0;
	
	//if(li_selected_start!=li_selected)
	//	$("#row5,#row6").show();
	//else if(table_name==$("#tables").val())
	//	$("#row5,#row6").hide();		
	empty_table_list();
	});
	
	
	$("#tables").change(function(){
		if(table_name==$("#tables").val())
			$("#row5,#row6").hide();
		else
			$("#row5,#row6").show();
	});
	
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
		$(".rnr-page :selected").each(function(i){
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
				web: "webreports",
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

if (count(GetUserGroups()) < 2 || $_SESSION['webreports']['settings']['status'] != "public" ) {
	$b_includes .= '$("td[id=row9]").hide();'."\r\n";
}

if (is_wr_project()  || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\n";
}
	
if($wr_is_standalone)
	$b_includes .= '$("td[id=row11]").hide();'."\n";	

$groupFieldCount = $_SESSION['webreports']['group_fields'] 
	? count( $_SESSION['webreports']['group_fields'] )
	: 0;
if($_SESSION['webreports']['group_fields'][ $groupFieldCount - 1 ]["cross_table"]=="true")
	$b_includes .= '$("#row5,#row6").hide();'."\r\n";

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webreport".$ri)."';\r\n";

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
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";
		if (this.id == "backbtn" || this.id == "row10" || this.id == "row11") {
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
					web: "webreports",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						window.location = URL;
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
						if( thisid == "row10" || thisid == "row11")
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

if ( is_wr_db() && !!$arr_tables_db ) 
{
	$arr_tables = $arr_tables_db;
	$isCustom=false;
} 
elseif( !!$arr_tables_project && is_wr_project())
{
	$arr_tables = $arr_tables_project;
	$isCustom=false;
}
else
{
	$arr_tables = $arr_tables_custom;
	$isCustom=true;
}

$b_includes .= '
});
</script>'."\r\n";


$xt->assign("b_includes", $b_includes);


foreach ($arr_tables as $tbl_name) {
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
	if(!$isStorProc)
	{
		$selected = "";
		if ( !empty( $_SESSION['webreports']['tables'] ) ){
			if ( in_array( $tbl, $_SESSION['webreports']['tables'] ) )
				$selected = "selected";
		}
			$tables .= '<option ' . $selected . ' value="' . runner_htmlspecialchars($tbl) . '">'.(!is_wr_project() ? $tbl : getCaptionTable($tbl)) . (is_wr_project() ? (getCaptionTable($tbl)!=$tbl ? "&nbsp;(".$tbl.")" : "" ) : "").'</option>'."\r\n";
	}
}

if (@$_SESSION['webreports']['settings']['title'] != "") {
	$xt->assign("report_title",", "."Title".": ".@$_SESSION['webreports']['settings']['title']);
} else {
	$xt->assign("report_title","");
}
$xt->assign("tables", $tables);

if( !$arr_tables_db && !$arr_tables_project || !$arr_tables_custom && !$arr_tables_project || !$arr_tables_custom && !$arr_tables_db )
	$xt->assign("radio_style","style='display:none';");
	
if( !!$arr_tables_db )
	$xt->assign("view_radio_db",true);
if( !!$arr_tables_project )
	$xt->assign("view_radio_project",true);

$xt->assign("wr_pagestylepath", $wr_pagestylepath);

$templatefile = GetTemplateName("", "webreport0");
$xt->display($templatefile);
?>
