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

$arr_tables = DBGetTablesListByGroup("db");

include('include/xtempl.php');
$xt = new Xtempl();

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

$table_selected = @$_SESSION['webreports']['tables'][0];
$xt->assign("table_selected", runner_htmlspecialchars($table_selected));

$fields_table_selected = "";
$arr_fields = WRGetFieldsList($table_selected);
foreach ($arr_fields as $fld_name) {
	$fields_table_selected .= $fld_name.", ";
}
$fields_table_selected = substr($fields_table_selected,0,strlen($fields_table_selected)-2);
$xt->assign("fields_table_selected", $fields_table_selected);

$arr_rel = $_SESSION['webreports']['table_relations'];
if ( !empty( $arr_rel ) )
	$arr_relations = array_slice(explode("@END@", $arr_rel["relations"]), 0, -1);

$strLeftWrapper = "`"; // #9875
$strRightWrapper = "`"; // #9875	
	
$tables = "";
$b_includes .= "
<script type='text/javascript'>
var left_wrapper = '".$strLeftWrapper."';
var right_wrapper = '".$strRightWrapper."';
var arr_tables_fields = new Array();"."\n";
for ($i=0; $i < count($arr_tables); $i++ ) {
	$t = $arr_tables[$i];
	
	if($t!=$table_selected)
	{
		$flag=0;
		if (!empty($arr_rel))
		{
			foreach ($arr_relations as $rel) 
			{
				$arr_parts = explode("@SEP@", $rel);
				if($arr_parts[1]==$t)
					$flag=1;
			}
		}
		if($flag==0)
			$tables .= '<option value="'.runner_htmlspecialchars($t).'">'.$t.'</option>';
	
	}
	$arr_fields = array();
	$arr_fields = WRGetNBFieldsList($t);
	$b_includes .= "arr_tables_fields['".jsreplace($t)."'] = new Array();"."\n";
	for ($j=0; $j < count($arr_fields); $j++) {
		$b_includes .= "arr_tables_fields['".jsreplace($t)."'][".$j."] = '".jsreplace($arr_fields[$j])."';"."\n";
	}
}
$b_includes .= '</script>';
$xt->assign("tables", $tables);

