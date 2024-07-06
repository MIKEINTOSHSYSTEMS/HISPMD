<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

if(!isWRAdmin())
{
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: ".GetTableLink("webreport"));
	return;
}

include('include/xtempl.php');
$xt = new Xtempl();

$tables_admin_db = WRGetTableListAdmin("db");
$tables_admin_project = WRGetTableListAdmin("project");
$tables_admin_custom = WRGetTableListAdmin("custom");

$arr_tables_db = DBGetTablesList();
$arr_tables_project = GetTablesListReport();
$arr_tables_custom = GetTablesListCustom();

$groups = array();
if(!$wr_is_standalone)
	$arr_UserGroups = GetUserGroups();
else
{
	$arr_UserGroups = array();
	foreach(GetUserGroups() as $idx=>$value)
		if($value[0]!="Guest")
			$arr_UserGroups[]=$value;
}

$group_list="";
$groupSelected="";

$wr_user=postvalue("username");

if($wr_is_standalone)
{
	if(postvalue("editid1"))
	{
		// #9875 It's expected that webreport_users tables belong to the webreport db connection
		$_connection = $cman->getForWebReports();
		
		$sql = "select ".$_connection->addFieldWrappers("username")." from ".$_connection->addTableWrappers("webreport_users")
			." where ".$_connection->addFieldWrappers("id")."=".postvalue("editid1");
		
		$data = $_connection->query( $sql )->fetchNumeric();
		if( pre8count($data) )
			$wr_user = $data[0];
	}
}

if(pre8count($arr_UserGroups))
{
	usort($arr_UserGroups,"sortUserGroup");
	$groups=$arr_UserGroups;
	$i=0;

	if(!$wr_is_standalone)
		$xt->assign("group_header","User Groups");
	else
		$xt->assign("group_header","Users");
	$group_list="<select name=select_group_list id=select_group_list size=3 style='width:150px;";
	$group_list.="'>";
	foreach($arr_UserGroups as $val)
	{
		$sel="";
		if($wr_user=="" && $i==0 || $wr_user==$val[0])
		{
			$sel=" selected";
			$groupSelected=$val[0];
		}
		$group_list.="<option value=\"".$i."\"".$sel.">".runner_htmlspecialchars($val[1])."</option>";
		$i++;
	}
	$group_list.="</select>";
}
else
{
	$groups[]=array(0=>"",1=>"");
	$group_list.="<select name=select_group_list id=select_group_list size=0 style='display:none'><option value=\"0\" selected>0</option></select>";
}


$table_list="";
$i=0;

foreach($groups as $group_name)
{
	$table_list.="<span id=\"group_db_".$i."\" ";
	if($groupSelected!=$group_name[0])
		$table_list.="style='display:none;' ";
	$table_list.=">\n";
	foreach($arr_tables_db as $ind=>$table)
	{
		$chbox="";
		foreach($tables_admin_db as $val)
			if($table==$val["tablename"] && $group_name[0]==$val["group"])
				$chbox=" checked";
			
		$table_list.="<input type=\"checkbox\" dbname=\"db\" groupname=\"".runner_htmlspecialchars($group_name[0])."\" id=\"adm_tables_".$ind."_".$i."_db\" value=\"".runner_htmlspecialchars($table)."\" ".$chbox.">&nbsp;&nbsp;".$table."<br>\n";
	}
	$table_list.="</span>\n";
	
	$table_list.="<span id=\"group_project_".$i."\" ";
	$table_list.="style='display:none;' ";
	$table_list.=">\n";
	foreach($arr_tables_project as $ind=>$table)
	{
		$chbox="";
		foreach($tables_admin_project as $val)
			if($table==$val["tablename"] && $group_name[0]==$val["group"])
				$chbox=" checked";
			
		$table_list.="<input type=\"checkbox\" dbname=\"project\" groupname=\"".runner_htmlspecialchars($group_name[0])."\" id=\"adm_tables_".$ind."_".$i."_project\" value=\"".runner_htmlspecialchars($table)."\" ".$chbox.">&nbsp;&nbsp;".$table."<br>\n";
	}
	$table_list.="</span>\n";
	
	$table_list.="<span id=\"group_custom_".$i."\" ";
	$table_list.="style='display:none;' ";
	$table_list.=">\n";
	foreach($arr_tables_custom as $ind=>$table)
	{
		$chbox="";
		foreach($tables_admin_custom as $val)
			if($table["sqlname"]==$val["tablename"] && $group_name[0]==$val["group"])
				$chbox=" checked";
			$custom_bold1="";
			$custom_bold2="";
			if(postvalue("queryname")==$table["sqlname"])
			{
				$custom_bold1="<b>";
				$custom_bold2="</b>";
			}
		$table_list.="<input type=\"checkbox\" dbname=\"custom\" groupname=\"".runner_htmlspecialchars($group_name[0])."\" id=\"adm_tables_".$ind."_".$i."_custom\" value=\"".runner_htmlspecialchars($table["sqlname"])."\" ".$chbox.">&nbsp;&nbsp;".$custom_bold1.$table["sqlname"].$custom_bold2."<br>\n";
	}
	$table_list.="</span>\n";
	$i++;
}

