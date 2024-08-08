<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");

add_nocache_headers();

include("include/reportfunctions.php");

// #9875 It's expected that webreports, webreport_style tables belong to the same db connection

$defConnection = $cman->getForWebReports();

if(@$_REQUEST["rname"] || $_SESSION["webreports"]["settings"]["name"])
{
	if(@$_REQUEST["rname"])
		$rname = @$_REQUEST["rname"];
	elseif(@$_SESSION["webreports"]["settings"]["name"] && @$_REQUEST["edit"]=="style")
		$rname = @$_SESSION["webreports"]["settings"]["name"];

	$sql_query = "SELECT ".$defConnection->addFieldWrappers("rpt_id")." FROM ".$defConnection->addTableWrappers("webreports")
		." WHERE ".$defConnection->addFieldWrappers("rpt_name")."='".$rname."' and ".$defConnection->addFieldWrappers("rpt_type")."='report'";

	$data = $defConnection->query( $sql_query )->fetchNumeric();
	if( !$data )
		header("location: ".GetTableLink("webreport"));
	else
		Reload_Report(postvalue("rname"));
}

$includes="";
$includes.="<script language=\"JavaScript\" src=\"include/loadfirst.js?39558\"></script>\r\n";
$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$cross_table="false";

$modePrint=false;
if(@$_REQUEST["mode"]=="print")
	$modePrint=true;

$render_mode=MODE_LIST;

if($modePrint)
{
	$render_mode=MODE_EXPORT;
//	print export headers
	if(@$_REQUEST["format"]=="excel")
	{
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=".postvalue("rname").".xls");
		echo "<html>";
		echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	}
	else if(@$_REQUEST["format"]=="word")
	{
		header("Content-Type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=".postvalue("rname").".doc");
		echo "<html>";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	}
	else
		$render_mode=MODE_PRINT;
}

// Style constants
$num_uniq = 0;
$num_uniq2 = 4;
define('FieldHeaders',40);
define('Group1Header',1);
define('Group1FooterCount',2);
define('Group1FooterMin',3);
define('Group1FooterMax',4);
define('Group1FooterSum',5);
define('Group1FooterAvg',6);
define('Group2Header',7);
define('Group2FooterCount',8);
define('Group2FooterMin',9);
define('Group2FooterMax',10);
define('Group2FooterSum',11);
define('Group2FooterAvg',12);
define('Group3Header',13);
define('Group3FooterCount',14);
define('Group3FooterMin',15);
define('Group3FooterMax',16);
define('Group3FooterSum',17);
define('Group3FooterAvg',18);
define('Group4Header',19);
define('Group4FooterCount',20);
define('Group4FooterMin',21);
define('Group4FooterMax',22);
define('Group4FooterSum',23);
define('Group4FooterAvg',24);
define('TableData',25);
define('PageSummary',26);
define('PageSummaryMin',27);
define('PageSummaryMax',28);
define('PageSummarySum',29);
define('PageSummaryAvg',30);
define('GlobalSumary',31);
define('GlobalSumaryMin',32);
define('GlobalSumaryMax',33);
define('GlobalSumarySum',34);
define('GlobalSumaryAvg',35);
define('Group1Summary',36);
define('Group2Summary',37);
define('Group3Summary',38);
define('Group4Summary',39);


include("classes/webreportpage.php");
include('include/xtempl.php');
$xt = new Xtempl();

$params = array("pageType" => "","id" => 0);
$params['xt'] = &$xt;
$params['tName'] = GLOBAL_PAGES;
$pageObject = new WebreportPage($params);
$pageObject->init();
$pageObject->addCommonJs();

$bparams = array();
$xt->assign_method("bodyend", $pageObject, "assignBodyEnd" );

// Settings for style editor
$editmode=(@$_REQUEST["edit"]=="style");


if(!$editmode)
{
// Load xml report data into array
	$rpt_array = getReportArray(postvalue("rname"));
}
else
	$rpt_array = $_SESSION["webreports"];


if( !$_SESSION["webobject"] )
	$_SESSION["webobject"] = array();
$_SESSION["webobject"]["table_type"] = $rpt_array["table_type"];

if(!postvalue("crosstable_refresh"))
{
	$reportFilename = GetTableLink("dreport");
}

$cross_table=$rpt_array["group_fields"][pre8count($rpt_array["group_fields"])-1]["cross_table"];
if($cross_table=="true")
{
	include("classes/crosstable_webreport.php");
	$includes.='<script type="text/javascript" src="'.GetRootPathForResources("include/crosstable.js").'"></script>';
	$includes.='<script type="text/javascript" src="'.GetRootPathForResources("include/json.js").'"></script>';
}

// if old
if (is_wr_project())
	include("include/" . GetTableURL( $rpt_array['tables'][0] ) . "_variables.php");

$gSettings = new ProjectSettings($rpt_array['tables'][0], PAGE_REPORT);
$tbl = $rpt_array['tables'][0];
$strTableName = $tbl;

$arrDBFieldsList = array();
$i=1;
foreach($rpt_array["totals"] as $ind=>$val)
{
	$arrDBFieldsList[GoodFieldName($val["table"].".".$val["name"])] = "f".$i;
	$i++;
}

include_once getabspath('classes/controls/ViewControlsContainer.php');
$viewControls = new ViewControlsContainer($gSettings, PAGE_REPORT);

$sessPrefix = "";
if (!is_wr_project())
	$sessPrefix = "webreport".postvalue("rname");
else
	$sessPrefix = $tbl;

// Check user permissions
	if( !Security::getUserName() ) {
		$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	} elseif ( $rpt_array['settings']['status'] == "private" && $rpt_array['owner'] != Security::getUserName() ) {
		echo "<p>"."You don't have permissions to view this report"."</p>";
		exit();
	}
	if (pre8count(GetUserGroups()) > 1) {
		$arr_reports = array();
		$arr_reports = GetReportsList();
		foreach ( $arr_reports as $rpt ) {
			if (( $rpt["owner"] != Security::getUserName() || $rpt["owner"] == "") && $rpt["view"]==0 && $rpt_array['settings']['name']==$rpt["name"])
			{
				echo "<p>"."You don't have permissions to view this report"."</p>";
				exit();
			}
		}
	}

// Replace string values to boolean
$arr_xml_fields = array('group_fields','totals','sort_fields');
foreach ($arr_xml_fields as $xml_field) {
	if(!empty($rpt_array[$xml_field]))
	{
		$keyToModify = array();

		foreach ($rpt_array[$xml_field] as $screen => $data)
		{
			$keyToModify[$screen] = array();
			foreach ($data as $key => $val) {
				if ($data[$key] == "true") {
					$keyToModify[$screen][$key] = true;
				} elseif ($data[$key] == "false") {
					$keyToModify[$screen][$key] = false;
				}
			}
		}

		foreach ($keyToModify as $screen => $data) {
			foreach ($data as $key => $val) {
				$rpt_array[$xml_field][$screen][$key] = $val;
			}
		}
	}
}

$rpt_array['miscellaneous']['print_friendly'] = ($rpt_array['miscellaneous']['print_friendly'] == "true") ? true : false;

// Load and assign styles
$sql_query = "SELECT ".$defConnection->addFieldWrappers("report_style_id").",".$defConnection->addFieldWrappers("type").",".$defConnection->addFieldWrappers("field")
	.",".$defConnection->addFieldWrappers("group").",".$defConnection->addFieldWrappers("style_str").",".$defConnection->addFieldWrappers("uniq")."
	, ".$defConnection->addFieldWrappers("repname").", ".$defConnection->addFieldWrappers("styletype")
	." FROM ".$defConnection->addTableWrappers("webreport_style")." WHERE ".$defConnection->addFieldWrappers("repname")."=".$defConnection->prepareString(postvalue('rname'))
	." ORDER BY ".$defConnection->addFieldWrappers("report_style_id")." ASC";

$styleStr = '';
$reoportQResult = $defConnection->query( $sql_query );
while( $data = $reoportQResult->fetchNumeric() ) {

	if ($data[1] == 'table')
		$styleStr .= "#legend td{".$data[4]."}\n";
	else if (($data[2] == 0) && ($data[3] != 0))
		$styleStr .= "#legend td.class".$data[3]."g"."{".$data[4]."}\n";
	else if (($data[2] != 0) && ($data[3] == 0))
		$styleStr .= "#legend td.class".$data[2]."f"."{".$data[4]."}\n";
	else if ($data[5] == 0 && $data[2] != 0 && $data[3] != 0)
		$styleStr .= "#legend td.class".$data[3]."g".$data[2]."f0u{".$data[4]."}\n";
	else
		$styleStr .= "#legend td.class".$data[3]."g".$data[2]."f".$data[5]."u"."{".$data[4]."}\n";
}

$xt->assign("styleStr", $styleStr);
if ($editmode) {
	$xt->assign("b_is_report_name",($rpt_array['settings']['name'] != ""));
	$xt->assign("b_is_report_save",($_SESSION['webreports']['tmp_active'] != "x"));
}




// process reqest data, fill session variables
if(!$modePrint)
{
	if ( !count( $_POST ) && ( count( $_GET ) == 1 ) ) {
		if(array_key_exists("rname", $_GET))
		{
			$sess_unset = array();
			foreach($_SESSION as $key=>$value) {
				if(substr($key,0,strlen($sessPrefix)+1)==$sessPrefix."_" &&
					strpos(substr($key,strlen($sessPrefix)+1),"_")===false) {
					$sess_unset[] = $key;
				}
			}
			foreach($sess_unset as $key) {
				unset($_SESSION[$key]);
			}
		}
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
}

if(@$_REQUEST["orderby"]){
	$_SESSION[$sessPrefix."_orderby"]=@$_REQUEST["orderby"];
}

if(@$_REQUEST["pagesize"]) {
	$_SESSION[$sessPrefix."_pagesize"]=@$_REQUEST["pagesize"];
	$_SESSION[$sessPrefix."_pagenumber"]=1;
}

if(@$_REQUEST["goto"]) {
	$_SESSION[$sessPrefix."_pagenumber"]=@$_REQUEST["goto"];
}

$includes .= '

	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery.ui.all.css").'" type="text/css" media="screen">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/stylesheet.css").'" type="text/css" media="screen">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/fancybox/jquery.fancybox.css?v=2.0.4").'" type="text/css" media="screen">

	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.custom.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.fancybox.pack.js?v=2.0.4").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.easing.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.cookie.js").'"></script>
	';

if($editmode)
	$includes .= '<script type="text/javascript" src="'.GetRootPathForResources("include/js/actionscript.js").'"></script>';

$includes .= '
	<script type="text/javascript">
	var bSelected = false,
		TEXT_FIRST = "First",
		TEXT_PREVIOUS = "Previous",
		TEXT_NEXT = "Next",
		TEXT_LAST = "Last",
		defURL = "'.GetTableLink("menu").'";

	function GetGotoPageUrlString(nPageNumber,sUrlText){
		return \'<a href="JavaScript:GotoPage(\'+nPageNumber+\');" style="text-decoration: none;">\'+sUrlText+\'</a>\';
	}

	function WritePagination(mypage, maxpages, id){
		var paginationHTML = "";

		if (maxpages > 1 && mypage <= maxpages){

			var counterstart = mypage - 9;
			if (mypage % 10 != 0){
				counterstart = mypage - (mypage%10) + 1;
			}
			var counterend = counterstart + 9;
			if (counterend > maxpages){
				counterend = maxpages;
			}
			if (counterstart != 1){
				paginationHTML += GetGotoPageUrlString(1,"First")+"&nbsp;:&nbsp;"+GetGotoPageUrlString(counterstart - 1,"Prev")+"&nbsp;";
			}
			paginationHTML += "<b>[</b>";

			var pad = "";
			var counter	= counterstart;
			for(;counter<=counterend;counter++)
			{
				if (counter != mypage)
					paginationHTML += "&nbsp;" + GetGotoPageUrlString(counter,pad + counter);
				else
					paginationHTML += "&nbsp;<b>" + pad + counter + "</b>";
			}
			paginationHTML += "&nbsp;<b>]</b>";

			if (counterend != maxpages)
				paginationHTML += "&nbsp;" + GetGotoPageUrlString (counterend + 1,"Next") + "&nbsp;:&nbsp;" + GetGotoPageUrlString(maxpages,"Last");

			$("#pagination"+id).html(paginationHTML);
		}
	}

	$(document).ready(function(){

			$("a#preview").fancybox({
				fitToView: false,
				autoSize: false,
				width : 820,
				height : 660,
				overlayShow: true
			});

	';

if($_SESSION['webreports']['group_fields'][pre8count($_SESSION['webreports']['group_fields'])-1]["cross_table"]=="true")
	$includes .= '$("#row5,#row6").hide();'."\r\n";

// Settings for style editor. Check dynamic permissions
if (pre8count(GetUserGroups()) < 2 || isset( $_SESSION['webreports']['settings']['status'] )
	&& $_SESSION['webreports']['settings']['status'] == "private" ) {
	$includes .= '$("td[id=row9]").hide();';
}
if($wr_is_standalone)
	$includes .= '$("td[id=row11]").hide();'."\n";

if(!$modePrint)
{
	if (is_wr_project() || is_wr_custom()) {
		$includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
	}

	if ($_SESSION['webreports']['settings']['title'] == "") {
		$includes .= '
			for (var i=2; i<=9; i++){
				$("td[id=row" + i + "]").hide();
			};
		';
	}
}
else
{
	$includes.="setTimeout(function() {window.print();}, 1000);";
}
if(!is_wr_project())
	$advHref="dsearch";
else
	$advHref=runner_htmlspecialchars($rpt_array["short_table_name"])."_search";

$sClause="";
if(postvalue("q"))
	$sClause="&q=".postvalue("q");

$includes .= '

	$("#export_to_excel").click(function(){
			window.location.href = "'.GetTableLink("dreport").'?mode=print&all=1&format=excel&rname='.runner_htmlspecialchars(postvalue("rname")).$sClause.'&"+initCrossTableParams();
			return false;
		});

	$("#export_to_word").click(function(){
			window.location.href = "'.GetTableLink("dreport").'?mode=print&all=1&format=word&rname='.runner_htmlspecialchars(postvalue("rname")).$sClause.'&"+initCrossTableParams();
			return false;
		});
	$("#advButton").click(function(){
			window.location.href = "'.GetTableLink($advHref).'?rname='.runner_htmlspecialchars(postvalue("rname")).'&"+initCrossTableParams();
		});

	$("#printButton").click(function(){
			window.open("'.GetTableLink("dreport").'?mode=print&all=1&rname='.runner_htmlspecialchars(postvalue("rname")).$sClause.'&"+initCrossTableParams(),"wPrint");
			return false;
		});
	function initCrossTableParams(){
		var pos2, advAttr = "",
			shref = window.location.href,
			pos = shref.indexOf("&axis_x", 0);

		if (pos >= 0) {
			shref = shref.substr(0, pos);
			pos2 = shref.indexOf("a=", 0);
			if ( pos2 >= 0 ) {
				shref = shref.substr( pos2 );
			}
		}
		if ( $("#select_group_x").length ) {
			var axis_x = $("#select_group_x").val(),
				axis_y = $("#select_group_y").val(),
				field = $("#select_data").val(),
				grfunc_value = 0;

			$("input[name=group_func]:checked").each( function() {
				grfunc_value = this.value;
			});
			advAttr = "axis_x=" + axis_x + "&axis_y=" + axis_y + "&field=" + field + "&group_func=" + grfunc_value;
		}
		return advAttr;
	};
});
</script>';

