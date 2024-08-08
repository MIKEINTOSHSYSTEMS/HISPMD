<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

$strTableName="";

include("include/reportfunctions.php");

// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
$_connection = $cman->getForWebReports();

if(@$_REQUEST["cname"])
{	
	$cname=@$_REQUEST["cname"];
	$sql_query = "SELECT ".$_connection->addFieldWrappers("rpt_id")." FROM ".$_connection->addTableWrappers("webreports")
		." WHERE ".$_connection->addFieldWrappers("rpt_name")."='".$cname."' and ".$_connection->addFieldWrappers("rpt_type")."='chart'";
	
	$data = $_connection->query( $sql_query )->fetchNumeric();
	if( !$data )
		header("location: ".GetTableLink("webreport"));
	else
		Reload_Chart(postvalue("cname"));
}


$chrt_array = getChartArray(postvalue("cname"));

if(is_wr_project())
	include("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");

$sessPrefix = "webchart".postvalue("cname");

	if( !Security::getUserName() )
	{
		$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	} elseif ( $chrt_array['settings']['status'] == "private" && $chrt_array['settings']['owner'] != Security::getUserName() ) {
		echo "<p>"."You don't have permissions to view this chart"."</p>";
		exit();
	}

	if (count(GetUserGroups()) > 1)
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

//	process request data, fill session variables
if ( !count( $_POST ) && ( count( $_GET ) <= 1 ) )
{
	$sess_unset = array();
	foreach($_SESSION as $key=>$value)
		if(substr($key,0,strlen($sessPrefix)+1)==$sessPrefix."_" &&
			strpos(substr($key,strlen($sessPrefix)+1),"_")===false)
			$sess_unset[] = $key;
	foreach($sess_unset as $key)
		unset($_SESSION[$key]);
}

if(@$_REQUEST["a"]=="advsearch" || @$_REQUEST["a"]=="integrated")
{
	$_SESSION[$sessPrefix."_asearchnot"]=array();
	$_SESSION[$sessPrefix."_asearchopt"]=array();
	$_SESSION[$sessPrefix."_asearchfor"]=array();
	$_SESSION[$sessPrefix."_asearchfor2"]=array();
	$_SESSION[$sessPrefix."_asearchtable"]=array();
	$_SESSION[$sessPrefix."_asearchfortype"]=array();
	unset($_SESSION[$sessPrefix."_asearchtype"]);
	$tosearch=0;
}

if(@$_REQUEST["a"]=="advsearch")
{
	$asearchfield = postvalue("asearchfield");
	$asearchtable = postvalue("asearchtable");
	$_SESSION[$sessPrefix."_asearchtype"] = postvalue("type");
	if(!$_SESSION[$sessPrefix."_asearchtype"])
		$_SESSION[$sessPrefix."_asearchtype"]="and";
	foreach($asearchfield as $ind => $field)
	{
		if (!is_wr_project()) {
			$_SESSION[$sessPrefix."_asearchtable"][$field]=$asearchtable[$ind];
		}
		$gfield=GoodFieldName($field)."_1";
		$asopt=postvalue("asearchopt_".$gfield);
		$value1=postvalue("value_".$gfield);
		$type=postvalue("type_".$gfield);
		$value2=postvalue("value1_".$gfield);
		$not=postvalue("not_".$gfield);
		if(strlen($value1) || $asopt=='Empty')
		{
			$tosearch=1;
			$_SESSION[$sessPrefix."_asearchopt"][$field]=$asopt;
			if(!is_array($value1))
				$_SESSION[$sessPrefix."_asearchfor"][$field]=$value1;
			else
				$_SESSION[$sessPrefix."_asearchfor"][$field]=combinevalues($value1);
			$_SESSION[$sessPrefix."_asearchfortype"][$field]=$type;
			if($value2)
				$_SESSION[$sessPrefix."_asearchfor2"][$field]=$value2;
			$_SESSION[$sessPrefix."_asearchnot"][$field]=($not=="on");
		}
	}
}
elseif(@$_REQUEST["a"]=="integrated")
{
	$_SESSION[$sessPrefix."_asearchtype"] = postvalue("criteria");
	if(!$_SESSION[$sessPrefix."_asearchtype"])
		$_SESSION[$sessPrefix."_asearchtype"]="and";
	// prepare vars		
	$j=1;

	// scan all srch fields		
	while ($field = postvalue('field'.$j)) 
	{	
		$tosearch=1;
		$_SESSION[$sessPrefix."_asearchfortype"][$field] = trim(postvalue('type'.$j));
		$_SESSION[$sessPrefix."_asearchfor"][$field] = trim(postvalue('value'.$j.'1'));
		$_SESSION[$sessPrefix."_asearchopt"][$field] = (postvalue('option'.$j) ? postvalue('option'.$j) : 'Contains');
		$_SESSION[$sessPrefix."_asearchfor2"][$field] = trim(postvalue('value'.$j.'2'));	
		$_SESSION[$sessPrefix."_asearchnot"][$field] = postvalue('not'.$j) == 'on';
		$j++;
	}	
}
if(@$_REQUEST["a"]=="advsearch" || @$_REQUEST["a"]=="integrated")
{
	if($tosearch)
		$_SESSION[$sessPrefix."_search"]=2;
	else
		$_SESSION[$sessPrefix."_search"]=0;
	$_SESSION[$sessPrefix."_pagenumber"]=1;
}


