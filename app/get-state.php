<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

if ( isset($_POST['type']) && isset( $_POST['web'] ) ) {

    if ( $_POST['type'] == "new" )
    {
        unset( $_SESSION[$_POST['web']] );
		$_SESSION[$_POST['web']] = array();
		$_SESSION[$_POST['web']]['table_type'] = "db";	
        echo "OK";
    }
    elseif ( $_POST['type'] == "open" )
    {
        $xml = new xml();
		$arr=array();
        if ( $_POST['web'] == "webreports" ) {
                        	if (count(GetUserGroups()) > 1)
	            {
        	        $arr_reports = array();
                	$arr_reports = GetReportsList();
	                foreach ( $arr_reports as $rpt ) {
        	            if (( $rpt["owner"] != Security::getUserName()|| $rpt["owner"] == "") && $rpt["view"]==0 && $_SESSION['webreports']['settings']['name']==$rpt["name"])
                	    {
                        	echo "<p>"."You don't have permissions to view this report"."</p>";
	                        exit();
        	            }
                	}
	            }
			$arr=getReportArray($_POST['name']);
			if(!$arr["table_type"])
				if($arr["db_based"])
					$arr["table_type"]="db";
				else
					$arr["table_type"]="project";
            $_SESSION['webreports'] = $arr;
			update_report_totals();
	    $_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
            $_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
        } else {
            	            if (count(GetUserGroups()) > 1)
        	    {
                	$arr_reports = array();
	                $arr_reports = GetChartsList();
        	        foreach ( $arr_reports as $rpt ) {
                	    if (( $rpt["owner"] != Security::getUserName() || $rpt["owner"] == "") && $rpt["view"]==0 && $_SESSION['webcharts']['settings']['name']==$rpt["name"])
                    	{
                        	echo "<p>".""."</p>";
	                        exit();
        	            }
                	}
	            }
			$arr=getChartArray($_POST['name']);
			if(!$arr["table_type"])
				if($arr["db_based"])
					$arr["table_type"]="db";
				else
					$arr["table_type"]="project";
            $_SESSION['webcharts']=$arr;
			$_SESSION['webcharts']=Convert_Old_Chart($_SESSION['webcharts']);
		$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
            $_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
        }

        echo "OK";
    }
	$_SESSION["webobject"]["table_type"]=@$_SESSION[$_POST['web']]['table_type'];
}
?>