$xt->assign("includes", $includes);


$_connection = $cman->getForWebReports();
if( is_wr_project() )
	$_connection = $cman->byTable( $rpt_array['tables'][0] );

$strSQL = "";
if( !is_wr_project() ) {
	// order by
	$gstrOrderBy = "";
	if(!empty($rpt_array['sort_fields']))
	{
		$gstrOrderBy = "ORDER BY ";
		foreach ( $rpt_array['sort_fields'] as $fld ) {
			$gstrOrderBy .= $_connection->addFieldWrappers( $fld['name'] );
			if ( $fld['desc'] ) {
				$gstrOrderBy .=	" DESC, ";
			} else {
				$gstrOrderBy .=	" ASC, ";
			}
		}
		$gstrOrderBy = substr( $gstrOrderBy, 0, -2);
	}	
	
	$strOrderBy = $gstrOrderBy;

	//	make sql "select" string
	$strWhereClause = "";
	$sWhere = "";
	if( !$editmode )
		$sWhere = CalcSearchParam( $sessPrefix );


	$strWhereClause = whereAdd( $strWhereClause, $sWhere);
	if ($sWhere) {
		$rpt_array['where'] .= ($rpt_array['where']) ?
			" AND (" . $sWhere . ")" :
			" WHERE (" . $sWhere . ")";
	}

	$strSQL = $rpt_array['sql'] . $rpt_array['where'] . $rpt_array['order_by'];
	
	$_SESSION[$sessPrefix."_sql"]   = $rpt_array['sql'];
	$_SESSION[$sessPrefix."_where"] = $rpt_array['where'];
	$_SESSION[$sessPrefix."_order"] = $rpt_array['order_by'];	
}
	$xt->assign("userid",runner_htmlspecialchars( Security::getUserName() ));
	$xt->assign("guest", Security::isGuest() );


/*if( is_wr_db() )
{
	$strSQL = $rpt_array['sql'] . $rpt_array['where'] . $rpt_array['order_by'];
}
else*/if( is_wr_custom() )
{
	if(GetDatabaseType() != nDATABASE_Oracle)
	{
		$sqlquery=$rpt_array['sql'];
		if(GetDatabaseType() == nDATABASE_MSSQLServer)
		{
			$pos=strrpos(strtoupper($sqlquery),"ORDER BY");
			if($pos)
				$sqlquery=substr($sqlquery,0,$pos);
		}
		$strSQL = "select * from (" .$sqlquery .") as ".$_connection->addFieldWrappers("t")." " . $rpt_array['where'] . $rpt_array['order_by'];
	}
	else
		$strSQL = "select * from (" .$rpt_array['sql'] .")" . $rpt_array['where'] . $rpt_array['order_by'];
}