include('include/xtempl.php');
$xt = new Xtempl();


	$xt->assign("userid",runner_htmlspecialchars( Security::getUserName() ) );
	$xt->assign("guest", Security::isGuest() );

if( Security::dynamicPermissions() ) {
	$xt->assign("admin",@$_SESSION["IsAdmin"]);
}


//$chartPreview = "&chartPreview=true";
$chartPreview = "";

$width = 800;
$height = 640;

$refresh=0;
if($chrt_array["appearance"]["autoupdate"]=="true")
	$refresh = $chrt_array["appearance"]["update_interval"]*60;

$chartParams = array();
$chartParams['width'] = $width;
$chartParams['height'] = $height;
$chartParams['chartName'] = postvalue('cname');
$chartParams['containerId'] = "showchart";
$chartParams['chartType'] = $chrt_array['chart_type']['type'];
$chartParams['refreshTime'] = $refresh;
$chartParams['xmlFile'] = GetTableLink("dchartdata") . '?cname=' . postvalue('cname') . $chartPreview .
	'&ctype=' . $chrt_array['chart_type']['type'];

$chartParams['settings'] = array();
$chartParams['settings']['seriesColor'] = array();

foreach( $chrt_array["parameters"] as $i => $s ) 
{
	if( $s["series_color"] != "" )
		$chartParams['settings']['seriesColor'][] = $s["series_color"];
}
	
	
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
	$(document).ready(function(){
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
				$("#ExpPDF").hide();
			}			
		} else if ((navigator.product == "Gecko" && window.find && !navigator.savePreferences)
			|| (navigator.userAgent.indexOf("WebKit") != -1 || navigator.userAgent.indexOf("Konqueror") != -1))
		{
			div = $("div[id*=\'__chart_generated_container__\']");
			if ( div[0] == undefined ) {
				$("div.center_div").html( str );			
				$("#ExpPDF").hide();
			} else {
				if($("div.center_div").find("object").length==0)
					$("#ExpPDF").hide();
				$(div).appendTo("div.center_div");
			}
		}	
	});
</script>';

if($_SESSION["back_to_menu"])
	$xt->assign("back_to_menu", true);
else
	$xt->assign("back_to_menu", false);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);	
$xt->assign("chart_block", true);

$xt->assign("chart_constructor", $show_dchart);
$xt->assign("load_flash_player", $load_flash_player);
if(!IsStoredProcedure($chrt_array['sql']))
	$xt->assign("testAdvSearch", testAdvSearch($chrt_array['tables'][0] ) );
else	
	$xt->assign("testAdvSearch", false);

$chart_name_js = jsreplace( postvalue( 'cname' ) );
$xt->assign("chart_name_js",  $chart_name_js);

$xt->assign("chart_title", runner_htmlspecialchars( $chrt_array['title'] ) );
$xt->assign("short_table_name", runner_htmlspecialchars( $chrt_array['settings']['short_table_name'] ) );
$xt->assign("short_table_name_js", jsreplace( $chrt_array['settings']['short_table_name'] ) );
$xt->assign("ext", "php" );

$searchType = (!is_wr_project()) ? GetTableLink("dsearch") : GetTableLink(runner_htmlspecialchars($chrt_array['settings']['short_table_name']), "search");
$xt->assign("searchHref", "href='".$searchType."?cname=".$chart_name_js."'");

$templatefile = GetTemplateName("", "dchart");
$xt->display($templatefile);

?>