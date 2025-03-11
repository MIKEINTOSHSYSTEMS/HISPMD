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
if (strpos($_SESSION['webreports']['table_relations']['join_tables'], ",") !== false) {
	$arr_join_tables = array_slice(explode(",", $_SESSION['webreports']['table_relations']['join_tables']), 0, -1);	
}
$arr_join_tables[] = $_SESSION['webreports']['tables'][0];

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

$h_includes = "";
$b_includes = "";

$h_includes .= '
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

$fields = "";
for ($i=0; $i < count($arr_join_tables); $i++ ) {
	$t = $arr_join_tables[$i];
	$arr_fields = array();
	$arr_fields = WRGetNBFieldsList($t);
	for ($j=0; $j < count($arr_fields); $j++) 
	{
		$field=$arr_fields[$j];
		if(strlen($field)>25)
			$field=substr($field,25)."...";
		$fields .= "<option value=\"".runner_htmlspecialchars($t.".".$field)."\">".$t.".".$field."</option>";
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
		var output = {};
		output.where_condition = [];
		var idx=0;
		$(".condition-row").each(function(){
			if ($(this).find("td.field_value select").val() != "-1" && $(this).find("td.filter_value input").val() != "" && $(this).find("td.field_value select").val() != undefined && $(this).find("td.filter_value input").val() != undefined) 
			{
				output.where_condition[idx] = {};
				$(this).find("input:text,select").each(function(){
					output.where_condition[idx][$(this).attr("id")] = $(this).val();
				});
				idx++;
			}
		});

		return JSON.stringify(output);
	}
	
	$("#sqlbtn").click(function(){
		var output = collect_input_data();
		
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "where_condition",
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

	$(".field_value select").change(function(){
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
	
/*
	$(".filter_value").keyup(function(){
		if ($("input",this).val() == "") {
			$(this).parent("tr").next().find("input, select").each(function(){
				this.disabled = true;
			});
			$(this).parent("tr").next().hide();			
		} else {
			$(this).parent("tr").next().find("input, select").each(function(){
				this.disabled = false;
			});
			$(this).parent("tr").next().show();			
		}
	});	
*/	
	$("#row2")
		.css("cursor", "default")
		.css("font-weight", "bold");

	$("td[id^=row]").mouseover(function(){
		for(var i=0; i<=11; i++) {
			if(i == $(this).attr("id").replace("row", "")) {
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
	
		var flag = true;
/*
		$(".filter_value input:enabled").each(function(){
			if ($(this).val() == "" && $(this).parents("tr").find(".field_value select").val() != "-1") {
				flag = false;
			}
		});
		if (!flag) {
			$("#alert").html("<p>Complete Filter field for selected column</p>").dialog("open");
			return;
		}
*/
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( $(this).attr("id") == "nextbtn" )
			URL = "'.GetTableLink("webreport3").'";
		if( $(this).attr("id") == "backbtn" )
			URL = "'.GetTableLink("webreport1").'";
		if( $(this).attr("id") == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( $(this).attr("id").substr(0,3)=="row" && $(this).attr("id") != "row2" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( $(this).attr("id") == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( $(this).attr("id") == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( $(this).attr("id") == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";			
		
		var output = collect_input_data();
		thisid=$(this).attr("id");
		var_save=0;
		if( this.id == "savebtn")
			var_save=1;
		if( $(this).attr("id") == "savebtn" || $(this).attr("id") == "previewbtn" ) {
			id=$(this).attr("id");
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: var_save,
					web: "webreports",
					name: "where_condition",
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
		

		if($(this).attr("id") !="row2" && $(this).attr("id") !="savebtn" && $(this).attr("id") !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "where_condition",
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

function showNewRow()
{
	var lastDisplayed=undefined;
	var existsEmpty=false;
	$("tr.condition-row").each(function() {
		if($("select[name=field_opt]",this).val()!="-1")
			return;
		if($(this).css("display")!="none")
			existsEmpty=true;
	});
	if(existsEmpty)
		return;
	var firstHidden=$("select[name=field_opt][value=-1]:first").parents("tr").get(0);
	
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

$arr = $_SESSION['webreports']['where_condition'];
if ( !empty( $arr ) ){
	$b_includes .= "<script type='text/javascript'>
		$(document).ready(function(){"."\r\n";
	
	for ($i=0; $i < count($arr); $i++) {
		$b_includes .= "
		tr_elem = $('.condition-row').eq('".$i."');
		$(tr_elem).show();
		$(tr_elem).find('input, select').each(function(){
			this.disabled = false;
		});
		$(tr_elem).find('select#field_opt').val('".jsreplace($arr[$i]["field_opt"])."');
		$(tr_elem).find('input#filter_value').val('".jsreplace($arr[$i]["filter_value"])."');
		$(tr_elem).find('input#first_or_value').val('".jsreplace($arr[$i]["first_or_value"])."');
		$(tr_elem).find('input#second_or_value').val('".jsreplace($arr[$i]["second_or_value"])."');
		$(tr_elem).find('input#third_or_value').val('".jsreplace($arr[$i]["third_or_value"])."');
		"."\r\n";	
	}
	
	$b_includes .= '
		tr_elem = $(".condition-row").eq('.count($arr).');
		$(tr_elem).show();
		$(tr_elem).find("input, select").each(function(){
			this.disabled = false;
		});
	});
	</script>'."\r\n";
}
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);
$xt->assign("b_includes", $b_includes);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$templatefile = GetTemplateName("", "webreport2");
$xt->display($templatefile);
?>