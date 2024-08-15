<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");


include('include/xtempl.php');
$xt = new Xtempl();

$gSettings = null;

$res_head = "";
$res_body = "";
$res_error = "";
if((!is_wr_custom() || !isWRAdmin() || !postvalue("sql")) && postvalue("sql")!="add")
{
	$type     = (postvalue('type') == "webcharts") ? "webcharts" : "webreports";
	$b_includes="<script>";
	$b_includes.='
	$(document).ready(function(){
		$("#sql_button").hide();
		';
		$b_includes.='
		$("#sql_name").hide();
		$("#check_button").hide();
		$("#sql_textarea").attr("readonly","readonly");
	});
	';
	$b_includes.="</script>";
	$xt->assign("b_includes", $b_includes);
	if(is_wr_project()) 
	{
		if($type=="webreports")
			$arr_tables = getReportTablesList();
		else
			$arr_tables = getChartTablesList();
		foreach ($arr_tables as $tbl) 
			include("include/" . GetTableURL($tbl) . "_variables.php");
		$gSettings = new ProjectSettings($arr_tables[0], PAGE_REPORT);
	}
	else 
	{
		global $strTableName;
		$gSettings = new ProjectSettings($strTableName, PAGE_REPORT);
	}

	if(!is_wr_project())
	{
		$sql_query_display = $_SESSION[$type]['sql'].$_SESSION[$type]['where'].$_SESSION[$type]['group_by'].$_SESSION[$type]['order_by'];	
		if(strlen($_SESSION[$type]['sql_preview']))
			$sql_query = $_SESSION[$type]['sql_preview'];
		else
			$sql_query = $_SESSION[$type]['sql'];
			
		if(strlen($_SESSION[$type]['order_by_preview']))
			$order_by = $_SESSION[$type]['order_by_preview'];
		else
			$order_by = $_SESSION[$type]['order_by'];
			
		$sql_query .= $_SESSION[$type]['where'].$_SESSION[$type]['group_by'].$order_by;
		$sql_query_display=$sql_query;
	}
	else
	{
		$gQuery = $gSettings->getSQLQuery();
		$gstrSQL = $gQuery->gSQLWhere("");
		$sql_query = str_replace("select ","\n"."select ",$gstrSQL);
		$sql_query = str_replace(" from ","\n"."from ",$sql_query);
		$sql_query = str_replace(" inner ","\n"."inner ",$sql_query);
		$sql_query = str_replace(" right ","\n"."right ",$sql_query);
		$sql_query = str_replace(" full ","\n"."full ",$sql_query);
		$sql_query = str_replace(" where ","\n"."where ",$sql_query);
		$sql_query = str_replace(" order by ","\n"."order by ",$sql_query);
		$sql_query = str_replace(" group by ","\n"."group by ",$sql_query);
		$sql_query = str_replace("SELECT ","\n"."SELECT ",$sql_query);
		$sql_query = str_replace(" FROM ","\n"."FROM ",$sql_query);
		$sql_query = str_replace(" INNER ","\n"."INNER ",$sql_query);
		$sql_query = str_replace("RIGHT ","\n"."RIGHT ",$sql_query);
		$sql_query = str_replace(" FULL ","\n"."FULL ",$sql_query);
		$sql_query = str_replace(" WHERE ","\n"."WHERE ",$sql_query);
		$sql_query = str_replace(" ORDER BY ","\n"."ORDER BY ",$sql_query);
		$sql_query = str_replace(" GROUP BY ","\n"."GROUP BY ",$sql_query);
		$sql_query_display = $sql_query;
	}


	$xt->assign("sql_query", runner_htmlspecialchars($sql_query_display));
}
else
{
	$_SESSION["webobject"]["table_type"]="custom";
	$page = (postvalue('type') == "webcharts") ? GetTableLink("webchart0") : GetTableLink("webreport0");
	$sql_query_display=$_SESSION["customSQL"];
	$sql_query=$_SESSION["customSQL"];

	if(postvalue("sql")=="add")
	{
		
		// #9875 It's expected that webreport_sql table belongs to the webreport db connection
		$_connection = $cman->getForWebReports();
		
		$sname = "Query";
		$prefix = 0;
		while(true)
		{
			if( $prefix > 0 )
				$sname = "Query_".$prefix;
				
			$sql = "select count(*) from ".$_connection->addTableWrappers("webreport_sql")." where ".$_connection->addFieldWrappers("sqlname")."=".$_connection->prepareString($sname);
			$data = $_connection->query($sql)->fetchNumeric();
			if( $data[0] > 0 ) 
				$prefix++;
			else
				break;
		}
		
		$_SESSION["idSQL"]="";
		$_SESSION["nameSQL"] = $sname;
		$_SESSION["customSQL"] = "";
		$sql_query_display = "";
		$sql_query = "";
	}
	elseif(postvalue("sql")=="makesql")
	{
		$sql_query_display=postvalue("output");
		$sql_query=postvalue("output");
	}
	
	$b_includes="<script>";
	
	$b_includes .= '
	$(document).ready(function(){';
	$b_includes .= alertDialog();
	$b_includes .= '
		$("#cancel_sql").click(function(){
			window.parent.$.fancybox.close();
		});
		$("#save_sql").click(function(){
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-admin").'",
				data: {
					name: "sqledit",
					sqlcontent: $("#sql_textarea").val(),
					namesql: $("#sql_name").val(),
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						window.parent.$.fancybox.close();';
	if(!postvalue("page"))
		$b_includes .= 'if(!$("#go_permiss").attr("checked"))
							window.parent.location.href="'.GetTableLink("webreport_sql").'?name="+$("#sql_name").val();
						else
							window.parent.location.href="'.GetTableLink("webreport_admin").'?username='
							.rawurlencode( Security::getUserName() ).
							'&queryname="+$("#sql_name").val();';
	else
		$b_includes .= 'window.parent.location.href="'.$page.'?sqlname="+$("#sql_name").val();';
	$b_includes .= '} else {
						$("#alert").html("<p>"+msg+"</p>")
						.dialog("option", "buttons", {"OK": function() { $(this).dialog("close");}})
						.dialog("open");
					}
				}
			});
		});
		$("#view_sql").click(function(){
			$("#table-container").html("");
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("web_query").'",
				data: {
					sql: "makesql",
					output: $("#sql_textarea").val(),
					rnd: (new Date().getTime())
				},
				success: function(msg)
				{
					$("#table-container").html(msg);
				}
			});
		});';
	if(postvalue("sql")=="result")
		$b_includes .= '$("#view_sql").click();';
	if(!postvalue("check"))
		$b_includes.='$("#check_button").hide();';		
	$b_includes .= '});';
			
	$b_includes.='$("#sql_button").show();';
	$b_includes.="</script>";
	$xt->assign("b_includes", $b_includes);
	$xt->assign("sql_name", $_SESSION["nameSQL"]);
}
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("sql_query", runner_htmlspecialchars($sql_query_display));
$sql_query_all=$sql_query;
$_SESSION["object_sql"]=$sql_query;

