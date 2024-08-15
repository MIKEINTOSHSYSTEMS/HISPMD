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

$xt->assign("b_is_report_save",($_SESSION['webreports']['tmp_active'] != "x"));		
$xt->assign("b_is_report_name",($_SESSION['webreports']['settings']['name'] != ""));
$xt->assign("report_name",$_SESSION['webreports']['settings']['name']);

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
		var output = {};
		output.permissions = [];
		$("#ugroups").children().each(function(i){
			output.permissions[i] = {
				id   : this.value,
				name : this.text.replace(/&lt;|&gt;|<|>/g,""),
				view : $("#view_prm_"+this.value).prop("checked").toString(),
				edit : $("#edit_prm_"+this.value).prop("checked").toString()
			};
		});
		
		return JSON.stringify(output);		
	}
	
	$.each(userGroups, function(i,n){
		var checked = "";
		if ( n >= -1 ) {
			checked = \'checked="true"\';
		}
		guest_d="";';
		
		if($wr_is_standalone)
			$b_includes .='if(n=="Guest")
				guest_d="disabled";';
		$b_includes .= '
		$("#viewBox").append(\'<input id="view_prm_\' + n + \'" type="checkbox" style="display:none;" \' + checked + \' name="add_prm_\' + n + \'">\');
		$("#editBox").append(\'<input id="edit_prm_\' + n + \'" \'+guest_d+\' type="checkbox" style="display:none;" \' + checked + \' name="edit_prm_\' + n + \'">\');
	});

	$("#ugroups").change(function(){
		var id = $(this).children(":selected").val();
		$("input[type=checkbox][id^=view_prm_]").hide();
		$("input[type=checkbox][id^=edit_prm_]").hide();
		$("#view_prm_"+id).show();
		$("#edit_prm_"+id).show();
	});
	
	$("#ugroups")[0].selectedIndex = 0;
	$("#ugroups").change();	
	
	$("#row9")
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
	&& $_SESSION['webreports']['settings']['c'] == "private" ) {
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
	$("#backbtn, td[id^=row], #savebtn, #saveasbtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		'.$rLinks.'
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webreport8").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row9" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";			
	
		var output = collect_input_data();
		
		if( this.id == "savebtn" ) {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: 1,
					web: "webreports",
					name: "permissions",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						$("#alert")
							.html("<p>'."Report Saved".'</p>")
							.dialog("option", "close", function(){
								window.location = "'.GetTableLink("webreport").'";
							})
							.dialog("open");
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
		if(this.id != "row9" && this.id !="savebtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "permissions",
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
});
</script>'."\r\n";

$b_includes .= '<script type="text/javascript">';
$b_includes .= 'var userGroups = new Array();'."\r\n";
$userGroups = "";
$arrUserGroups = GetUserGroups();
foreach ( $arrUserGroups as $arr ) {
	$userGroups .= '<option value="'.$arr[0].'">'.runner_htmlspecialchars($arr[1]).'</option>';
	$b_includes .= 'userGroups.push("'.$arr[0].'");'."\r\n";
}    
$b_includes .= '</script>';

$arr = @$_SESSION['webreports']['permissions'];

if ( !empty( $arr ) ) {
	$b_includes .= '<script type="text/javascript">
			$(document).ready(function(){'."\n";

	for ( $i=0; $i < count($arr); $i++ ) {
		$b_includes .= '$("#view_prm_"+"'.$arr[$i]["id"].'").get(0).checked = ' . $arr[$i]["view"] . ';'."\n";
		$b_includes .= '$("#edit_prm_"+"'.$arr[$i]["id"].'").get(0).checked = ' . $arr[$i]["edit"] . ';'."\n";
	}

	$b_includes .= '});
	</script>';
}
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("b_includes", $b_includes);
$xt->assign("userGroups", $userGroups);

$templatefile = GetTemplateName("", "webreport9");
$xt->display($templatefile);
?>