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

if (is_wr_project()) 
	include("include/" . GetTableURL( $_SESSION['webreports']['tables'][0] ) . "_variables.php");

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

$b_includes .= '
<script type="text/javascript">
var timeout	= 200;
var closetimer	= 0;
var relation_stack = [];

$(document).ready(function(){
	$("a#sqlbtn").fancybox({
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
		var output = {
			miscellaneous : {
				type           : $("img.selected").attr("id"),
				print_friendly : $("#pfpc").prop("checked").toString(),
				lines_num      : $("#npp").val()
			}
		};
		
		return JSON.stringify(output);		
	}
	
	$("td[class*=tdimg] > img").click(function(){
		$("td[class*=tdimg] > img").each(function(){
			$(this).removeClass("selected");
		});
		$(this).addClass("selected");
	});

	$("img#stepped").addClass("selected");	
	
	$("#row5")
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
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = "'.GetTableLink("webreport6").'";
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webreport4").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row5" )
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
		if( this.id == "savebtn" || this.id == "previewbtn") {
			id=this.id;
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: var_save,
					web: "webreports",
					name: "miscellaneous",
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
		if(this.id != "row5" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "miscellaneous",
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

if(count($_SESSION['webreports']['group_fields'])>1)
{
	$strTemplate='
	<tr>
		<td class="tdimg rl" style="text-align:center">
			<img src="'.GetRootPathForResources("images/layout_stepped.png").'" id="stepped" border="0" alt="'."Stepped Layout".'" />
			<img src="'.GetRootPathForResources("images/layout_block.png").'" id="block" border="0" alt="'."Block Layout".'" />
		</td>
	</tr>
	<tr>
		<td class="tdimg rl" style="text-align:center">
		  <img src="'.GetRootPathForResources("images/layout_align.png").'" id="align" border="0" alt="'."Align Layout".'" />
		  <img src="'.GetRootPathForResources("images/layout_outline.png").'" id="outline" border="0" alt="'."Outline Layout".'" />
		</td>
	</tr>';
}
else
{
	$strTemplate='
	<tr>
		<td class="tdimg rl" style="text-align:center">
		<img src="'.GetRootPathForResources("images/layout_tabular.png").'" id="stepped" border="0" alt="'."Tabular Layout".'" />
		</td>
	</tr>
		';
	$b_includes .= '<script type="text/javascript">$("img#stepped").addClass("selected");</script>';
}
$xt->assign("img_template", $strTemplate);

$arr = $_SESSION['webreports']['miscellaneous'];

if ( !empty( $arr ) ) {

	$b_includes .= '<script type="text/javascript">
		$(document).ready(function(){
			$("td[class*=tdimg] > img").each(function(){
				$(this).removeClass("selected");
			});
			$("img#' . $arr["type"] . '").addClass("selected");
			$("#pfpc").get(0).checked = ' . $arr["print_friendly"] . ';
			$("#npp").val("' . $arr["lines_num"] . '");
		});
	</script>';
}
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);
$xt->assign("b_includes", $b_includes);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$templatefile = GetTemplateName("", "webreport5");
$xt->display($templatefile);
?>