$conn = $cman->getForWebReports();
if(is_wr_project())
	$conn = $cman->byTable($arr_tables[0]);


if(!IsStoredProcedure($sql_query))
{
	if( $conn->dbType == nDATABASE_MSSQLServer )
	{
		$pos=strrpos(strtoupper($sql_query_all),"ORDER BY");
		if($pos)
			$sql_query_all=substr($sql_query_all,0,$pos);
	}
	if($sql_query)
	{
		if( $conn->dbType == nDATABASE_MySQL )
		{
			if(!strpos(strtolower($sql_query)," limit "))
				$sql_query .= " LIMIT 50";
		}
		elseif( $conn->dbType == nDATABASE_MSSQLServer || $conn->dbType == nDATABASE_Access )
		{
			if(!strpos(strtolower($sql_query)," distinct "))
			{
				if(!strpos(strtolower($sql_query)," top "))
					$sql_query = str_replace("SELECT", "SELECT TOP 50", strtoupper($sql_query));
			}
			else
			{
				if(!strpos(strtolower($sql_query)," top "))
					$sql_query = str_replace("SELECT DISTINCT", "SELECT DISTINCT TOP 50", strtoupper($sql_query));
			}
		}
		elseif( $conn->dbType == nDATABASE_Oracle )
		{
			//
		}
		elseif( $conn->dbType == nDATABASE_PostgreSQL )
		{
			//
		}
	}
}
$num_rows=50;
$errstr="";