$grid_row=array();
if($cross_table!="true")
{
	$groupno=0;
	if(!$_SESSION[$sessPrefix."_pagenumber"]) {
		$_SESSION[$sessPrefix."_pagenumber"]=1;
	}

	if(!$_SESSION[$sessPrefix."_pagesize"]) {
		if ( (pre8count($rpt_array['group_fields']) - 1 ) > 0 ) {
			$_SESSION[$sessPrefix."_pagesize"]=5;
		} else {
			$_SESSION[$sessPrefix."_pagesize"]=20;
		}
	}



	if($modePrint && @$_REQUEST["all"])
		$PageSize=-1;
	else
		$PageSize=$_SESSION[$sessPrefix."_pagesize"];

	$pagestart=($_SESSION[$sessPrefix."_pagenumber"]-1)*$_SESSION[$sessPrefix."_pagesize"]+1;
	$pageend=$pagestart+$_SESSION[$sessPrefix."_pagesize"]-1;

	// init totals
	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
		$arr = $rpt_array['group_fields'][$i];
		if ( $i == 0 ) {
			// group totals
			$grouptotals_count = array();
			$grouptotals_min = array();
			$grouptotals_max = array();
			$grouptotals_dispmin = array();
			$grouptotals_dispmax = array();
			$grouptotals_sum = array();
			$grouptotalsavg_count = array();
		}
		$grouptotals_sum[$arr['name']]=array();
		$grouptotalsavg_count[$arr['name']]=array();
		$grouptotals_min[$arr['name']]=array();
		$grouptotals_max[$arr['name']]=array();
		$grouptotals_dispmin[$arr['name']]=array();
		$grouptotals_dispmax[$arr['name']]=array();
		$grouptotals_count[$arr['name']]=0;
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $fld['show'] )
			{
				$grouptotals_sum[$arr['name']][fldname($fld)]=0;
				$grouptotalsavg_count[$arr['name']][fldname($fld)]=0;
			}
		}
	}

	$summary = array_slice( $rpt_array['group_fields'], -1 );

	if ($summary[0]["sps"]) {$xt->assign("page_summary_block",true);}
	if ($summary[0]["sgs"]) {$xt->assign("global_summary_block",true);}
	if ($summary[0]["sds"]) {$xt->assign("details_summary_block",true);}
	if ($summary[0]["sps"] && $summary[0]["sgs"]) {$xt->assign("summary_footer",true);}

	if ( $summary[0]["sps"] ) {
		// page totals
		$pagetotals_count = 0;
		$pagetotals_min = array();
		$pagetotals_max = array();
		$pagetotals_dispmin = array();
		$pagetotals_dispmax = array();
		$pagetotals_sum = array();
		$pagetotalsavg_count = array();
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $fld['show'] ) {
				$pagetotals_sum[fldname($fld)]=0;
				$pagetotalsavg_count[fldname($fld)]=0;
			}
		}
	}

	if ( $summary[0]["sgs"] ) {
		// global totals
		$globaltotals_count = 0;
		$globaltotals_min = array();
		$globaltotals_max = array();
		$globaltotals_dispmin = array();
		$globaltotals_dispmax = array();
		$globaltotals_sum = array();
		$globaltotalsavg_count = array();
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $fld['show'] ) {
				$globaltotals_sum[fldname($fld)]=0;
				$globaltotalsavg_count[fldname($fld)]=0;
			}
		}
	}
	
	if( is_wr_project() ) { 
		// use datasourse for project table
		$tName = $rpt_array['tables'][0];
		$dataSourse = getDataSource( $tName );
		
		$subsetDataCommand = getProjectWRSubsetDataCommand( $tName, $rpt_array['sort_fields'], $gSettings, $editmode );
		
		$sqlData = $dataSourse->prepareSQL( $subsetDataCommand );
		// where are these variables used ?
		$_SESSION[$sessPrefix."_sql"]   = $sqlData["sql"];
		$_SESSION[$sessPrefix."_where"] = $sqlData["where"];
		$_SESSION[$sessPrefix."_order"] = $sqlData["order"];
		
		
		$rs = $dataSourse->getList( $subsetDataCommand );
	} else {
		LogInfo($strSQL);
		$rs = $_connection->query( $strSQL );
	}
	
	$start=true;
	$align_skip=false;

	$groupstart=array();
	$groupvalue = array();

	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
		$arr = $rpt_array['group_fields'][$i];
		$groupstart[$arr['name']] = 0;
		$groupvalue[$arr['name']] = "";
	}

	$rowinfo = array();

	$fields_type=array();
	if(is_wr_custom())
		$fields_type=WRGetAllCustomFieldType();

	include_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($_SESSION["webobject"]["table"], PAGE_REPORT);
	$viewControls = new ViewControlsContainer($pSet, PAGE_REPORT);
	while($data=$rs->fetchAssoc())
	{
		$firstnewgroup=true;
		$newgroup_ = array();
		$row=array();
		$arr_group=array();
		$arr_value=array();

		//	check if starting new group
		for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
			$arr = $rpt_array['group_fields'][$i];
			$newgroup_[$arr['name']] = false;
			$arr_group[$i] = array();
			$arr_group[$i]["newgroup"] = false;
			$arr_group[$i]["name"] = GoodFieldName( $arr['name'] );
			$arr_group[$i]["group_order"] = $arr['group_order'];
			$arr_group[$i]["groupId4"] = 1 + 6*($arr['group_order']-1);
			$arr_group[$i]["int_type"] = $arr['int_type'];
			$arr_group[$i]["ss"] = $arr['ss'];
			$arr_group[$i]["color1"] = $arr['color1'];
			$arr_group[$i]["color2"] = $arr['color2'];
		}
		$newgroup=false;


		if ( $start || $groupstart[$rpt_array['group_fields'][0]['name']] != GetGroupStart($rpt_array['group_fields'][0]['name'],db_fld_value($data,getDBFieldName($rpt_array['group_fields'][0]['name']))) )
		{
			$newgroup_[$rpt_array['group_fields'][0]['name']] = true;
			$newgroup=true;
		}

		for ( $i=1; $i < pre8count($rpt_array['group_fields']) - 1; $i++ ) {
			if ( $newgroup || $groupstart[$rpt_array['group_fields'][$i]['name'] ] != GetGroupStart($rpt_array['group_fields'][$i]['name'],db_fld_value($data,getDBFieldName($rpt_array['group_fields'][$i]['name']))) )
			{
				$newgroup_[$rpt_array['group_fields'][$i]['name']] = true;
				$newgroup=true;
			}
		}

		//close groups
		$rowclose=array();
		$arr_group_close=array();
		$arr_value_close=array();
		for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
			$arr = $rpt_array['group_fields'][$i];

			if( $editmode || !$start && $newgroup_[$arr['name']] )
			{
				$rowclose["endgroup_" . GoodFieldName( $arr['name'] )] = true;
				$rowclose["1" . GoodFieldName( $arr['name'] ) . "_grval"] = $groupvalue[$arr['name']];
				$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total_cnt"] = $grouptotals_count[$arr['name']];
				$arr_group_close[$i]["name"] = GoodFieldName( $arr['name'] );
				$arr_group_close[$i]["group_order"] = $arr['group_order'];
				$arr_group_close[$i]["int_type"] = $arr['int_type'];
				$arr_group_close[$i]["ss"] = $arr['ss'];
				$arr_group_close[$i]["color1"] = $arr['color1'];
				$arr_group_close[$i]["color2"] = $arr['color2'];
				$arr_group_close[$i]["endgroup"] = true;
				$arr_group_close[$i]["grval"] = $groupvalue[$arr['name']];
				$arr_group_close[$i]["total_cnt"] = $grouptotals_count[$arr['name']];

				foreach ( $rpt_array['totals'] as $fld )
				{
					if ( $fld['show'] && $fld['sum'] ) {
						$sum = array(fldname($fld)=>$grouptotals_sum[$arr['name']][fldname($fld)]);
						$sval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($sum, "");
						$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_sum"] = $sval;
						$arr_group_close[$i]["group_total_sum"]["data"][0][fldname($fld)] = $sval;
					}
				}

				if ( testAgr( $rpt_array['totals'], "avg", "min", "max", "" ) > 0 ) {
					if($grouptotals_count[$arr['name']])
					{
						foreach ( $rpt_array['totals'] as $fld )
						{
							if ( $fld['show'] ) {
								if ( $fld['avg'] ) {
									$aval = "";
									if($grouptotalsavg_count[$arr['name']][fldname($fld)])
									{
										$avg=array(fldname($fld)=>$grouptotals_sum[$arr['name']][fldname($fld)]/$grouptotalsavg_count[$arr['name']][fldname($fld)]);
										$aval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($avg, "");
									}
									$rowclose["group" . GoodFieldName( $arr['name'] )."_total".GoodFieldName( fldname($fld) )."_avg"] = $aval;
									$arr_group_close[$i]["group_total_avg"]["data"][0][fldname($fld)] = $aval;
								}
								if ( $fld['min'] ) {
									$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_min"] =
										$grouptotals_dispmin[$arr['name']][fldname($fld)];
									$arr_group_close[$i]["group_total_min"]["data"][0][fldname($fld)] =
										$grouptotals_dispmin[$arr['name']][fldname($fld)];
								}
								if ( $fld['max'] ) {
									$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_max"] =
										$grouptotals_dispmax[$arr['name']][fldname($fld)];
									$arr_group_close[$i]["group_total_max"]["data"][0][fldname($fld)] =
										$grouptotals_dispmax[$arr['name']][fldname($fld)];
								}
							}
						}
					}
				}
			}
		}

		if ( !((pre8count($rpt_array['group_fields']) - 1 ) > 0) ) {
			$groupno++;
		}

		if(($PageSize<0 || $groupno>=$pagestart && $groupno<=$pageend) && pre8count($rowclose))
		{
			$rowclose["group"]["data"]=$arr_group_close;
			$rowclose["group_desc"]["data"]=array_reverse($arr_group_close);
			$rowinfo[]=$rowclose;
		}
		$start=false;
		//open new group
		for ( $i=0; $i < pre8count($rpt_array['group_fields']) - 1; $i++ ) {
			$arr = $rpt_array['group_fields'][$i];
			if( $newgroup_[$arr['name']] )
			{
				if ( $i == 0 ) {
					$groupno++;
				}
				$row["newgroup_" . GoodFieldName( $arr['name'] )] = true;
				$arr_group[$i]["newgroup"] = true;
				$arr_group[$i]["firstnewgroup"] = $firstnewgroup;
				$firstnewgroup=false;

				$groupstart[$arr['name']] = GetGroupStart($arr['name'],db_fld_value($data,getDBFieldName($arr['name'])));
				$groupdisplay[$arr['name']] = GetGroupStart($arr['name'],db_fld_value($data,getDBFieldName($arr['name'])));
				$groupvalue[$arr['name']] = GetGroupDisplay($arr['name'],db_fld_value($data,getDBFieldName($arr['name'])));

				$row["1" . GoodFieldName( $arr['name'] ) . "_grval"] = $groupvalue[$arr['name']];
				$arr_group[$i]["grval"] = runner_htmlspecialchars( $groupvalue[$arr['name']] );
				$arr_group[$i]["groupId"] = 1 + 6*$i;

				$grouptotals_count[$arr['name']] = 0;
				foreach ( $rpt_array['totals'] as $fld )
				{
					if ( $fld['show'] ) {
						$grouptotals_sum[$arr['name']][fldname($fld)]=0;
						$grouptotalsavg_count[$arr['name']][fldname($fld)]=0;

					}
				}
			}
		}

		//display data
		if($PageSize<0 || $groupno>=$pagestart && $groupno<=$pageend)
		{
			$row["row_data"]=true;
			/////////////////////////////////
			$keylink="";
			$arrKeys = $gSettings->getTableKeys();
			if(!is_wr_project())
			{
				$arrKeysTbl=DBGetTableKeys( $rpt_array['tables'][0]);
				$arrKeys = array();
				foreach($arrKeysTbl as $i=>$k)
				{
					$arrKeys[$i]=$rpt_array['tables'][0].".".$k;
				}
			}
			for ( $j=0; $j < pre8count($arrKeys); $j++ ) {
				$keylink.="&key" . ($j+1) . "=".runner_htmlspecialchars(rawurlencode(db_fld_value($data,getDBFieldName($arrKeys[$j]))));
			}
			$arrFields=array();
			foreach ($rpt_array['totals'] as $f_key => $fld)
			{
				if ( $fld["show"] ) {
					$value="";
					if ( $fld["view_format"] == FORMAT_DATABASE_IMAGE && is_wr_project())
					{
						if($render_mode!=MODE_EXPORT)
						{
							if ( $fld["show_thumbnail"] ) {
								$value.="<a target=_blank href=\"".GetTableLink("imager")."?table=" . $rpt_array['short_table_name'] . "&field=" . runner_htmlspecialchars(rawurlencode(fldname($fld))) . "".$keylink."\">";
								$value.= "<img border=0";
		//								$value.=" src=\"" . $rpt_array['short_table_name'] . "_imager.php?field=" . runner_htmlspecialchars(rawurlencode($fld["strThumbnail"])) . $keylink . "&alt=" . runner_htmlspecialchars(rawurlencode(fldname($fld))) . "".$keylink."\">";
								$value.=" src=\"".GetTableLink("imager")."?table=" . $rpt_array['short_table_name'] . "&field=" . runner_htmlspecialchars(rawurlencode($fld["strThumbnail"])) . "".$keylink. "&alt=" . runner_htmlspecialchars(rawurlencode(fldname($fld)))."\">";
								$value.= "</a>";
							}
							else
							{
								$value = "<img";
								if ( $fld["listformatobj_imgwidth"] ) {
									$value.=" width=" . $fld["listformatobj_imgwidth"];
								}
								if ( $fld["listformatobj_imgheight"] ) {
									$value.=" height=" . $fld["listformatobj_imgheight"];
								}
								$value.=" border=0";
								$value.=" src=\"".GetTableLink("imager")."?table=" . $rpt_array['short_table_name'] . "&field=" . runner_htmlspecialchars(rawurlencode(fldname($fld))) . "".$keylink."\">";
							}
						}
					}
					elseif($fld["view_format"] == FORMAT_DATABASE_IMAGE && !is_wr_project())
					{
						if($render_mode!=MODE_EXPORT)
						{
							if(is_wr_custom())
							{
								$value = "LONG BINARY DATA - CANNOT BE DISPLAYED";
							}
							else
							{
								$value = "<img";
								$value.=" border=0";
								$value.=" src=\"".GetTableLink("dimager")."?rname=".runner_htmlspecialchars(rawurlencode(postvalue("rname")))."&field=" . runner_htmlspecialchars(rawurlencode(fldname($fld))) . "&alias=".runner_htmlspecialchars(rawurlencode($arrDBFieldsList[GoodFieldName(fldname($fld))])).$keylink."\">";
							}
						}
					}
					elseif ( $fld["view_format"] == FORMAT_FILE_IMAGE )
					{
						if($render_mode!=MODE_EXPORT)
						{
							if(CheckImageExtension(db_fld_value($data,getDBFieldName(fldname($fld)))))
							{
								if ( $fld["show_thumbnail"] ) {
									// show thumbnail
									$thumbname=$fld["thumbnail"].db_fld_value($data,getDBFieldName(fldname($fld)));
									if(substr($fld["hlprefix"],0,7)!="http://" && !file_exists(getabspath($fld["hlprefix"].$thumbname)))
									$thumbname=db_fld_value($data,getDBFieldName(fldname($fld)));
									$value="<a target=_blank href=\"".runner_htmlspecialchars(AddLinkPrefix($gSettings, fldname($fld),db_fld_value($data,getDBFieldName(fldname($fld)))))."\">";
									$value.="<img";
									if($thumbname==db_fld_value($data,getDBFieldName(fldname($fld))))
									{
										if ( $fld["listformatobj_imgwidth"] ) {
											$value.=" width=" . $fld["listformatobj_imgwidth"];
										}
										if ( $fld["listformatobj_imgheight"] ) {
											$value.=" height=" . $fld["listformatobj_imgheight"];
										}
									}
									$value.=" border=0";
									$value.=" src=\"".runner_htmlspecialchars(AddLinkPrefix($gSettings, fldname($fld),$thumbname))."\"></a>";
								} else {
									$value="<img";
									if ( $fld["listformatobj_imgwidth"] ) {
										$value.=" width=" . $fld["listformatobj_imgwidth"];
									}
									if ( $fld["listformatobj_imgheight"] ) {
										$value.=" height=" . $fld["listformatobj_imgheight"];
									}
									$value.=" border=0";
									$value.=" src=\"".runner_htmlspecialchars(AddLinkPrefix($gSettings, fldname($fld),db_fld_value($data,getDBFieldName(fldname($fld)))))."\">";
								}
							}
						}
					} elseif ( $fld["view_format"] == FORMAT_DATABASE_FILE ) {
						if($render_mode!=MODE_EXPORT)
						{
							if ( $fld["listformatobj_filename"] ) {
								$filename=db_fld_value($data,$fld["listformatobj_filename"]);
								if(!$filename) {
									$filename="file.bin";
								}
							} else {
								$filename="file.bin";
							}
							if(strlen(db_fld_value($data,getDBFieldName(fldname($fld)))))
							{
								$value="<a href=\"".GetTableLink($rpt_array['short_table_name'], "getfile")."?filename=".rawurlencode($filename)."&field=" . runner_htmlspecialchars(rawurlencode(fldname($fld))) . $keylink."\">";
								$value.=runner_htmlspecialchars($filename);
								$value.="</a>";
							}
						}
					}
					elseif(!is_wr_project())
					{
						$value=WRProcessLargeText($viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, ""),
							fldname($fld),pre8count($rowinfo),100,$render_mode,$fld['label']);
					}
					elseif ( ( $fld["edit_format"] == EDIT_FORMAT_LOOKUP_WIZARD || $fld["edit_format"] == EDIT_FORMAT_RADIO )
						&& ($fld['lookupobj_lookuptype'] == LT_LOOKUPTABLE || $fld['lookupobj_lookuptype'] == LT_QUERY) )
					{
						//delete tjhis after the tests on feature #6356
						//$value = DisplayLookupWizard(fldname($fld), $data[fldname($fld)], $data, $keylink, $render_mode, PAGE_REPORT);
						include_once getabspath('classes/controls/ViewLookupWizardField.php');
						if(!$viewControls->viewControls[fldname($fld)])
							$viewControls->viewControls[fldname($fld)] = new ViewLookupWizardField(getDBFieldName(fldname($fld)), $viewControls, null);
						$value = $viewControls->showDBValue($viewControls, $data, $keylink);
					}
					elseif ( $fld["view_format"]!=FORMAT_CUSTOM && $fld["view_format"]!=FORMAT_FILE_IMAGE
						&& $fld["view_format"] != FORMAT_FILE
						&& $fld["view_format"]!=FORMAT_HYPERLINK && $fld["view_format"]!=FORMAT_EMAILHYPERLINK
						&& $fld["view_format"] != FORMAT_CHECKBOX)
					{
						$value = WRProcessLargeText($viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "")
							, fldname($fld)
							, pre8count($rowinfo), $gSettings->getNumberOfChars(fldname($fld)), $render_mode,$fld['label']);
					}
					else
					{
						$value = $viewControls->getControl(getDBFieldName(fldname($fld)), $fld['view_format'])->showDBValue($data, "");
					}
					if ( $summary[0]["sds"] )
					{
						$row["1" . GoodFieldName( fldname($fld) ) . "_value"]=$value;
						$arrFields["data"][0][fldname($fld)] = $value;
					}
					for ( $i=0; $i < pre8count($rpt_array['group_fields']) - 1; $i++ )
					{
						$arr = $rpt_array['group_fields'][$i];
						if ( $summary[0]["sds"] || ( $arr["name"] == fldname($fld) && $arr["int_type"] == 0 ) )
						{
							if ( $summary[0]["sds"] )
							{
								$arr_group[$i]["value"]["data"][0][fldname($fld)] = $value;
							}

							if ( $arr["name"] == fldname($fld) && $arr["int_type"] == 0 )
							{
								if(@$row["newgroup_" . GoodFieldName( fldname($fld) )])
								{
									$row["1" . GoodFieldName( fldname($fld) ) . "_grval"]=$value;
									// ??? $arr_group[$i]["grval"]=$value;
									$groupvalue[fldname($fld)] = $value;
								}
							}
						}
					}
				}
			}

			//////////////////////////////////////////////////////////////
			//	update totals
			for ( $i=0; $i < pre8count($rpt_array['group_fields']) - 1; $i++ ) {
				$arr = $rpt_array['group_fields'][$i];

				foreach ( $rpt_array['totals'] as $fld )
				{
					if ( $fld['show'] && ( $fld['sum'] || $fld['avg'] ) ) {
						$grouptotals_sum[$arr['name']][fldname($fld)] += db_fld_value($data,getDBFieldName(fldname($fld)));
						if(!is_null(db_fld_value($data,fldname($fld))))
							$grouptotalsavg_count[$arr['name']][fldname($fld)]++;

					}
				}
				if ( testAgr( $rpt_array['totals'], "", "min", "max", "" ) > 0 ) {
					if(!$grouptotals_count[$arr['name']])
					{
						foreach ( $rpt_array['totals'] as $fld )
						{
							if ( $fld['show'] && $fld['min'] ) {
								$grouptotals_min[$arr['name']][fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
								$grouptotals_dispmin[$arr['name']][fldname($fld)] =
									$viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
							}
							if ( $fld['show'] && $fld['max'] ) {
								$grouptotals_max[$arr['name']][fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
								$grouptotals_dispmax[$arr['name']][fldname($fld)] =
									$viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
							}
						}
					}
					else
					{
						foreach ( $rpt_array['totals'] as $fld )
						{ // order nReportPageOrder
							if ( $fld['show'] && ( $fld['min'] || $fld['max'] ) ) {
								if ( $fld['min'] ) {
									if ( $grouptotals_min[$arr['name']][fldname($fld)] > db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $grouptotals_min[$arr['name']][fldname($fld)]=="")
									{
										$grouptotals_min[$arr['name']][fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
										$grouptotals_dispmin[$arr['name']][fldname($fld)] =
											$viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
									}
								}
								if ( $fld['max'] ) {
									if ( $grouptotals_max[$arr['name']][fldname($fld)] < db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $grouptotals_max[$arr['name']][fldname($fld)]=="")
									{
										$grouptotals_max[$arr['name']][fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
										$grouptotals_dispmax[$arr['name']][fldname($fld)] =
											$viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
									}
								}
							}
						}
					}
				}
				$grouptotals_count[$arr['name']]++;
			}

			if ( $summary[0]["sps"] ) {
				foreach ( $rpt_array['totals'] as $fld )
				{
					if ( $fld['show'] && ( $fld['sum'] || $fld['avg'] ) ) {
						$pagetotals_sum[fldname($fld)] += db_fld_value($data,getDBFieldName(fldname($fld)));
						if(!is_null(db_fld_value($data,fldname($fld))))
							$pagetotalsavg_count[fldname($fld)] ++;

					}
				}
				if ( testAgr( $rpt_array['totals'], "", "min", "max", "" ) > 0 ) {
					if(!$pagetotals_count)
					{
						foreach ( $rpt_array['totals'] as $fld ) {
							if ( $fld['show'] && $fld['min'] ) {
								$pagetotals_min[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
								$pagetotals_dispmin[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
							}
							if ( $fld['show'] && $fld['max'] ) {
								$pagetotals_max[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
								$pagetotals_dispmax[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
							}
						}
					}
					else
					{
						foreach ( $rpt_array['totals'] as $fld ) { // order nReportPageOrder
							if ( $fld['show'] && ( $fld['min'] || $fld['max'] ) ) {
								if ( $fld['min'] ) {
									if($pagetotals_min[fldname($fld)] > db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $pagetotals_min[fldname($fld)]=="")
									{
										$pagetotals_min[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
										$pagetotals_dispmin[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
									}
								}
								if ( $fld['max'] ) {
									if($pagetotals_max[fldname($fld)] < db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $pagetotals_max[fldname($fld)]=="")
									{
										$pagetotals_max[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
										$pagetotals_dispmax[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
									}
								}
							}
						}
					}
				}
				$pagetotals_count++;
			}

			$row["group"]["data"] = $arr_group;
			$row["group_desc"]["data"]=array_reverse($arr_group);
			$row["totals"]=$arrFields;
			$bNoNewGroup = true;
			foreach ( $arr_group as $groupItem ) {
				if ( $groupItem["newgroup"] ) {
					$bNoNewGroup = false;
					break;
				}
			}
			$row["nonewgroup"]=$bNoNewGroup;
			$rowinfo[]=$row;
		}

		if ( $summary[0]["sgs"] ) {
			foreach ( $rpt_array['totals'] as $fld ) {
				if ( $fld['show'] && ( $fld['sum'] || $fld['avg'] ) ) {
					$globaltotals_sum[fldname($fld)] += db_fld_value($data,getDBFieldName(fldname($fld)));
					if(!is_null(db_fld_value($data,fldname($fld))))
						$globaltotalsavg_count[fldname($fld)]++;
				}
			}
			if ( testAgr( $rpt_array['totals'], "", "min", "max", "" ) > 0 ) {
				if(!$globaltotals_count)
				{
					foreach ( $rpt_array['totals'] as $fld ) {
						if ( $fld['show'] && $fld['min'] ) {
							$globaltotals_min[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
							$globaltotals_dispmin[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
						}
						if ( $fld['show'] && $fld['max'] ) {
							$globaltotals_max[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
							$globaltotals_dispmax[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
						}
					}
				}
				else
				{
					foreach ( $rpt_array['totals'] as $fld ) { // order nReportPageOrder
						if ( $fld['show'] && ( $fld['min'] || $fld['max'] ) ) {
							if ( $fld['min'] ) {
								if($globaltotals_min[fldname($fld)] > db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $globaltotals_min[fldname($fld)]=="")
								{
									$globaltotals_min[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
									$globaltotals_dispmin[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
								}
							}
							if ( $fld['max'] ) {
								if($globaltotals_max[fldname($fld)] < db_fld_value($data,getDBFieldName(fldname($fld))) && db_fld_value($data,getDBFieldName(fldname($fld)))<>"" || $globaltotals_max[fldname($fld)]=="")
								{
									$globaltotals_max[fldname($fld)] = db_fld_value($data,getDBFieldName(fldname($fld)));
									$globaltotals_dispmax[fldname($fld)] = $viewControls->getControl(getDBFieldName(gfldname($fld)), $fld['view_format'])->showDBValue($data, "");
								}
							}
						}
					}
				}
			}
			$globaltotals_count++;
		}
		if($editmode) {
			break;
		}

	}

	if($PageSize<0 || $groupno>=$pagestart && $groupno<=$pageend)
	{
		//	close groups
		$rowclose=array();
		$arr_group_close=array();
		$arr_value_close=array();
		for ( $i=0; $i < pre8count($rpt_array['group_fields']) - 1; $i++ ) {
			$arr = $rpt_array['group_fields'][$i];

			$rowclose["endgroup_" . GoodFieldName( $arr['name'] )]=true;
			$rowclose["1" . GoodFieldName( $arr['name'] ) . "_grval"] = $groupvalue[$arr['name']];
			$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total_cnt"] = $grouptotals_count[$arr['name']];
			$arr_group_close[$i]["name"] = GoodFieldName( $arr['name'] );
			$arr_group_close[$i]["group_order"] = $arr['group_order'];
			$arr_group_close[$i]["int_type"] = $arr['int_type'];
			$arr_group_close[$i]["ss"] = $arr['ss'];
			$arr_group_close[$i]["color1"] = $arr['color1'];
			$arr_group_close[$i]["color2"] = $arr['color2'];
			$arr_group_close[$i]["endgroup"] = true;
			$arr_group_close[$i]["grval"] = $groupvalue[$arr['name']];
			$arr_group_close[$i]["total_cnt"] = $grouptotals_count[$arr['name']];

			foreach ( $rpt_array['totals'] as $fld ) {
				if ( $fld['show'] && $fld['sum'] ) {
					$sum=array(fldname($fld)=>$grouptotals_sum[$arr['name']][fldname($fld)]);
					$rval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($sum, "");
					$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_sum"] = $rval;
					$arr_group_close[$i]["group_total_sum"]["data"][0][fldname($fld)] = $rval;
				}
			}
			if ( testAgr( $rpt_array['totals'], "avg", "min", "max", "" ) > 0 ) {
				if ( $grouptotals_count[$arr['name']] ) {
					foreach ( $rpt_array['totals'] as $fld ) {
						if ( $fld['show'] ) {
							if ( $fld['avg'] ) {
								$aval = "";
								if($grouptotalsavg_count[$arr['name']][fldname($fld)])
								{
									$avg=array(fldname($fld)=>$grouptotals_sum[$arr['name']][fldname($fld)]/$grouptotalsavg_count[$arr['name']][fldname($fld)]);
									$aval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($avg, "");
								}
								$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_avg"] = $aval;
								$arr_group_close[$i]["group_total_avg"]["data"][0][fldname($fld)] = $aval;
							}
							if ( $fld['min'] ) {
								$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_min"] =
									$grouptotals_dispmin[$arr['name']][fldname($fld)];
								$arr_group_close[$i]["group_total_min"]["data"][0][fldname($fld)] =
									$grouptotals_dispmin[$arr['name']][fldname($fld)];
							}
							if ( $fld['max'] ) {
								$rowclose["group" . GoodFieldName( $arr['name'] ) . "_total" . GoodFieldName( fldname($fld) ) . "_max"] =
									$grouptotals_dispmax[$arr['name']][fldname($fld)];
								$arr_group_close[$i]["group_total_max"]["data"][0][fldname($fld)] =
									$grouptotals_dispmax[$arr['name']][fldname($fld)];
							}
						}
					}
				}
			}
		}

		if ( pre8count( $rowclose ) ) {
			$rowclose["group"]["data"]=$arr_group_close;
			$rowclose["group_desc"]["data"]=array_reverse($arr_group_close);
			$rowinfo[]=$rowclose;
		}
	}

	if ( $summary[0]["sps"] ) {
		$xt->assign("page_total_cnt",$pagetotals_count);
		foreach ($rpt_array['totals'] as $f_key => $fld) { // order nReportPageOrder
			if ( $fld['show'] ) {
				if ( $fld['sum'] ) {
					$sum=array(fldname($fld)=>$pagetotals_sum[fldname($fld)]);
					$sval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($sum, "");
					$xt->assign("page_total" . GoodFieldName( fldname($fld) ) . "_sum", $sval);
					$rpt_array['totals'][$f_key]['page_total_sum'] = $sval;
				}
				if ( $fld['avg'] || $fld['min'] || $fld['max'] ) {
					if($pagetotals_count)
					{
						if ( $fld['avg'] ) {
							$aval="";
							if($pagetotalsavg_count[fldname($fld)])
							{
								$avg=array(fldname($fld)=>$pagetotals_sum[fldname($fld)]/$pagetotalsavg_count[fldname($fld)]);
								$aval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($avg, "");
							}
							$xt->assign("page_total" . GoodFieldName( fldname($fld) ) . "_avg", $aval);
							$rpt_array['totals'][$f_key]['page_total_avg'] = $aval;
						}
						if ( $fld['min'] ) {
							$xt->assign("page_total" . GoodFieldName( fldname($fld) ) . "_min",$pagetotals_dispmin[fldname($fld)]);
							$rpt_array['totals'][$f_key]['page_total_min'] = $pagetotals_dispmin[fldname($fld)];
						}
						if ( $fld['max'] ) {
							$xt->assign("page_total" . GoodFieldName( fldname($fld) ) . "_max",$pagetotals_dispmax[fldname($fld)]);
							$rpt_array['totals'][$f_key]['page_total_max'] = $pagetotals_dispmax[fldname($fld)];
						}
					}
				}
			}
		}
	}

	if ( $summary[0]["sgs"] ) {
		$xt->assign("global_total_cnt",$globaltotals_count);

		foreach ($rpt_array['totals'] as $f_key => $fld) { // order nReportPageOrder
			if ( $fld['show'] ) {
				if ( $fld['sum'] ) {
					$sum=array(fldname($fld)=>$globaltotals_sum[fldname($fld)]);
					$sval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($sum, "");
					$xt->assign("global_total" . GoodFieldName( fldname($fld) ) . "_sum", $sval);
					$rpt_array['totals'][$f_key]['global_total_sum'] = $sval;
				}
				if ( $fld['avg'] || $fld['min'] || $fld['max'] ) {
					if($globaltotals_count)
					{
						if ( $fld['avg'] ) {
							$aval="";
							if($globaltotalsavg_count[fldname($fld)])
							{
								$avg=array(fldname($fld)=>$globaltotals_sum[fldname($fld)]/$globaltotalsavg_count[fldname($fld)]);
								$aval = $viewControls->getControl(fldname($fld), $fld['view_format'])->showDBValue($avg, "");
							}
							$xt->assign("global_total" . GoodFieldName( fldname($fld) ) . "_avg", $aval);
							$rpt_array['totals'][$f_key]['global_total_avg'] = $aval;
						}
						if ( $fld['min'] ) {
							$xt->assign("global_total" . GoodFieldName( fldname($fld) ) . "_min",$globaltotals_dispmin[fldname($fld)]);
							$rpt_array['totals'][$f_key]['global_total_min'] = $globaltotals_dispmin[fldname($fld)];
						}
						if ( $fld['max'] ) {
							$xt->assign("global_total" . GoodFieldName( fldname($fld) ) . "_max",$globaltotals_dispmax[fldname($fld)]);
							$rpt_array['totals'][$f_key]['global_total_max'] = $globaltotals_dispmax[fldname($fld)];
						}
					}
				}
			}
		}
	}

	if($groupno){
		$xt->assign("rowsfound",true);
	}
	$mypage = $_SESSION[$sessPrefix."_pagenumber"];
	$maxpages = ceil($groupno/$PageSize);

	//	write pagination
	if($maxpages>1){
		$xt->assign("pagination","<div id=\"pagination1\"></div>
			<script language=\"JavaScript\">WritePagination(".$mypage.",".$maxpages.", 1);
				function GotoPage(nPageNumber){
					window.location='".GetTableLink("dreport")."?rname=" . postvalue("rname") . "&goto='+nPageNumber;
				}
			</script>");
	}

	if ( ( pre8count($rpt_array['group_fields']) - 1 ) > 0 ) {
		$xt->assign("gpp1_selected",($PageSize==1)?"selected":"");
		$xt->assign("gpp3_selected",($PageSize==3)?"selected":"");
		$xt->assign("gpp5_selected",($PageSize==5)?"selected":"");
		$xt->assign("gpp10_selected",($PageSize==10)?"selected":"");
		$xt->assign("gpp50_selected",($PageSize==50)?"selected":"");
		$xt->assign("gpp100_selected",($PageSize==100)?"selected":"");
		$xt->assign("gpp0_selected",($PageSize==-1)?"selected":"");
	} else {
		$xt->assign("rpp10_selected",($PageSize==10)?"selected":"");
		$xt->assign("rpp20_selected",($PageSize==20)?"selected":"");
		$xt->assign("rpp50_selected",($PageSize==50)?"selected":"");
		$xt->assign("rpp100_selected",($PageSize==100)?"selected":"");
		$xt->assign("rpp500_selected",($PageSize==500)?"selected":"");
		$xt->assign("gpp0_selected",($PageSize==-1)?"selected":"");
	}

	// escape field labels
	foreach ($rpt_array['totals'] as $f_key => $fld) {
		$rpt_array['totals'][$f_key]['label'] = runner_htmlspecialchars( $rpt_array['totals'][$f_key]['label'] );
	}

	$aGroupFields=array();
	$ngFieldNames=array();
	$arr_page_order_fields=array();
	$arr_not_group_fields=array();
	$arr_group_fields = array();

	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
		$aGroupFields[] = $rpt_array['group_fields'][$i]['name'];
	}

	$aTotFields=array();
	foreach ( $rpt_array['totals'] as $fld )
	{
		$aTotFields[] = fldname($fld);
	}

	$ngFieldNames = array_diff( $aTotFields, $aGroupFields );

	$arr_alias = array();
	foreach ( $aGroupFields as $gr_name  ) {
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $gr_name == fldname($fld) && !in_array(fldname($fld), $arr_alias)) {
				$arr_alias[] = fldname($fld);
				$arr_page_order_fields["data"][] = $fld;
			}
		}
	}
	foreach ( $rpt_array['totals'] as $fld )
	{
		if ( in_array( fldname($fld), $ngFieldNames ) )
		{
			$arr_page_order_fields["data"][] = $fld;
			if ($fld["show"])
			{
				$arr_not_group_fields[] = $fld;
			}
		}
		if($rpt_array['miscellaneous']['type'] == "outline" && in_array( fldname($fld), $aGroupFields ) )
			$arr_group_fields["data"][] = $fld;
	}

	foreach ($arr_page_order_fields["data"] as $key => $value){
		$arr_page_order_fields["data"][$key]["fieldId"] = $key+1;
	}
	$align_summary = array();
	foreach ($arr_not_group_fields as $key => $value){
		$arr_not_group_fields[$key]['fieldId4'] = $key + 1;
	}
	$align_summary["data"] = $arr_not_group_fields;
	if($rpt_array['miscellaneous']['type'] != "outline")
		$xt->assignbyref("page_order_fields", $arr_page_order_fields);
	else
	{
		foreach ($arr_group_fields["data"] as $key => $value){
			$arr_group_fields["data"][$key]["fieldId"] = $key+1;
		}
		$xt->assignbyref("group_page_order_fields", $arr_group_fields);
		$xt->assignbyref("page_order_fields", $align_summary);
	}
	$xt->assignbyref("not_group_fields", $align_summary);

	$arr_group_field_colors = array();
	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
		$iteration = $i+1;
		$color1 = $rpt_array['group_fields'][$i]['color1'];
		$color2 = $rpt_array['group_fields'][$i]['color2'];
		$arr_group_field_colors["data"][] = array("iteration" => $iteration, "color1" => $color1, "color2" => $color2);
	}
	$xt->assignbyref("group_field_colors", $arr_group_field_colors);

	$xt->assign("groupFieldsCnt", pre8count( $rpt_array['group_fields'] ) - 1);
	if (pre8count( $rpt_array['group_fields'] ) > 1) {
		$xt->assign("groups_per_page_block", true);
	} else {
		$xt->assign("records_per_page_block", true);
	}

	$xt->assign("testAgr", testAgr( $rpt_array['totals'], "", "", "", "" ));
	$xt->assign("align_testAgr", testAgr( $rpt_array['totals'], "", "", "", "" ) - pre8count( $rpt_array['group_fields'] ) + 1);
	if (testAgr( $rpt_array['totals'], "", "", "", "" ) > 0) {
		$xt->assign("aggregation_block",true);
	}
	$xt->assign( "testAgrMin", testAgr( $rpt_array['totals'], "", "min", "", "" ) );
	if (testAgr( $rpt_array['totals'], "", "min", "", "" ) > 0) {
		$xt->assign("min_aggregation_block",true);
	}
	$xt->assign( "testAgrSum", testAgr( $rpt_array['totals'], "", "", "", "sum" ) );
	if (testAgr( $rpt_array['totals'], "", "", "", "sum" ) > 0) {
		$xt->assign("sum_aggregation_block",true);
	}
	$xt->assign( "testAgrAvg", testAgr( $rpt_array['totals'], "avg", "", "", "" ) );
	if (testAgr( $rpt_array['totals'], "avg", "", "", "" ) > 0) {
		$xt->assign("avg_aggregation_block",true);
	}
	$xt->assign( "testAgrMax", testAgr( $rpt_array['totals'], "", "", "max", "" ) );
	if (testAgr( $rpt_array['totals'], "", "", "max", "" ) > 0) {
		$xt->assign("max_aggregation_block",true);
	}

	for ($i=0; $i < pre8count($rowinfo); $i++) {
		$num_uniq2++;
		// not group fields
		// $arr_not_group_fields_values = array();
		$length = 0;
		$group_kol = pre8count($rowinfo[0]['group']['data']);
		$group_kol1 = $group_kol;
		if ($rpt_array['miscellaneous']['type'] == 'align') $group_kol1 = 0;
		$group_count = 0;
		if( !$rowinfo[$i]["not_group_fields_values"] ) {
			$rowinfo[$i]["not_group_fields_values"] = array( "data" => array() );
		}
		for ($k=0; $k < pre8count($arr_not_group_fields); $k++) {
			$name_ = $arr_not_group_fields[$k]["name"];
			if(is_wr_db())
				$name_ = $arr_not_group_fields[$k]["table"].".".$arr_not_group_fields[$k]["name"];
			if ($rpt_array['miscellaneous']['type'] != 'align') {
				while (!$arr_page_order_fields["data"][$group_count+$group_kol1]["show"]){
					$group_count++;
				}
			}
			$group_count++;
			$rowinfo[$i]["not_group_fields_values"]["data"][$length] = array();
			$rowinfo[$i]["not_group_fields_values"]["data"][$length]["fieldNum"] = $group_count+$group_kol1;
			if (isset($rowinfo[$i]["totals"])) {
				$rowinfo[$i]["not_group_fields_values"]["data"][$length]["field_value"] = $rowinfo[$i]["totals"]["data"][0][$name_];
				if ($rpt_array['miscellaneous']['type'] == "outline" || $rpt_array['miscellaneous']['type'] == "align") {
					$rowinfo[$i]["not_group_fields_values"]["data"][$length]["field_label"] = $arr_not_group_fields[$k]["label"];
				}

			}
			$length = pre8count($rowinfo[$i]["not_group_fields_values"]["data"]);
		}

		if ($rpt_array['miscellaneous']['type'] == "block") {
			if ($summary[0]["sds"] && $rowinfo[$i]["nonewgroup"]) {
				$rowinfo[$i]["no_newgroup_block"] = true;
			}
		}

		for ($j=0; $j < pre8count($rowinfo[$i]["group"]["data"]); $j++)
		{
			$num_uniq++;
			$arr_group_headers = array("data"=>array());
			$rowinfo[$i]["group"]["data"][$j]["iteration"] = $j+1;

			$rowinfo[$i]["group"]["data"][$j]["groupIdCo"] = 2+$j*6;
			$rowinfo[$i]["group"]["data"][$j]["group_in_uniq"] = 4;
			if ($rpt_array['miscellaneous']['type'] == 'outline') $rowinfo[$i]["group"]["data"][$j]["group_in_uniq_outline"] = 5;
			$group_name_ = $rowinfo[$i]["group"]["data"][$j]["name"];
			$rowinfo[$i]["group"]["data"][$j]["group_field_value"] =
				$rowinfo[$i]["group"]["data"][$j]["value"]["data"][0][$group_name_];

			if ($rowinfo[$i]["group"]["data"][$j]["int_type"]) {
				$rowinfo[$i]["group"]["data"][$j]["group_level"] = true;
			} else {
				$rowinfo[$i]["group"]["data"][$j]["default_level"] = true;
			}

			if ($rowinfo[$i]["group"]["data"][$j]["group_order"] > 1) {
				$rowinfo[$i]["group"]["data"][$j]["right_border"] = true;
			} else {
				$rowinfo[$i]["group"]["data"][$j]["left_border"] = true;
			}

			/*
			 * Stepped Layout
			 */
			if ($rpt_array['miscellaneous']['type'] == "stepped") {
				if ($rowinfo[$i]["group"]["data"][$j]["newgroup"])
				{
					$buf = '';
					if ($j == 0) {
						foreach ($arr_page_order_fields["data"] as $key => $arr_field_info) {
							if ($arr_field_info["show"]) {
								$buf .= "<td fieldname=\"".($key+1)."\" groupname=\"".FieldHeaders."\" class=\"class".FieldHeaders."g class".($key+1)."f class".FieldHeaders."g".($key+1)."f0u\">".$arr_field_info["label"]."</td>\n";
							}
						}
						$rowinfo[$i]["group"]["data"][$j]["first_group_block"] = true;
						$rowinfo[$i]["group"]["data"][$j]["first_group_html"] = $buf;
					}
					for ($k=0; $k < pre8count($rowinfo[$i]["group"]["data"]); $k++) {
						$arr_group_headers_values = array();
						$arr_group_headers_values["fieldId"] = $k+1;
						if ($rowinfo[$i]["group"]["data"][$k]["name"] == $rowinfo[$i]["group"]["data"][$j]["name"])
						{
							$arr_group_headers_values["groups_equal_block"] = true;
							$arr_group_headers_values["head_colspan"] = testAgr($rpt_array['totals'], "", "", "", "") - $rowinfo[$i]["group"]["data"][$j]["group_order"] + 1;
						} elseif ($rowinfo[$i]["group"]["data"][$k]["group_order"] < $rowinfo[$i]["group"]["data"][$j]["group_order"])
						{
							$arr_group_headers_values["groups_order_block"] = true;
							$arr_group_headers_values["head_group_order"] = $rowinfo[$i]["group"]["data"][$k]["group_order"];
							$arr_group_headers_values["fieldId"] = $k+1;
							$arr_group_headers_values["groupId"] = 2 + ($rowinfo[$i]["group"]["data"][$k]["group_order"]-1)*6;
							$arr_group_headers_values["group_in_uniq"] = $j;
						}
						if (pre8count($arr_group_headers_values) > 0) {
							$arr_group_headers["data"][] = $arr_group_headers_values;
						}
					}
					$rowinfo[$i]["group"]["data"][$j]["group_headers"] = $arr_group_headers;
				}
			}

			/*
			 * Block Layout
			 */
			if ($rpt_array['miscellaneous']['type'] == "block")
			{
				if ($rowinfo[$i]["group"]["data"][$j]["int_type"] && $summary[0]["sds"]) {
					$rowinfo[$i]["group"]["data"][$j]["field_value"] =
						$rowinfo[$i]["group"]["data"][$j]["value"]["data"][0][$group_name_];
				} else {
					$rowinfo[$i]["group"]["data"][$j]["field_value"] = "&nbsp;";
				}

				if ($rowinfo[$i]["group"]["data"][$j]["newgroup"]
					&& $rowinfo[$i]["group"]["data"][$j]["firstnewgroup"])
				{
					$rowinfo[$i]["group"]["data"][$j]["first_newgroup"] = true;
					$buf = '';
					if ($j == 0) {
						foreach ($arr_page_order_fields["data"] as $key => $arr_field_info) {
							if ($arr_field_info["show"]) {
								// add column sign
								$buf .= "<td fieldname=\"".($key+1)."\" groupname=\"".FieldHeaders."\" class=\"class".FieldHeaders."g class".($key+1)."f class".FieldHeaders."g".($key+1)."f0u\">".$arr_field_info["label"]."</td>\n";
							}
						}
						$rowinfo[$i]["group"]["data"][$j]["first_group_block"] = true;
						$rowinfo[$i]["group"]["data"][$j]["first_group_html"] = $buf;
					}

					for ($m=0; $m < pre8count($arr_not_group_fields); $m++) {
						$name_ = $arr_not_group_fields[$m]["name"];
						if(is_wr_db())
							$name_ = $arr_not_group_fields[$m]["table"].".".$arr_not_group_fields[$m]["name"];
						if ($summary[0]["sds"]) {
							if (isset($rowinfo[$i]["totals"]))
							{
								$rowinfo[$i]["not_group_fields_values_block"]["data"][] = array("field_value" => $rowinfo[$i]["totals"]["data"][0][$name_]);
							}
						}
						else
						{
							$rowinfo[$i]["not_group_fields_values_block"]["data"][] = array("field_value" => "&nbsp;");
						}
						$rowinfo[$i]["not_group_fields_values_block"]["data"][pre8count($rowinfo[$i]["not_group_fields_values_block"]["data"])-1]["fieldNum"] = ++$group_kol1;
					}

					for ($k=0; $k < pre8count($rowinfo[$i]["group"]["data"]); $k++) {
						$arr_group_headers_values = array();
						$arr_group_headers_values["fieldId"] = $k+1;
						$arr_group_headers_values["groupId2"] = 1 + 6*$k;
						$arr_group_headers_values["groupId3"] = 2 + 6*$k;
						$arr_group_headers_values["group2_in_uniq"] = $j+1;
						$group_name_2_ = $rowinfo[$i]["group"]["data"][$k]["name"];
						if ($rowinfo[$i]["group"]["data"][$k]["group_order"] >= $rowinfo[$i]["group"]["data"][$j]["group_order"])
						{
							$arr_group_headers_values["true_groups_order_block"] = true;
							$arr_group_headers_values["group2_group_order"] = $rowinfo[$i]["group"]["data"][$k]["group_order"];
							$arr_group_headers_values["group2_grval"] = $rowinfo[$i]["group"]["data"][$k]["grval"];

							if ($rowinfo[$i]["group"]["data"][$k]["int_type"] && $summary[0]["sds"]) {
								$arr_group_headers_values["groups_sds_block"] = true;
								$arr_group_headers_values["group2_field_value"] =
									$rowinfo[$i]["group"]["data"][$k]["value"]["data"][0][$group_name_2_];
							}
						} else {
							$arr_group_headers_values["false_groups_order_block"] = true;
							$arr_group_headers_values["group2_group_order"] = $rowinfo[$i]["group"]["data"][$k]["group_order"];

							if ($rowinfo[$i]["group"]["data"][$k]["int_type"] && $summary[0]["sds"]) {
								$arr_group_headers_values["groups_sds_block"] = true;
								$arr_group_headers_values["group2_field_value"] =
									$rowinfo[$i]["group"]["data"][$k]["value"]["data"][0][$group_name_2_];
							} else {
								$arr_group_headers_values["groups_sds_block_else"] = true;
							}
						}
						if (pre8count($arr_group_headers_values) > 0) {
							$arr_group_headers["data"][] = $arr_group_headers_values;
						}
					}
					$rowinfo[$i]["group"]["data"][$j]["group_headers"] = $arr_group_headers;
				}
			}

			/*
			 * Outline Layout
			 */
			if ($rpt_array['miscellaneous']['type'] == "outline") {
				if ($rowinfo[$i]["group"]["data"][$j]["newgroup"])
				{
					$rowinfo[$i]["group"]["data"][$j]["head_colspan"] = testAgr($rpt_array['totals'], "", "", "", "") - $rowinfo[$i]["group"]["data"][$j]["group_order"] + 1;
					$arr_group_headers_values["groupId4"] = 1 + 6*$k;
					foreach ($arr_page_order_fields["data"] as $arr_field_info) {
						if (gfldname($arr_field_info) == $group_name_) {
							$rowinfo[$i]["group"]["data"][$j]["group_label"] = $arr_field_info["label"];
						}
					}
					if ($j == 0) {
						$rowinfo[$i]["group"]["data"][$j]["first_group_block"] = true;
					}
					if ($j == (pre8count($rowinfo[$i]["group"]["data"])-1)) {
						$rowinfo[$i]["group"]["data"][$j]["last_group_block"] = true;
					}
					for ($k=0; $k < pre8count($rowinfo[$i]["group"]["data"]); $k++) {
						$arr_group_headers_values["fieldId"] = $k+1;
						$arr_group_headers_values = array();
						$arr_group_headers_values["group2_group_order"] = $rowinfo[$i]["group"]["data"][$k]["group_order"];
						$arr_group_headers_values["group2_in_uniq"] = $j;
						$arr_group_headers_values["groupId2"] = 1 + 6*$k;
						$arr_group_headers_values["groupId3"] = 2 + 6*$k;

						if ($rowinfo[$i]["group"]["data"][$k]["group_order"] < $rowinfo[$i]["group"]["data"][$j]["group_order"])
						{
							$arr_group_headers_values["groups_order_block"] = true;
						}
						if (pre8count($arr_group_headers_values) > 0) {
							$arr_group_headers["data"][] = $arr_group_headers_values;
						}
					}
					$rowinfo[$i]["group"]["data"][$j]["group_headers"] = $arr_group_headers;
				}
			}

			/*
			 * Align Layout
			 */
			if ($rpt_array['miscellaneous']['type'] == "align") {
				if ($rowinfo[$i]["group"]["data"][$j]["newgroup"])
				{
					foreach ($arr_page_order_fields["data"] as $key => $arr_field_info) {
						if (gfldname($arr_field_info) == $group_name_) {
							$rowinfo[$i]["group"]["data"][$j]["group_label"] = $arr_field_info["label"];
						}
						$rowinfo[$i]["group"]["data"][$j]["fieldId"] =  $key + 1;
					}
					if ($j == 0) {
						$rowinfo[$i]["group"]["data"][$j]["first_group_block"] = true;
					}
					if ($j == (pre8count($rowinfo[$i]["group"]["data"])-1)) {
						$rowinfo[$i]["group"]["data"][$j]["last_group_block"] = true;
					}
				}
			}
		}
		// group_desc <=> group_summary_block
		$arr_group_summary = array();
		$num_uniq_outline = 0;
		for ($j=0; $j < pre8count($rowinfo[$i]["group_desc"]["data"]); $j++)
		{

			$group_name_ = $rowinfo[$i]["group_desc"]["data"][$j]["name"];

			if ($rowinfo[$i]["group_desc"]["data"][$j]["ss"]
				&& $rowinfo[$i]["group_desc"]["data"][$j]["endgroup"])
			{
				// sum
				$group_summary_fields_sum = array();
				$num_uniq2++;
				if ($rpt_array['miscellaneous']['type'] == "align") {
					for ($k=0; $k < pre8count($arr_not_group_fields); $k++) {
						$group_summary_fields_sum[$k] = array();
						$group_summary_fields_sum[$k]["iteration"] = $k+1;
						$group_summary_fields_sum[$k]['groupIdSum'] = 5 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
						$group_summary_fields_sum[$k]['group_in_uniq'] = $num_uniq2;

						$name_ = $arr_not_group_fields[$k]["name"];
						if(is_wr_db())
							$name_ = $arr_not_group_fields[$k]["table"].".".$arr_not_group_fields[$k]["name"];

						if ($k == 0) {
							$group_summary_fields_sum[$k]["first_block"] = true;
						} else {
							$group_summary_fields_sum[$k]["not_first_block"] = true;
						}

						if ($arr_not_group_fields[$k]["sum"]) {
							$group_summary_fields_sum[$k]["sum_field_flag"]=true;
							$group_summary_fields_sum[$k]["group_total_sum_value"] =
								$rowinfo[$i]["group_desc"]["data"][$j]["group_total_sum"]["data"][0][$name_];
						}
					}
				} else {
					for ($k=0; $k < pre8count($arr_page_order_fields["data"]); $k++) {
						$field_name_ = fldname($arr_page_order_fields["data"][$k]);
						$group_summary_fields_sum[$k] = array();

						if ($arr_page_order_fields["data"][$k]["show"]) {
							$group_summary_fields_sum[$k]["iteration"] = $k+1;
							$group_summary_fields_sum[$k]['groupIdSum'] = 5 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
							$group_summary_fields_sum[$k]['group_in_uniq'] = $num_uniq2;
							$group_summary_fields_sum[$k]['group_in_uniq_block'] = $num_uniq2-4;
							if (GoodFieldName($field_name_) == $group_name_) {
								$group_summary_fields_sum[$k]["group_field_flag"]=true;
								$group_summary_fields_sum[$k]["left_border"]="";
								if ($rowinfo[$i]["group_desc"]["data"][$j]["group_order"] > 1) {
									$group_summary_fields_sum[$k]["left_border"]="border-left:1px solid black;";
								}
							} elseif ($arr_page_order_fields["data"][$k]["sum"]) {
								$group_summary_fields_sum[$k]["sum_field_flag"]=true;
								$group_summary_fields_sum[$k]["group_total_sum_value"] =
									$rowinfo[$i]["group_desc"]["data"][$j]["group_total_sum"]["data"][0][$field_name_];
							} elseif ($k < $rowinfo[$i]["group_desc"]["data"][$j]["group_order"]) {
								$group_summary_fields_sum[$k]['groupIdSum'] = 2 + $k*6;
								$group_summary_fields_sum[$k]['group_in_uniq'] = $num_uniq2;
								$group_summary_fields_sum[$k]['groupIdSum3'] = 2 + $j*6;
								$group_summary_fields_sum[$k]["border_flag"]=true;
								if ($k > 0) {
									$group_summary_fields_sum[$k]["left_border"]="border-left:1px solid black;";
								} else {
									$group_summary_fields_sum[$k]["left_border"]="border-left:solid 1px #cccccc;";
								}
							} else {
								$group_summary_fields_sum[$k]["default_flag"]=true;
							}
						}
					}
				}
				if (pre8count($group_summary_fields_sum)>0) {
					$rowinfo[$i]["group_desc"]["data"][$j]["group_summary_fields_sum"]["data"] = $group_summary_fields_sum;
				}
				// avg
				$num_uniq2++;
				$group_summary_fields_avg = array();
				if ($rpt_array['miscellaneous']['type'] == "align") {
					for ($k=0; $k < pre8count($arr_not_group_fields); $k++) {
						$name_ = $arr_not_group_fields[$k]["name"];
						$group_summary_fields_avg[$k] = array();
						if(is_wr_db())
							$name_ = $arr_not_group_fields[$k]["table"].".".$arr_not_group_fields[$k]["name"];
						$group_summary_fields_avg[$k]['groupIdAvg'] = 6 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
						$group_summary_fields_avg[$k]['group_in_uniq'] = $num_uniq2;
						$group_summary_fields_avg[$k]["iteration"] = $k+1;
						if ($k == 0) {
							$group_summary_fields_avg[$k]["first_block"] = true;
						} else {
							$group_summary_fields_avg[$k]["not_first_block"] = true;
						}

						if ($arr_not_group_fields[$k]["avg"]) {
							$group_summary_fields_avg[$k]["avg_field_flag"]=true;
							$group_summary_fields_avg[$k]["group_total_avg_value"] =
								$rowinfo[$i]["group_desc"]["data"][$j]["group_total_avg"]["data"][0][$name_];
						}
					}
				} else {
					for ($k=0; $k < pre8count($arr_page_order_fields["data"]); $k++) {
						$field_name_ = fldname($arr_page_order_fields["data"][$k]);
						$group_summary_fields_avg[$k] = array();

						if ($arr_page_order_fields["data"][$k]["show"]) {
							$group_summary_fields_avg[$k]['groupIdAvg'] = 6 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
							$group_summary_fields_avg[$k]['group_in_uniq'] = $num_uniq2;
							$group_summary_fields_avg[$k]['group_in_uniq_block'] = $num_uniq2-4;
							$group_summary_fields_avg[$k]["iteration"] = $k+1;
							if (GoodFieldName($field_name_) == $group_name_) {
								$group_summary_fields_avg[$k]["group_field_flag"]=true;
								$group_summary_fields_avg[$k]["left_border"]="";
								if ($rowinfo[$i]["group_desc"]["data"][$j]["group_order"] > 1) {
									$group_summary_fields_avg[$k]["left_border"]="border-left:1px solid black;";
								}
							} elseif ($arr_page_order_fields["data"][$k]["avg"]) {
								$group_summary_fields_avg[$k]["avg_field_flag"]=true;
								$group_summary_fields_avg[$k]["group_total_avg_value"] =
									$rowinfo[$i]["group_desc"]["data"][$j]["group_total_avg"]["data"][0][$field_name_];
							} elseif ($k < $rowinfo[$i]["group_desc"]["data"][$j]["group_order"]) {
								$group_summary_fields_avg[$k]['groupIdAvg'] = 2 + $k*6;
								$group_summary_fields_avg[$k]['group_in_uniq'] = $num_uniq2;
								$group_summary_fields_avg[$k]['groupIdAvg3'] = 2 + $j*6;
								$group_summary_fields_avg[$k]["border_flag"]=true;
								if ($k > 0) {
									$group_summary_fields_avg[$k]["left_border"]="border-left:1px solid black;";
								} else {
									$group_summary_fields_avg[$k]["left_border"]="border-left:solid 1px #cccccc;";
								}
							} else {
								$group_summary_fields_avg[$k]["default_flag"]=true;
							}
						}
					}
				}
				if (pre8count($group_summary_fields_avg)>0) {
					$rowinfo[$i]["group_desc"]["data"][$j]["group_summary_fields_avg"]["data"] = $group_summary_fields_avg;
				}
				// min
				$num_uniq2++;
				$group_summary_fields_min = array();
				if ($rpt_array['miscellaneous']['type'] == "align") {
					for ($k=0; $k < pre8count($arr_not_group_fields); $k++) {
						$group_summary_fields_min[$k] = array();
						$name_ = $arr_not_group_fields[$k]["name"];
						if(is_wr_db())
							$name_ = $arr_not_group_fields[$k]["table"].".".$arr_not_group_fields[$k]["name"];
						$group_summary_fields_min[$k]["iteration"] = $k+1;
						$group_summary_fields_min[$k]['groupIdMin'] = 3 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
						$group_summary_fields_min[$k]['group_in_uniq'] = $num_uniq2;
						if ($k == 0) {
							$group_summary_fields_min[$k]["first_block"] = true;
						} else {
							$group_summary_fields_min[$k]["not_first_block"] = true;
						}

						if ($arr_not_group_fields[$k]["min"]) {
							$group_summary_fields_min[$k]["min_field_flag"]=true;
							$group_summary_fields_min[$k]["group_total_min_value"] =
								$rowinfo[$i]["group_desc"]["data"][$j]["group_total_min"]["data"][0][$name_];
						}
					}
				} else {
					for ($k=0; $k < pre8count($arr_page_order_fields["data"]); $k++) {
						$field_name_ = fldname($arr_page_order_fields["data"][$k]);
						$group_summary_fields_min[$k] = array();
						if ($arr_page_order_fields["data"][$k]["show"]) {
							$group_summary_fields_min[$k]["iteration"] = $k+1;
							$group_summary_fields_min[$k]['groupIdMin'] = 3 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
							$group_summary_fields_min[$k]['group_in_uniq'] = $num_uniq2;
							$group_summary_fields_min[$k]['group_in_uniq_block'] = $num_uniq2-4;
							if (GoodFieldName($field_name_) == $group_name_) {
								$group_summary_fields_min[$k]["group_field_flag"]=true;
								$group_summary_fields_min[$k]["left_border"]="";
								if ($rowinfo[$i]["group_desc"]["data"][$j]["group_order"] > 1) {
									$group_summary_fields_min[$k]["left_border"]="border-left:1px solid black;";
								}
							} elseif ($arr_page_order_fields["data"][$k]["min"]) {
								$group_summary_fields_min[$k]["min_field_flag"]=true;
								$group_summary_fields_min[$k]["group_total_min_value"] =
									$rowinfo[$i]["group_desc"]["data"][$j]["group_total_min"]["data"][0][$field_name_];
							} elseif ($k < $rowinfo[$i]["group_desc"]["data"][$j]["group_order"]) {
								$group_summary_fields_min[$k]['groupIdMin'] = 2 + $k*6;
								$group_summary_fields_min[$k]['group_in_uniq'] = $num_uniq2;
								$group_summary_fields_min[$k]['groupIdMin3'] = 2 + $j*6;
								$group_summary_fields_min[$k]["border_flag"]=true;
								if ($k > 0) {
									$group_summary_fields_min[$k]["left_border"]="border-left:1px solid black;";
								} else {
									$group_summary_fields_min[$k]["left_border"]="border-left:solid 1px #cccccc;";
								}
							} else {
								$group_summary_fields_min[$k]["default_flag"]=true;
							}
						}
					}
				}
				if (pre8count($group_summary_fields_min)>0) {
					$rowinfo[$i]["group_desc"]["data"][$j]["group_summary_fields_min"]["data"] = $group_summary_fields_min;
				}
				// max
				$num_uniq2++;
				$group_summary_fields_max = array();
				if ($rpt_array['miscellaneous']['type'] == "align") {
					for ($k=0; $k < pre8count($arr_not_group_fields); $k++) {
						$name_ = $arr_not_group_fields[$k]["name"];
						$group_summary_fields_max[$k] = array();
						if(is_wr_db())
							$name_ = $arr_not_group_fields[$k]["table"].".".$arr_not_group_fields[$k]["name"];
						$group_summary_fields_max[$k]["iteration"] = $k+1;
						$group_summary_fields_max[$k]['groupIdMax'] = 4 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
						$group_summary_fields_max[$k]['group_in_uniq'] = $num_uniq2;
						if ($k == 0) {
							$group_summary_fields_max[$k]["first_block"] = true;
						} else {
							$group_summary_fields_max[$k]["not_first_block"] = true;
						}

						if ($arr_not_group_fields[$k]["max"]) {
							$group_summary_fields_max[$k]["max_field_flag"]=true;
							$group_summary_fields_max[$k]["group_total_max_value"] =
								$rowinfo[$i]["group_desc"]["data"][$j]["group_total_max"]["data"][0][$name_];
						}
					}
				} else {
					for ($k=0; $k < pre8count($arr_page_order_fields["data"]); $k++) {
						$field_name_ = fldname($arr_page_order_fields["data"][$k]);
						$group_summary_fields_max[$k] = array();

						if ($arr_page_order_fields["data"][$k]["show"]) {
							$group_summary_fields_max[$k]["iteration"] = $k+1;
							$group_summary_fields_max[$k]['groupIdMax'] = 4 + (pre8count($rowinfo[0]['group']['data'])-1-$j)*6;
							$group_summary_fields_max[$k]['group_in_uniq'] = $num_uniq2;
							$group_summary_fields_max[$k]['group_in_uniq_block'] = $num_uniq2-4;
							if (GoodFieldName($field_name_) == $group_name_) {
								$group_summary_fields_max[$k]["group_field_flag"]=true;
								$group_summary_fields_max[$k]["left_border"]="";
								if ($rowinfo[$i]["group_desc"]["data"][$j]["group_order"] > 1) {
									$group_summary_fields_max[$k]["left_border"]="border-left:1px solid black;";
								}
							} elseif ($arr_page_order_fields["data"][$k]["max"]) {
								$group_summary_fields_max[$k]["max_field_flag"]=true;
								$group_summary_fields_max[$k]["group_total_max_value"] =
									$rowinfo[$i]["group_desc"]["data"][$j]["group_total_max"]["data"][0][$field_name_];
							} elseif ($k < $rowinfo[$i]["group_desc"]["data"][$j]["group_order"]) {
								$group_summary_fields_max[$k]['groupIdMax'] = 2 + $k*6;
								$group_summary_fields_max[$k]['group_in_uniq'] = $num_uniq2;
								$group_summary_fields_max[$k]['groupIdMax3'] = 2 + $j*6;
								$group_summary_fields_max[$k]["border_flag"]=true;
								if ($k > 0) {
									$group_summary_fields_max[$k]["left_border"]="border-left:1px solid black;";
								} else {
									$group_summary_fields_max[$k]["left_border"]="border-left:solid 1px #cccccc;";
								}
							} else {
								$group_summary_fields_max[$k]["default_flag"]=true;
							}
						}
					}
				}
				if (pre8count($group_summary_fields_max)>0) {
					$rowinfo[$i]["group_desc"]["data"][$j]["group_summary_fields_max"]["data"] = $group_summary_fields_max;
				}
				// group summary totals
				$group_summary_totals = array();
				for ($k=0; $k < pre8count($arr_page_order_fields["data"]); $k++) {
					if (gfldname($arr_page_order_fields["data"][$k]) == $rowinfo[$i]["group_desc"]["data"][$j]["name"]) {
						$group_summary_totals[$k] = array();
						$group_order_ = $rowinfo[$i]["group_desc"]["data"][$j]["group_order"];
						if ($group_order_ > 1) {
							$group_summary_totals[$k]["left_border"]=true;
						}
						$group_summary_totals[$k]["colspan_expr"] =
							testAgr( $rpt_array['totals'], "", "", "", "" ) - $group_order_ + 1;
						$group_summary_totals[$k]["label"] = $arr_page_order_fields["data"][$k]["label"];
						$group_summary_totals[$k]["groupIdSummary"] = (pre8count($rowinfo[0]['group']['data'])-1-$j) + 36;
					}
				}
				if (pre8count($group_summary_totals)>0) {
					$rowinfo[$i]["group_desc"]["data"][$j]["group_summary_totals"]["data"] = $group_summary_totals;
				}
				// repeat construction
				$td_columns = "";
				$num_uniq2++;
				$num_uniq_outline++;
				for ($m=0; $m < (pre8count($rpt_array['group_fields']) - ($j+2)); $m++) {
					if ($rpt_array['miscellaneous']['type'] == "block")
						$td_columns .= '<td class="group_'.($m+1).' class'.(2+$m*6).'g class'.($m+1).'f class'.(2+$m*6).'g'.($m+1).'f'.($num_uniq2-9).'u" groupname="'.(2+$m*6).'" fieldname="'.($m+1).'" uniqe="'.($num_uniq2-9).'" style="border-style:none; border-left:1px solid #000; border-right:1px solid #000;';
					else
						$td_columns .= '<td class="group_'.($m+1).' class'.(2+$m*6).'g class'.($m+1).'f class'.(2+$m*6).'g'.($m+1).'f'.($num_uniq2-5).'u" groupname="'.(2+$m*6).'" fieldname="'.($m+1).'" uniqe="'.($num_uniq2-5).'" style="border-style:none; border-left:1px solid #000; border-right:1px solid #000;';
					if ($rpt_array['miscellaneous']['type'] != "block") {
						if ($m>1)
							$td_columns .= 'border-left:1px solid black;';
						else
							$td_columns .= 'border-left:1px solid #ccc;';
					}
					$td_columns .= '"></td>';
				}
				if ($td_columns<>"") {
					$rowinfo[$i]["group_desc"]["data"][$j]["td_columns"] = $td_columns;
				}
				// insert all in one transaction
				$arr_group_summary[] = $rowinfo[$i]["group_desc"]["data"][$j];
			}
		}
		if ( $arr_group_summary ) {
			$rowinfo[$i]["group_summary_block"]["data"] = $arr_group_summary;
		}
		// REMOVE group_desc section FROM $rowinfo array
		unset($rowinfo[$i]["group_desc"]);
	}


	// header for nogroup
	if( $rowinfo )
	{
		if( !$rowinfo[0]["group"]["data"] )
		{
			$buf = '';
			foreach ($arr_page_order_fields["data"] as $key => $arr_field_info)
			{
				if ($arr_field_info["show"])
					$buf .= "<td fieldname=\"".($key+1)."\" groupname=\"".FieldHeaders."\" class=\"class".FieldHeaders."g class".($key+1)."f class".FieldHeaders."g".($key+1)."f0u\">".$arr_field_info["label"]."</td>\n";
			}
			$rowinfo[0]["newgroup"] = true;
			$rowinfo[0]["group"]["data"][0]["first_group_block"] = true;
			$rowinfo[0]["group"]["data"][0]["first_group_html"] = $buf;
		}
	}

	$page_summary_fields_sum = array();
	$page_summary_fields_avg = array();
	$page_summary_fields_min = array();
	$page_summary_fields_max = array();
	// sum - page summary
	if ($rpt_array['miscellaneous']['type'] == "align") {
		for ($i=0; $i < pre8count($arr_not_group_fields); $i++) {
			$page_summary_fields_sum["data"][$i] = $arr_not_group_fields[$i];
			$page_summary_fields_sum["data"][$i]['fieldId'] = $i+1;
			if ($i==0) {
				$page_summary_fields_sum["data"][$i]["first_field_flag"] = true;
			}
			if ($page_summary_fields_sum["data"][$i]["sum"]) {
				$page_summary_fields_sum["data"][$i]["sum_field_flag"] = true;
			}
		}
	} else {
		for ($i=0; $i < pre8count($arr_page_order_fields["data"]); $i++) {
			$page_summary_fields_sum["data"][$i] = $arr_page_order_fields["data"][$i];
			$page_summary_fields_sum["data"][$i]['fieldId'] = $i+1;
			if ($page_summary_fields_sum["data"][$i]["show"]) {
				if ($i==0) {
					$page_summary_fields_sum["data"][$i]["first_field_flag"] = true;
				} elseif ($page_summary_fields_sum["data"][$i]["sum"]) {
					$page_summary_fields_sum["data"][$i]["sum_field_flag"] = true;
				}  else {
					$page_summary_fields_sum["data"][$i]["default_flag"] = true;
				}
			}
		}
	}
	// avg - page summary
	if ($rpt_array['miscellaneous']['type'] == "align") {
		for ($i=0; $i < pre8count($arr_not_group_fields); $i++) {
			$page_summary_fields_avg["data"][$i] = $arr_not_group_fields[$i];
			$page_summary_fields_avg["data"][$i]['fieldId'] = $i+1;
			if ($i==0) {
				$page_summary_fields_avg["data"][$i]["first_field_flag"] = true;
			}
			if ($page_summary_fields_avg["data"][$i]["avg"]) {
				$page_summary_fields_avg["data"][$i]["avg_field_flag"] = true;
			}
		}
	} else {
		for ($i=0; $i < pre8count($arr_page_order_fields["data"]); $i++) {
			$page_summary_fields_avg["data"][$i] = $arr_page_order_fields["data"][$i];
			$page_summary_fields_avg["data"][$i]['fieldId'] = $i+1;
			if ($page_summary_fields_avg["data"][$i]["show"]) {
				if ($i==0) {
					$page_summary_fields_avg["data"][$i]["first_field_flag"] = true;
				} elseif ($page_summary_fields_avg["data"][$i]["avg"]) {
					$page_summary_fields_avg["data"][$i]["avg_field_flag"] = true;
				}  else {
					$page_summary_fields_avg["data"][$i]["default_flag"] = true;
				}
			}
		}
	}
	// min - page summary
	if ($rpt_array['miscellaneous']['type'] == "align") {
		for ($i=0; $i < pre8count($arr_not_group_fields); $i++) {
			$page_summary_fields_min["data"][$i] = $arr_not_group_fields[$i];
			$page_summary_fields_min["data"][$i]['fieldId'] = $i+1;
			if ($i==0) {
				$page_summary_fields_min["data"][$i]["first_field_flag"] = true;
			}
			if ($page_summary_fields_min["data"][$i]["min"]) {
				$page_summary_fields_min["data"][$i]["min_field_flag"] = true;
			}
		}
	} else {
		for ($i=0; $i < pre8count($arr_page_order_fields["data"]); $i++) {
			$page_summary_fields_min["data"][$i] = $arr_page_order_fields["data"][$i];
			$page_summary_fields_min["data"][$i]['fieldId'] = $i+1;
			if ($page_summary_fields_min["data"][$i]["show"]) {
				if ($i==0) {
					$page_summary_fields_min["data"][$i]["first_field_flag"] = true;
				} elseif ($page_summary_fields_min["data"][$i]["min"]) {
					$page_summary_fields_min["data"][$i]["min_field_flag"] = true;
				}  else {
					$page_summary_fields_min["data"][$i]["default_flag"] = true;
				}
			}
		}
	}
	// max - page summary
	if ($rpt_array['miscellaneous']['type'] == "align") {
		for ($i=0; $i < pre8count($arr_not_group_fields); $i++) {
			$page_summary_fields_max["data"][$i] = $arr_not_group_fields[$i];
			$page_summary_fields_max["data"][$i]['fieldId'] = $i+1;
			if ($i==0) {
				$page_summary_fields_max["data"][$i]["first_field_flag"] = true;
			}
			if ($page_summary_fields_max["data"][$i]["max"]) {
				$page_summary_fields_max["data"][$i]["max_field_flag"] = true;
			}
		}
	} else {
		for ($i=0; $i < pre8count($arr_page_order_fields["data"]); $i++) {
			$page_summary_fields_max["data"][$i] = $arr_page_order_fields["data"][$i];
			$page_summary_fields_max["data"][$i]['fieldId'] = $i+1;
			if ($page_summary_fields_max["data"][$i]["show"]) {
				if ($i==0) {
					$page_summary_fields_max["data"][$i]["first_field_flag"] = true;
				} elseif ($page_summary_fields_max["data"][$i]["max"]) {
					$page_summary_fields_max["data"][$i]["max_field_flag"] = true;
				}  else {
					$page_summary_fields_max["data"][$i]["default_flag"] = true;
				}
			}
		}
	}
	$xt->assignbyref("page_summary_fields_sum", $page_summary_fields_sum);
	$xt->assignbyref("page_summary_fields_avg", $page_summary_fields_avg);
	$xt->assignbyref("page_summary_fields_min", $page_summary_fields_min);
	$xt->assignbyref("page_summary_fields_max", $page_summary_fields_max);
	/*end this part*/

	$grid_row["data"]= &$rowinfo;
}
else
{
	if(!postvalue("edit"))
	{
		$cross_array = array(
			"tables" => $rpt_array["tables"],
			"group_fields" => $rpt_array["group_fields"],
			"totals" => $rpt_array["totals"],
			"table_type" => $rpt_array["table_type"],
			"wrdb" => is_wr_db(),
			"arrDBFieldsList" => $arrDBFieldsList
		);
		
		if( is_wr_project() ) {
			$cross_array["sort_fields"] = $rpt_array['sort_fields'];
		}
			
		$crosstableObj = new CrossTableWebReport( $cross_array, $strSQL );
	
		if(postvalue("crosstable_refresh"))
		{
			$crosstableObj->ajax_refresh_crosstable( GetTableLink("dreport", "", "rname=".postvalue("rname")) );
			exit();
		}
		$xt->assign("select_group_x","<select id=select_group_x onchange=\"refresh_group('".postvalue("rname")."', '".$reportFilename."');\">".$crosstableObj->getGroupFields("x")."</select>");
		$xt->assign("select_group_y","<select id=select_group_y onchange=\"refresh_group('".postvalue("rname")."', '".$reportFilename."');\">".$crosstableObj->getGroupFields("y")."</select>");
		$grid_row["data"] = $crosstableObj->getCrossTableData();
		$arr_res = $crosstableObj->getValuesControl();
		$res = $arr_res[0];
		$first_field = $arr_res[1];
		if($res)
		{
			$xt->assign("data_value" ,true);
			$xt->assign("select_data", "<select name=select_data id=select_data onchange=\"refresh_crosstable('".$reportFilename."?rname=".postvalue("rname")."');return false;\">".$res."</select>");
			$xt->assign("group_func", $crosstableObj->getRadioGroupFunctions( $reportFilename."?rname=".postvalue("rname") ));

			$group_func = $crosstableObj->getTotalsName( $crosstableObj->getCurrentGroupFunction() );
			$xt->assign("totals", $group_func);
		}
		if( $grid_row["data"] )
		{
			$xt->assign("grid_row",$grid_row);
			$xt->assignbyref("group_header",$crosstableObj->getCrossTableHeader());
			$sum_x=$rpt_array["group_fields"][pre8count($rpt_array["group_fields"])-1]["sum_x"];
			$sum_y=$rpt_array["group_fields"][pre8count($rpt_array["group_fields"])-1]["sum_y"];
			if($sum_y)
				$xt->assign("td_row_summary",true);
			if($sum_x)
				$xt->assign("td_col_summary",true);
			if($sum_x && $sum_y)
				$xt->assign("td_total_summary",true);
			$xt->assignbyref("col_summary",$crosstableObj->getCrossTableSummary());
			$xt->assignbyref("total_summary",$crosstableObj->getTotalSummary());
		}
	}
}

	$xt->assign("grid_block", true);
if( $grid_row["data"] )
{
	$xt->assign("data_block", true);
	$xt->assignbyref("grid_row",$grid_row);
	$xt->assign("records_display_block", true);
}
else
{
	$xt->assign("message_block", true);
	$xt->assign("message","No results found.");
}
$xt->assign("top_menu_block", true);
$strSQL=$_SESSION[$sessPrefix."_sql"];

$preview="";

if($cross_table=="true" && $modePrint)
	$xt->assign("report_cross_header",$crosstableObj->getPrintCrossHeader());

if ($rpt_array['miscellaneous']['print_friendly'])
	$xt->assign( "print_friendly_block", true );
if (testAdvSearch($rpt_array['tables'][0]))
	$xt->assign( "adv_search_block", true);

$reportName = "";
if(postvalue('rname'))
	$reportName = runner_htmlspecialchars(postvalue('rname'));
else
	$reportName = runner_htmlspecialchars(@$_SESSION['webreports']['settings']['name']);
$xt->assign("reportName", $reportName);

if(postvalue("q"))
	$xt->assign("searchClause","&q=".postvalue("q"));
$xt->assign( "reportNamejs", jsreplace( postvalue( 'rname' ) ) );
$xt->assign( "reportTitle", runner_htmlspecialchars( $rpt_array['settings']['title'] ) );
$xt->assign( "shortTableName", runner_htmlspecialchars( $rpt_array['short_table_name'] ) );
$xt->assign( "shortTableNamejs", jsreplace( $rpt_array['short_table_name'] ) );

$searchType = (!is_wr_project()) ? GetTableLink("dsearch") : GetTableLink(runner_htmlspecialchars($rpt_array['short_table_name']), "search");
$xt->assign("searchHref", "href='".$searchType."?rname=".$reportName."'");

$xt->assign( "ext", "php" );

if(postvalue("param")=="preview")
	$preview="_preview";

switch ( $rpt_array['miscellaneous']['type'] ) {
	case "stepped" :
	$templatefile = GetTemplateName("", "dreport".$preview);
	break;
	case "block" :
	$templatefile = GetTemplateName("", "dreport1".$preview);
	break;
	case "outline" :
	$templatefile = GetTemplateName("", "dreport2".$preview);
	break;
	case "align" :
	$templatefile = GetTemplateName("", "dreport3".$preview);
	break;
	case "tabular" :
	$templatefile = GetTemplateName("", "dreport6".$preview);
	break;
	default :
	$templatefile = GetTemplateName("", "dreport".$preview);
	break;
}

if($cross_table=="true")
	if(postvalue("edit"))
		$templatefile = GetTemplateName("", "dreport5_style");
	else
		$templatefile = GetTemplateName("", "dreport5".$preview);


if($modePrint)
	$templatefile= str_replace("report","print",$templatefile);



if($modePrint)
{
	if (@$_REQUEST["format"])
	{
		$xt->assign("stylesheetlink",false);
	}
	else
	{
		$xt->assign("stylesheetlink",true);
	}
}
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);

$xt->assign("excellink_attrs", "id=export_to_excel");
$xt->assign("wordlink_attrs", "id=export_to_word");
$xt->assign("advButton_attrs", "id=advButton");

if(@$_REQUEST["format"]=="excel" || @$_REQUEST["format"]=="word")
	$xt->assign("style_block", false);
else
	$xt->assign("style_block", true);
$xt->assign("bottom_pagination_block", true);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("editor_style_block", false);
$xt->assign("editor_block", false);

if($_SESSION["back_to_menu"])
	$xt->assign("back_to_menu", true);
else
	$xt->assign("back_to_menu", false);


if(!$editmode)
{
	$xt->display($templatefile);
}
else
{
	$xt->assign("bottom_pagination_block", false);
	$xt->assign("records_display_block", false);
	$xt->assign("top_menu_block", false);

	$xt->assign("editor_style_block", true);
	$xt->assign("editor_block", true);
		$xt->assign("legend_disp",true);

	$xt->display($templatefile);
}

function GetGroupStart($field,$value) {
	global $rpt_array,$tbl,$fields_type;
	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ )
	{
		$arr = $rpt_array['group_fields'][$i];
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $arr['name'] == fldname($fld) )
			{
				if(!is_wr_custom())
					$ftype=WRGetFieldType($fld['table'].".".$fld['name']);
				else
					$ftype=$fields_type[$fld['name']];
				if ( $field == $arr['name'] )
				{
					if ( $arr['int_type'] == 0 ) {
						return $value;
					} elseif ( IsNumberType($ftype) ) {
						return $value-($value%$arr['int_type']);
					} elseif ( IsCharType( $ftype ) ) {
						return substr($value,0,$arr['int_type']);
					} elseif ( IsDateFieldType( $ftype ) ) {
						$tm = db2time($value);
						if( !$tm )
							return "";
						if ( $arr['int_type'] == 1 ) { // DATE_INTERVAL_YEAR
							return $tm[0];
						} elseif ( $arr['int_type'] == 2 ) { // DATE_INTERVAL_QUARTER
							return $tm[0]*4+floor($tm[1]/3);
						} elseif ( $arr['int_type'] == 3 ) { // DATE_INTERVAL_MONTH
							return $tm[0]*12+$tm[1];
						} elseif ( $arr['int_type'] == 4 ) { // DATE_INTERVAL_WEEK
							return getweeknumber($tm);
						} elseif ( $arr['int_type'] == 5 ) { // DATE_INTERVAL_DAY
							return ($tm[0]*12+$tm[1])*31+$tm[2];
						} elseif ( $arr['int_type'] == 6 ) { // DATE_INTERVAL_HOUR
							return (($tm[0]*12+$tm[1])*31+$tm[2])*24+$tm[3];
						} elseif ( $arr['int_type'] == 7 ) { // DATE_INTERVAL_MINUTE
							return ((($tm[0]*12+$tm[1])*31+$tm[2])*24+$tm[3])*60+$tm[4];
						} else {
							return $value;
						}
					}
				}
			}
		}
	}
}

function GetGroupDisplay($field,$value) {
	global $locale_info, $rpt_array, $tbl,$fields_type;
	for ( $i=0; $i < pre8count($rpt_array['group_fields'])-1; $i++ ) {
		$arr = $rpt_array['group_fields'][$i];
		foreach ( $rpt_array['totals'] as $fld )
		{
			if ( $arr['name'] == fldname($fld) )
			{
				if(!is_wr_custom())
					$ftype=WRGetFieldType($fld['table'].".".$fld['name']);
				else
					$ftype=$fields_type[$fld['name']];
				if ( $field == $arr['name'] )
				{
					if ( $arr['int_type'] == 0 ) {
						$prefix="";
						if (!is_wr_db())
							$prefix=$rpt_array["tables"][0]."_";
						else
							$field=GoodFieldName($field);
						if($rpt_array['totals'][$prefix.$field]['curr']=="true")
							return str_format_currency($value);
						else
							return $value;
					} elseif ( IsNumberType( $ftype ) ) {
						$start=$value-($value%$arr['int_type']);
						$end=$start+$arr['int_type'];
						$prefix="";
						if (!is_wr_db())
							$prefix=$rpt_array["tables"][0]."_";
						else
							$field=GoodFieldName($field);
						if($rpt_array['totals'][$prefix.$field]['curr']=="true")
							return str_format_currency($start)." - ".str_format_currency($end);
						else
							return $start." - ".$end;
					} elseif ( IsCharType( $ftype ) ) {
						return substr($value,0,$arr['int_type']);
					} elseif ( IsDateFieldType( $ftype ) ) {
						$tm = db2time($value);
						if( !$tm )
							return "";
						if ( $arr['int_type'] == 1 ) { // DATE_INTERVAL_YEAR
							return $tm[0];
						} elseif ( $arr['int_type'] == 2 ) { // DATE_INTERVAL_QUARTER
							return $tm[0]."/Q".floor(($tm[1]-1)/4+1);
						} elseif ( $arr['int_type'] == 3 ) { // DATE_INTERVAL_MONTH
							return @$locale_info["LOCALE_SABBREVMONTHNAME".$tm[1]]." ".$tm[0];
						} elseif ( $arr['int_type'] == 4 ) { // DATE_INTERVAL_WEEK
							$start = getweekstart($tm);
							$end = adddays($start,6);
							return format_shortdate($start)." - ".format_shortdate($end);
						} elseif ( $arr['int_type'] == 5 ) { // DATE_INTERVAL_DAY
							return format_shortdate($tm);
						} elseif ( $arr['int_type'] == 6 ) { // DATE_INTERVAL_HOUR
							$tm[4]=0;
							$tm[5]=0;
							return str_format_datetime($tm);
						} elseif ( $arr['int_type'] == 7 ) { // DATE_INTERVAL_MINUTE
							$tm[5]=0;
							return str_format_datetime($tm);
						} else {
							return str_format_datetime($tm);
						}
					}
				}
			}
		}
	}
}

function testAgr( $array, $avg="", $min="", $max="", $sum="" ) {
	$cnt = 0;

	foreach ( $array as $arr ) {
		if ( $avg == "" && $min == "" && $max == "" && $sum == "" ) {
			$cnt += ( $arr["show"] ) ? 1 : 0;
		} elseif ( $avg == "" && $min == "" && $sum == "" ) {
			$cnt += ( $arr["show"] && $arr["max"] ) ? 1 : 0;
		} elseif ( $avg == "" && $max == "" && $sum == "" ) {
			$cnt += ( $arr["show"] && $arr["min"] ) ? 1 : 0;
		} elseif ( $max == "" && $min == "" && $sum == "" ) {
			$cnt += ( $arr["show"] && $arr["avg"] ) ? 1 : 0;
		}  elseif ( $avg == "" && $min == "" && $max == "" ) {
			$cnt += ( $arr["show"] && $arr["sum"] ) ? 1 : 0;
		} elseif ( $avg == "" && $min == "" ) {
			$cnt += ( $arr["show"] && ( $arr["max"] || $arr["sum"] ) ) ? 1 : 0;
		} elseif ( $min == "" && $max == "" ) {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["sum"] ) ) ? 1 : 0;
		}  elseif ( $max == "" && $sum == "" ) {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["min"] ) ) ? 1 : 0;
		} elseif ( $avg == "" && $sum == "" ) {
			$cnt += ( $arr["show"] && ( $arr["min"] || $arr["max"] ) ) ? 1 : 0;
		} elseif ( $avg == "" && $max == "" ) {
			$cnt += ( $arr["show"] && ( $arr["min"] || $arr["sum"] ) ) ? 1 : 0;
		} elseif ( $sum == "" && $min == "" ) {
			$cnt += ( $arr["show"] && ( $arr["max"] || $arr["avg"] ) ) ? 1 : 0;
		} elseif ( $avg == "" ) {
			$cnt += ( $arr["show"] && ( $arr["min"] || $arr["max"] || $arr["sum"] ) ) ? 1 : 0;
		} elseif ( $min == "" ) {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["max"] || $arr["sum"] ) ) ? 1 : 0;
		} elseif ( $max == "" ) {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["min"] || $arr["sum"] ) ) ? 1 : 0;
		} elseif ( $sum == "" ) {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["min"] || $arr["max"] ) ) ? 1 : 0;
		} else {
			$cnt += ( $arr["show"] && ( $arr["avg"] || $arr["min"] || $arr["max"] ) ) ? 1 : 0;
		}
	}

	return $cnt;
}

function debug($val) {
	if (is_array($val)) {
		print_r($val);
	} else {
		echo $val."\n";
	}
}

function fldname(&$fld)
{
	global $rpt_array;
	if(is_wr_db())
		return $fld["table"].".".$fld["name"];
	else
		return $fld["name"];
}

function gfldname(&$fld)
{
	global $rpt_array;
	if(is_wr_db())
		return GoodFieldName(fldname($fld));
	return fldname($fld);
}


function db_fld_value(&$data,$field)
{
	global $rpt_array;
	if(is_wr_db())
		return $data[GoodFieldName($field)];
	return $data[$field];
}

function getDBFieldName($name)
{
	global $arrDBFieldsList;
	if(!is_wr_db())
		return $name;
	else
		return $arrDBFieldsList[GoodFieldName($name)];
}
?>