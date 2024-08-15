<?php

ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");



include("include/reportfunctions.php");

$strTableName="";

if(@$_REQUEST["cname"])
{
	// #9875 It's expected that webreports table belongs to the same db connection
	$_connection = $cman->getForWebReports();	
	$cname = @$_REQUEST["cname"];
	
	$sql_query = "SELECT ".$_connection->addFieldWrappers("rpt_id")." FROM ".$_connection->addTableWrappers("webreports")
		." WHERE ".$_connection->addFieldWrappers("rpt_name")."='".$cname."' and ".$_connection->addFieldWrappers("rpt_type")."='chart'";
		
	$data = $_connection->query( $sql_query )->fetchNumeric();	

	if( !pre8count($data) )
		header("location: ".GetTableLink("webreport"));
	else
		Reload_Chart(postvalue("cname"));
}
include('include/xtempl.php');
$xt = new Xtempl();

$chrt_array = getChartArray(postvalue("cname"));

if(is_wr_project())
	include("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");

	if(!isLogged())
	{
		$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	} elseif ( $chrt_array['settings']['status'] == "private" && $chrt_array['settings']['owner'] != Security::getUserName() ) {
		echo "<p>"."You don't have permissions to view this chart"."</p>";
		exit();
	}

	if (pre8count(GetUserGroups()) > 1)
	{
	    $arr_reports = array();
	    $arr_reports = GetChartsList();
	    foreach ( $arr_reports as $rpt ) {
		    if (( $rpt["owner"] != Security::getUserName() || $rpt["owner"] == "") && $rpt["view"]==0 && $chrt_array['settings']['name']==$rpt["name"])
		      {
		       echo "<p>"."You don't have permissions to view this chart"."</p>";
		       exit();
		    }
	    }
	}
$width = 780;
$height = 570;

$refresh=0;

$chartParams = array();
$chartParams['width'] = $width;
$chartParams['height'] = $height;
$chartParams['chartName'] = postvalue('cname');
$chartParams['containerId'] = "showchart";
$chartParams['chartType'] = $chrt_array['chart_type']['type'];
$chartParams['refreshTime'] = $refresh;
$chartParams['xmlFile'] = GetTableLink("dchartdata") . '?cname=' . postvalue('cname') . $chartPreview .
	'&ctype=' . $chrt_array['chart_type']['type'];

$show_dchart = '<div id="' . $chartParams['containerId'] . '" style="width:' . $width . 'px;height:' . $height . 'px"></div>';
	$show_dchart .= '<script type="text/javascript" language="javascript" src="' . GetRootPathForResources( 'libs/js/anychart.min.js' ) . '"></script>';
//	$show_dchart .= '<script type="text/javascript" language="javascript" src="' . GetRootPathForResources( 'libs/js/migrationTool.js' ) . '"></script>';
	$show_dchart .= '<script type="text/javascript" language="javascript">
	(function(){
		var params = ' . my_json_encode( $chartParams ) . ';
		createChart( params );
	})();
	</script>';

$load_flash_player = '
<script type="text/javascript">
	var svgSupported = window.SVGAngle != undefined;
		var str="";
		if (!svgSupported)
		{
			str = "<center>";
			str += "'."".'<br /><br />";
			str += "<a href=\"http://www.adobe.com/go/getflashplayer\"><img border=\"0\" src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" /></a><br />";
			str += "</center>";		
		}
		if (typeof(ActiveXObject) != "undefined") {
			try { a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");d = a.GetVariable("$version"); }
			catch (e) { d = false; }
			if (!d) {
				$("div.center_div").html( str );	
			}			
		} else if ((navigator.product == "Gecko" && window.find && !navigator.savePreferences)
			|| (navigator.userAgent.indexOf("WebKit") != -1 || navigator.userAgent.indexOf("Konqueror") != -1))
		{
			div = $("div[id*=\'__chart_generated_container__\']");
			if ( div[0] == undefined ) {
				$("div.center_div").html( str );			
			} else {
				$(div).appendTo("div.center_div");
			}
		}
</script>';
$xt->assign("wr_pagestylepath", $wr_pagestylepath);

$xt->assign("chart_constructor", $show_dchart);
$xt->assign("load_flash_player", $load_flash_player);
$templatefile = GetTemplateName("", "dchart_preview");
$xt->display($templatefile);
?>