if($sql_query) {
	$qResult=$conn->query($sql_query);
	$data = $qResult->fetchAssoc();
}

if(!$data || !$sql_query)
{	
	if($conn->dbType==nDATABASE_Oracle && !$sql_query)
		$errstr="Query was empty";
	if(postvalue("sql")!="makesql")
	{
		$xt->assign("sql_error_block", true);
		$xt->assign("sql_error", $errstr);
	}
	else
		$result=$errstr;
}
else
{
	$firstTime=true;
	$i=0;
	$fields_type=array();
	if(is_wr_custom())
		$fields_type=WRGetAllCustomFieldType();
	while($i<$num_rows && $data)
	{
		$i++;

		if ($firstTime) {
			foreach( array_keys($data) as $key ) 
			{
				if(is_wr_project())
				{
					if(IsBinaryType($gSettings->getFieldType($key)))
						continue;
				}
				elseif(is_wr_custom())
				{
					if(IsBinaryType($fields_type[$key]))
						continue;
				}
				if($gSettings)
					$gKey = $gSettings->label($key);
				else
					$gKey = $key;
				
				$res_head .= "<th>" . runner_htmlspecialchars($gKey) . "</th>";		
			}
		}
		$res_body .= '<tr>';
		foreach( $data as $fld=>$val ) 
		{
			if(is_wr_project())
			{
				if(IsBinaryType($gSettings->getFieldType($fld)))
					continue;
			}
			elseif(is_wr_custom())
			{
				if(IsBinaryType($fields_type[$fld]))
					continue;
			}
			elseif(is_array($val))
			{
				$res_body .= '<td><span></span></td>';
				continue;
			}
			$s=$val;
			if(strlen($s)>100)
				$s=substr($s,0,100);
			$res_body .= '<td><span>' . runner_htmlspecialchars($s) . '</span></td>';
		}
		$res_body .= '</tr>';
		$data = $qResult->fetchAssoc();
		$firstTime=false;
	}
	if(!IsStoredProcedure($sql_query_all))
	{
		if($conn->dbType != nDATABASE_Oracle)
			$rs=$conn->query("select count(*) from (".$sql_query_all.") as t")->fetchNumeric();
		else
			$rs=$conn->query("select count(*) from (".$sql_query_all.")")->fetchNumeric();
		$total_rows=0;
		if($data=$rs)
			$total_rows=$data[0];
	}
	if($i>0)
	{
		if(!IsStoredProcedure($sql_query))
		{
			if(postvalue("sql")=="makesql")
			{
				$result="<div><b>".$total_rows."</b> records";
				if($total_rows>50)
					$result.=" (displaying first 50)";
				$result.="</div>";
				$result.="<table class=\"sql_result\" cellpadding=\"1\" cellspacing=\"1\" border=\"0\">";
				$result.="<tr><thead><tr>".$res_head."</tr></thead>";
				$result.="<tbody>".$res_body."</tbody>";
				$result.="</tr></table>";
			}
			else
			{
				$xt->assign("res_head", $res_head);
				$xt->assign("res_body", $res_body);
				$xt->assign("sql_result_block", true);
				$xt->assign("total_count", $total_rows);
				if($total_rows>50)
					$xt->assign("first_rec", true);
			}
		}
		else
		{
			if(postvalue("sql")=="makesql")
			{
				$result="<div>";
				if($i<50)
					$result.="<b>".$i."</b> records";
				else
					$result.="Displaying first 50 records";
				$result.="</div>";
				$result.="<table class=\"sql_result\" cellpadding=\"1\" cellspacing=\"1\" border=\"0\">";
				$result.="<tr><thead><tr>".$res_head."</tr></thead>";
				$result.="<tbody>".$res_body."</tbody>";
				$result.="</tr></table>";
			}
			else
			{
				$total_rows=$i;
				$xt->assign("res_head", $res_head);
				$xt->assign("res_body", $res_body);
				$xt->assign("sql_result_block", true);
				$xt->assign("total_count", $total_rows);
			}
		}
	} 
	else 
	{
			$xt->assign("sql_message_block", true);
			$result="<p>No records to display</p>";
	}
}
if(postvalue("sql")=="makesql")
{
	echo $result;
	exit();
}
else
	$templatefile = GetTemplateName("", "web_query");
$xt->display($templatefile);
?>
