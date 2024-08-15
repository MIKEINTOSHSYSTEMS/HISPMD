<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");
if(is_wr_project())
	include("include/" . GetTableURL( $_SESSION['webcharts']['tables'][0] ) . "_variables.php");

	if( !Security::getUserName() )
	{
		$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	}

Reload_Chart(postvalue("cname"));
include('include/xtempl.php');
$xt = new Xtempl();

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
$xt->assign("chart_name",$_SESSION['webcharts']['settings']['name']);
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

$b_includes .= '<script type="text/javascript">'."\r\n";

if (is_wr_db()) {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webchart4").'",
		PREV_PAGE_URL = "'.GetTableLink("webchart2").'";
	'."\r\n";
} else {
	$b_includes .= '
	var NEXT_PAGE_URL = "'.GetTableLink("webchart4").'",
		PREV_PAGE_URL = "'.GetTableLink("webchart0").'";
	'."\r\n";	
}

$b_includes .= '
var timeout	= 200,
	closetimer	= 0;

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
	function collect_input_data() {
		var output = {
			chart_type : {
				type : $("img.selected").attr("id")
			}
		};
		
		return JSON.stringify(output);		
	}
	
	$(".ctt > img").click(function(){
		$(".ctt > img").each(function(){
			$(this).removeClass("selected");
		});
		$(this).addClass("selected");
	});
	
	$(".ctt > img").dblclick(function(){
		$("#nextbtn").click();
	});
	
	$("#row3")
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

if (count(GetUserGroups()) < 2 || isset( $_SESSION['webcharts']['settings']['status'] )
	&& $_SESSION['webcharts']['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row7]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row9]").hide();'."\n";
	
if ($_SESSION['webcharts']['settings']['title'] == "") {
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
		var URL = "'.GetTableLink("webchart").'";
		'.$rLinks.'
		if( this.id == "nextbtn" )
			URL = NEXT_PAGE_URL;
		if( this.id == "backbtn" )
			URL = PREV_PAGE_URL;
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webchart6", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row3" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row8" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row9" )
			URL = "'.GetTableLink("menu").'";

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
					web: "webcharts",
					name: "chart_type",
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
		if(this.id != "row3" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "chart_type",
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
});
</script>'."\r\n";

$arr = $_SESSION['webcharts']['chart_type'];
if ( !empty( $arr ) ) {
	$b_includes .= '<script type="text/javascript">
		$(document).ready(function(){
			$(".ctt > img").each(function(){
				$(this).removeClass("selected");
			});
			$("img#' . $arr["type"] . '").addClass("selected");
		});
	</script>';
}

$xt->assign("b_includes", $b_includes);
$xt->assign("chart_name_preview",$_SESSION['webcharts']['settings']['name']);
$table_name = @$_SESSION['webcharts']['tables'][0];
$xt->assign("table_name", $table_name);

$templatefile = GetTemplateName("", "webchart3");
$xt->display($templatefile);

?>