$b_includes .= '
<script type="text/javascript">
var timeout	= 200,
	closetimer	= 0,
	relation_stack = [],
	table_stack = [],
	rel = [];

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
		var s = "", t = "", r=[];
		
		for (i in relation_stack) {
			if (relation_stack[i] != undefined) {
				s += i + "@SEP@" + relation_stack[i] + "@END@";
			}
		}
		for (i in table_stack) {
			if (table_stack[i] != undefined) {
				t += i + ",";
			}
		}		
		
		$("#rel_list").children().each(function(){
			r[r.length]=this.rel;
		});
		
		var output = {
			table_relations : {
				left_table  : $("#left_tables").val(),
				right_table : $("#right_tables").val(),
				left_field  : $("#left_fields_1").val(),
				right_field : $("#right_fields_1").val(),
				join_type   : $("#join_select").val(),
				relations   : s,
				join_tables : t,
				relat: r
			}
		};
	
		return JSON.stringify(output);
	}	
	
	$("#sqlbtn").click(function(){
		
		var output = collect_input_data();
		
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "table_relations",
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
		
	$("#addrel_btn").click(function(){
		var rel_txt,
			tbl_left = $("#left_tables").val(),
			tbl_right = $("#right_tables").val(),
			rightFieldSelector = "select[id^=right_fields_]",
			leftFieldSelector = "select[id^=left_fields_]";
		
		if ( tbl_left == -1 ) {
			$("#alert").html("<p>'."Select left table".'</p>").dialog("open");
			return;
		}
		if ( tbl_right == -1 ) {
			$("#alert").html("<p>'."Select right table".'</p>").dialog("open");
			return;
		}
		// add check if field is selected
		
		rel_txt = $("#join_select").val() + left_wrapper + tbl_right + right_wrapper + " ON ";
		$(".myselector").each(function(){
			if ($(leftFieldSelector, this).val() != null && $(leftFieldSelector, this).val() != "-1"
				&& $(rightFieldSelector,this).val() != null && $(rightFieldSelector,this).val() != "-1")
			{
				rel_txt += left_wrapper + tbl_left + right_wrapper + ".";
				rel_txt += left_wrapper + $(leftFieldSelector,this).val() + right_wrapper + " = ";
				rel_txt += left_wrapper + tbl_right + right_wrapper + ".";
				rel_txt += left_wrapper + $(rightFieldSelector,this).val() + right_wrapper;
				rel_txt += " AND "
			}
		});
		rel_txt = rel_txt.substr(0,rel_txt.length-5);
		if (relation_stack[rel_txt] != undefined) {
			$("#alert").html("<p>'."The relation with selected parameters already exists".'</p>").dialog("open");
			return;
		}		
		
		rel={"left_table":tbl_left,
				 "right_table":tbl_right,
				 "left_fields":[],
				 "right_fields":[],
				 "rel_type":$("#join_select").val()};
		
		$(".myselector").each(function(){
			if ($(leftFieldSelector,this).val() != null && $(leftFieldSelector,this).val() != "-1"
					&& $(rightFieldSelector,this).val() != null && $(rightFieldSelector,this).val() != "-1")
			{
				rel.left_fields[rel.left_fields.length] = $(leftFieldSelector,this).val();
				rel.right_fields[rel.right_fields.length] = $(rightFieldSelector,this).val();
			}
		});
		
		relation_stack[rel_txt] = tbl_right;
		

		option = new Option(rel_txt,tbl_right);
		option.rel=rel;
		var objSel=document.getElementById("rel_list");
		objSel.options[objSel.length]=option;


		if (table_stack[tbl_right] == undefined) {
			table_stack[tbl_right] = 1;
			$("#left_tables").append("<option value=\""+tbl_right+"\">"+tbl_right+"</option>");			
			$("#right_tables option:selected").remove();
			$(rightFieldSelector).empty();
			//$(leftFieldSelector).empty();
			var counter = 0;
			$(leftFieldSelector).each(function(){
				if(counter++)
					$(this).parentsUntil("table", "tr").remove();
			});
		} else {
			table_stack[tbl_right] = table_stack[tbl_right] + 1;
		}
	});
	
	$("#remrel_btn").click(function(){
		var rel, val, db, 
		tbl_left = $("#left_tables").val(),
		tbl_right = $("#right_tables").val();
		if ($("#rel_list").children(":selected").length > 0) {
			rel = $("#rel_list").children(":selected");
			val = $(rel).text();
			db = $(rel).val();
			if(db!="")
			{
				$("#right_tables").append("<option value=\""+db+"\">"+db+"</option>");			
				$("#left_tables").find("option:contains("+db+")").remove();

			}
			if (table_stack[relation_stack[val]] == 1) {
				table_stack[relation_stack[val]] = undefined;
			} else {
				table_stack[relation_stack[val]] = table_stack[relation_stack[val]] - 1;
			}
			relation_stack[val] = undefined;
			$(rel).remove();
		} else {
			$("#alert").html("<p>'."Select relation you want to remove".'</p>").dialog("open");
			return;
		}
	});
	
	$(".table_fields").change(function(){
		var s = "",
			t = $(this).val(),
			id = this.id.replace("_tables","");
			
		if (t == "-1") {
			$("#"+id+"_fields_1").html("");
			return;
		}
		var theSel=document.getElementById(id+"_fields_1");
		$("#"+id+"_fields_1").empty();
		for (var i=0; i < arr_tables_fields[t].length; i++) {
			theSel.options[theSel.length] = new Option(arr_tables_fields[t][i], arr_tables_fields[t][i]);
		}
		if(id=="right")
		{
			th=$("#"+id+"_fields_1")[0];
			live_change(th);
		}
		$("#"+id+"_fields_1").get(0).disabled = false;
	});
	
	$(".fld_names").change(function(){
		live_change(this);
	});	
	
	$("#row1")
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

if (count(GetUserGroups()) < 2 || isset( $_SESSION['webreports']['settings']['status'] )
	&& $_SESSION['webreports']['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row9]").hide();'."\r\n";
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
if($_SESSION['webreports']['group_fields'][count($_SESSION['webreports']['group_fields'])-1]["cross_table"]=="true")
	$b_includes .= '$("#row5,#row6").hide();'."\r\n";

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webreport".$ri)."';\r\n";
	
$b_includes .= '
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = "'.GetTableLink("webreport2").'";
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webreport0").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row1" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";			
	
		var output = collect_input_data();
		thisid=this.id;
		
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
					name: "table_relations",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						if( id == "savebtn" )
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
	
		if(this.id != "row1" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "table_relations",
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
	});
});
</script>'."\r\n";

$arr = $_SESSION['webreports']['table_relations'];
	
$b_includes .= "<script type='text/javascript'>
	$(document).ready(function(){";
if ( !empty( $arr ) )
{
	$arr_relations = array_slice(explode("@END@", $arr["relations"]), 0, -1);
	$b_includes .="
			$('#left_tables').val('".jsreplace($arr["left_table"])."');
			if ($('#left_tables').val() != '-1') 
			{
				$('#left_tables').change();				
			}
			$('#right_tables').val('".jsreplace($arr["right_table"])."');
			if ($('#right_tables').val() != '-1') 
			{
				$('#right_tables').change();				
			}			
			$('#left_fields_1').val('".jsreplace($arr["left_field"])."');
			$('#right_fields_1').val('".jsreplace($arr["right_field"])."');
			$('#right_fields_1').change();
			$('#join_select').val('".jsreplace($arr["join_type"])."');"."\r\n";
			$c=0;
			if(!is_array($arr["relat"]))
				$arr_relations=array();
			foreach ($arr_relations as $rel) 
			{
				$arr_parts = explode("@SEP@", $rel);
				
				$b_includes .= "
				relation_stack['".jsreplace($arr_parts[0])."'] = '".jsreplace($arr_parts[1])."';";
			
				foreach($arr["relat"] as $key=>$value)
				{
					if($key==$c)
					{
						$b_includes .= "var rel={'left_table':'".jsreplace($value["left_table"])."',
										'right_table':'".jsreplace($value["right_table"])."',
										'left_fields':[],
										'right_fields':[],
										'rel_type':'".$value["rel_type"]."'};"."\r\n";
						foreach($value["left_fields"] as $k=>$val)
							$b_includes .= "rel.left_fields[".$k."]='".jsreplace($val)."';";
						foreach($value["right_fields"] as $k=>$val)
							$b_includes .= "rel.right_fields[".$k."]='".jsreplace($val)."';";
					}	
				}
				
				$b_includes .= "option = new Option('".jsreplace($arr_parts[0])."','".jsreplace($arr_parts[1])."');
				option.rel=rel;
				var objSel=document.getElementById('rel_list');
				objSel.options[objSel.length]=option;
				
				if (table_stack['".jsreplace($arr_parts[1])."'] == undefined) 
				{
					table_stack['".jsreplace($arr_parts[1])."'] = 1;
					$('#left_tables').append(\"<option value='".jsreplace($arr_parts[1])."'>".jsreplace($arr_parts[1])."</option>\");
				} 
				else 
				{
					table_stack['".jsreplace($arr_parts[1])."'] = table_stack['".jsreplace($arr_parts[1])."'] + 1;
				}		
				"."\r\n";	
				$c++;
			}
}
else
{
	$b_includes .='$("#left_tables").val($("#left_tables")[0].options[1].value);
		$("#left_tables").change();';
}
$b_includes .= '});

function live_change(th)
{
		var id = th.id.substr(th.id.length-1),
			tr  = $(th).parent().parent(),
			new_id = 0,
			new_tr = "";

		if ( $("td > select",tr).eq(0).val() != null && $("td > select",tr).eq(0).val() != "-1"
			&& $("td > select",tr).eq(1).val() != null && $("td > select",tr).eq(1).val() != "-1") {
			new_id = parseInt(id)+1;
			if ($("#left_fields_"+new_id).length > 0) {
				return;
			}
			new_tr += "<tr class=\'myselector\'><td></td>";
			new_tr += "<td><select class=\"fld_names\" id=\"left_fields_"+new_id+"\" name=\"left_fields_"+new_id+"\" style=\"width:150px\" onchange=\"live_change(this);\">";
			if (new_id == 2) {
				new_tr += "<option value=\"-1\"></option>";
			}
			new_tr += $("td > select",tr).eq(0).html();
			new_tr += "</select></td>";
			new_tr += "<td></td>";
			new_tr += "<td><select class=\"fld_names\" id=\"right_fields_"+new_id+"\" name=\"right_fields_"+new_id+"\" style=\"width:150px\" onchange=\"live_change(this);\">";
			if (new_id == 2) {
				new_tr += "<option value=\"-1\"></option>";
			}
			new_tr += $("td > select",tr).eq(1).html();
			new_tr += "</select></td>";
			new_tr += "</tr>";
			$(new_tr).insertAfter(tr);
			$("#left_fields_"+new_id).get(0).selectedIndex=0;
			$("#right_fields_"+new_id).get(0).selectedIndex=0;
		}
}

</script>'."\r\n";
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);
$xt->assign("b_includes", $b_includes);

$templatefile = GetTemplateName("", "webreport1");
$xt->display($templatefile);
?>