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
$xt->assign("b_is_report_name",($_SESSION['webreports']['settings']['name'] != ""));
$xt->assign("report_name",$_SESSION['webreports']['settings']['name']);

if(!$_SESSION['webreports_oldname'])
	$_SESSION['webreports_oldname']=$_SESSION['webreports']['settings']['name'];

$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/json.js").'"></script>
'."\r\n";


$xt->assign("h_includes", $h_includes);

$b_includes .= '
<script type="text/javascript">
var timeout	= 200;
var closetimer	= 0;
var relation_stack = [];
$(document).ready(function(){
';
	$b_includes .= alertDialog();
	$b_includes .= '
	
	
	function collect_input_data() {
		var output = {
			settings : {
				name   : $("#rname").val().replace(/\W/g, "_"),
				title  : $("#rtitle").val(),
				status : ( $("#rstatus")[0].checked ) ? "private" : "public"
			}
		};
		
		return JSON.stringify(output);		
	}	
	
	
	$("#row8")
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
if($_SESSION['webreports']['group_fields'][count($_SESSION['webreports']['group_fields'])-1]["cross_table"]=="true")
	$b_includes .= '$("#row5,#row6").hide();'."\r\n";
    
$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webreport".$ri)."';\r\n";
	
$b_includes .= '
	$("#nextbtn, #backbtn, td[id^=row], #savebtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = "'.GetTableLink("webreport9").'";
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";
		if( this.id.substr(0,3)=="row" && this.id != "row8" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";			

		if ( $("#rname").val() == ""  && this.id!="row10" && this.id!="row11" ) {
			$("#menujump").hide();
			$("#alert").html("<p>'."Set report name".'</p>").dialog("open");
			return false;
		}
		
		if ( $("#rtitle").val() == "" && this.id!="row10" && this.id!="row11" ) {
			$("#menujump").hide();
			$("#alert").html("<p>'."Set report title".'</p>").dialog("open");
			return false;
		}			
	
		var output = collect_input_data();
		
		if( this.id == "savebtn" ) {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: 1,
					';
if(@$_REQUEST["saveas"]==1)						
	$b_includes .= 'saveas:1,';
$b_includes .= '	
					web: "webreports",
					name: "settings",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						$("#alert")
							.html("<p>Report Saved</p>")
							.dialog("option", "close", function(){
								window.location = "'.GetTableLink("webreport").'";
							})
							.dialog("open");
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
		if(this.id != "row8" && this.id !="savebtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "settings",
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
';

if (count(GetUserGroups()) > 1){
	$b_includes.='
		$("#rstatus").click(function(){
			if ( this.checked == true ) {
				$("#nextbtn").hide();
				$("#row9").hide();
			} else {
				$("#nextbtn").show();
				$("#row9").show();
			}
		});
	';
}	

$report_name = ( isset( $_SESSION['webreports']['settings']['name'] ) ) ?
	$_SESSION['webreports']['settings']['name'] :
	GoodFieldName(@$_SESSION['webreports']['tables'][0]).'_'.CheckLastID('report');

$report_title = ( isset( $_SESSION['webreports']['settings']['title'] ) ) ?
	$_SESSION['webreports']['settings']['title'] :
	@$_SESSION['webreports']['tables'][0].' Report '.CheckLastID('report');


	$show_status = 'style="display:line;"';
	if ( isset( $_SESSION['webreports']['settings']['status'] ) && $_SESSION['webreports']['settings']['status'] == "private" ) 
	{
		$report_status = 'checked';
		$b_includes .= '$("#nextbtn").hide();$("#nextprob").hide();';
	} 
	else 
	{
		if (count(GetUserGroups()) > 1) 
		{
			$report_status = '';
		} 
		else 
		{
			$report_status = '';
			$b_includes .= '$("#nextbtn").hide();';
		}	
	}


$b_includes .= '
});
</script>'."\r\n";
$xt->assign("b_includes", $b_includes);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("report_name", $report_name);
$xt->assign("report_title", runner_htmlspecialchars($report_title));
$xt->assign("report_status", $report_status);
$xt->assign("show_status", $show_status);

$templatefile = GetTemplateName("", "webreport8");
$xt->display($templatefile);
?>