$b_includes = "";
$h_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/stylesheet.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/json.js").'"></script>
'."\r\n";

$xt->assign("h_includes", $h_includes);

$b_includes .= '
<script type="text/javascript">'."\r\n";
  
$b_includes .= '
$(document).ready(function(){';

if($wr_is_standalone)
	$b_includes .= '$("#li_project").hide();';

$b_includes .= alertDialog();
$b_includes .= '
	li_selected="db";
	$(function() {
		$("#radio_select_table").tabs();
	});
	$("li").css("list-style-type","none");	
	$(".selected").css("padding-bottom","0px");
	$("#backbtn").click(function(){
		window.location = "'.GetTableLink("webreport").'";
		return;
	});
	$("#select_group_list").click(function(){
		db_type=li_selected;
		$("span[id^=group_"+db_type+"]").css("display","none");
		gr=$("select[id=select_group_list] option:selected").val();
		$("#group_"+db_type+"_"+gr).css("display","");
		check_all_box();
	});
	
	$("#saveexitbtn").click(function(){
		i=0;
		output = {};
		$("input[id^=adm_tables]").each(function()
		{
			if(this.checked)
			{
				output[i] = {};
				output[i]["table"]=this.value;
				output[i]["group"]=$(this).attr("groupname");
				output[i]["db_type"]=$(this).attr("dbname");
				i++;
			}
		}
		);
		output=JSON.stringify(output);
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-admin").'",
			data: {
				name: "admin_table",
				output: output,
				rnd: (new Date().getTime())
			},
			success: function(msg)
			{
				if ( msg == "OK" ) 
				{
					window.location = "'.GetTableLink("webreport").'";
					return false;
				}
			}
		});
	});
	
	$("#ch_all").click(function(){
		ngroup=$("select[@id=select_group_list] option:selected").val();
		if($(this).attr("checked"))
			$("input[id$=_"+ngroup+"_"+li_selected+"]").attr("checked",true);
		else
			$("input[id$=_"+ngroup+"_"+li_selected+"]").attr("checked",false);
	});
	
	$("input[id^=adm_tables_]").click(function(){
		check_all_box();
	});
	
	$("#radio_db,#radio_project,#radio_custom").click(function(){
		$("#li_db").removeClass("selected");
		$("#li_project").removeClass("selected");
		$("#li_custom").removeClass("selected");
		$("#li_db").removeClass("ui-state-active");
		$("#li_project").removeClass("ui-state-active");
		$("#li_custom").removeClass("ui-state-active");
		$("#li_db").removeClass("ui-tabs-selected");
		$("#li_project").removeClass("ui-tabs-selected");
		$("#li_custom").removeClass("ui-tabs-selected");
		document.getElementById("select_group_list").style.height="auto";
		gr=$("select[id=select_group_list] option:selected").val();
		if(!gr)
			gr=0;
		if($(this).attr("id")=="radio_db")
		{
			$("#li_db").addClass("selected");
			$("#li_db").addClass("ui-state-active");
			$("#li_db").addClass("ui-tabs-selected");
			$("span[id^=group_db_"+gr+"]").css("display","");
			$("span[id^=group_project]").css("display","none");
			$("span[id^=group_custom]").css("display","none");
			h_select=document.getElementById("group_db_"+gr).offsetHeight;
			h_group=document.getElementById("select_group_list").offsetHeight;
			if(h_group<=h_select)
				document.getElementById("select_group_list").style.height=h_select;
			else
				document.getElementById("select_group_list").style.height=h_group;
			li_selected="db";
		}
		else if($(this).attr("id")=="radio_project")
		{
			$("#li_project").addClass("selected");
			$("#li_project").addClass("ui-state-active");
			$("#li_project").addClass("ui-tabs-selected");
			$("span[id^=group_db]").css("display","none");
			$("span[id^=group_custom]").css("display","none");
			$("span[id^=group_project_"+gr+"]").css("display","");
			h_select=document.getElementById("group_project_"+gr).offsetHeight;
			h_group=document.getElementById("select_group_list").offsetHeight;
			if(h_group<=h_select)
				document.getElementById("select_group_list").style.height=h_select;
			else
				document.getElementById("select_group_list").style.height=h_group;
			li_selected="project";
		}
		else
		{
			$("#li_custom").addClass("selected");
			$("#li_custom").addClass("ui-state-active");
			$("#li_custom").addClass("ui-tabs-selected");
			$("span[id^=group_db]").css("display","none");
			$("span[id^=group_project]").css("display","none");
			$("span[id^=group_custom_"+gr+"]").css("display","");
			h_select=document.getElementById("group_custom_"+gr).offsetHeight;
			h_group=document.getElementById("select_group_list").offsetHeight;
			if(h_group<=h_select)
				document.getElementById("select_group_list").style.height=h_select;
			else
				document.getElementById("select_group_list").style.height=h_group;
			li_selected="custom";
		}
		$(".selected").css("padding-bottom","0px");
		check_all_box();
	});
	
	function check_all_box(){
		check_all=true;
		ngroup=$("select[@id=select_group_list] option:selected").val();
		$("input[id$=_"+ngroup+"_"+li_selected+"]").each(function(i){
			if(!$(this).attr("checked"))
				check_all=false;
		});
		$("#ch_all").attr("checked",check_all);
	}
	check_all_box();
	';
	
	if(!postvalue("queryname"))
		$b_includes.= '$("#radio_db").click();';
	else
		$b_includes.= '$("#radio_custom").click();';
		
$b_includes.= '
	sel_ind = $("#select_group_list").get(0).selectedIndex;
	if(sel_ind<0)
	{
		$("#select_group_list").get(0).selectedIndex=0;
		sel_ind=0;
	}
	h_select=document.getElementById("group_db_"+sel_ind).offsetHeight;
	h_group=document.getElementById("select_group_list").offsetHeight;
	if(h_group<=h_select)
		document.getElementById("select_group_list").style.height=h_select;';

	if(!pre8count($arr_tables_db))
		$b_includes.= '$("#li_db").hide();';
	if(!pre8count($arr_tables_project))
		$b_includes.= '$("#li_project").hide();';
	if(!pre8count($arr_tables_custom))
		$b_includes.= '$("#li_custom").hide();';
$b_includes.= '
});
</script>'."\r\n";


$xt->assign("b_includes", $b_includes);



if (@$_SESSION['webreports']['settings']['title'] != "") {
	$xt->assign("report_title",", "."Title".": ".@$_SESSION['webreports']['settings']['title']);
} else {
	$xt->assign("report_title","");
}
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("table_list",$table_list);
$xt->assign("group_list",$group_list);
$templatefile = GetTemplateName("", "webreport_admin");
$xt->display($templatefile);
?>
