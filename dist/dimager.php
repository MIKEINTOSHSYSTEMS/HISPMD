<?php 
ini_set("display_errors","1");
ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/reportfunctions.php");


//	security - begin


	if(!isLogged() || !postvalue("rname"))
	{ 
		return;
	}

if(!postvalue("rname"))
	return;

$rpt_array = getReportArray(postvalue("rname"));

// if old
if (is_wr_project()) 
	return;

	if ( $rpt_array['settings']['status'] == "private" && $rpt_array['owner'] != Security::getUserName() ) {
		exit();
	}
	if (pre8count(GetUserGroups()) > 1) {
		$arr_reports = array();
		$arr_reports = GetReportsList();
		foreach ( $arr_reports as $rpt ) {
			if (( $rpt["owner"] != Security::getUserName() || $rpt["owner"] == "") && $rpt["view"]==0 && $rpt_array['settings']['name']==$rpt["name"])
			{
				exit();
			}
		}
	}

global $cman;
$defConnection = $cman->getForWebReports();
	
$field="";
$table="";
WRSplitFieldName(postvalue("field"),$table,$field);
//	check if field is allowed to display
$show=false;
foreach($rpt_array["totals"] as $fld)
{
	if($fld["table"]==$table && $fld["name"]==$field)
	{
		if($fld["show"])
			$show=true;
		break;
	}
}
if(!$show)
	exit();

//	security - end

//	construct sql

$keys = DBGetTableKeys($table);
if(!pre8count($keys))
	exit();
$strkeywhere = "";
foreach($keys as $idx=>$k)
{
	if(strlen($strkeywhere))
		$strkeywhere.=" and ";
	$strkeywhere.=$defConnection->addTableWrappers($table).".".$defConnection->addFieldWrappers($k)."=";
	$type=WRGetFieldType($table.".".$k);
	if(NeedQuotes($type))
		$strkeywhere.=db_prepare_string(postvalue("key".($idx+1)));
	else
	{
		$value=postvalue("key".($idx+1));
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
		$strkeywhere.=$value;
	}
}

$strSQL = $rpt_array['sql'] . " WHERE ". $strkeywhere;

$rs = $defConnection->query($strSQL);


if(!$rs || !($data=$rs->fetchAssoc()))
  return DisplayNoImage();


$value=db_stripslashesbinaryAccess($data[postvalue("alias")]);
if(!$value)
{
	return DisplayNoImage();
}

$itype=SupposeImageType($value);
if($itype)
	header("Content-Type: ".$itype);
else
	return DisplayFile();
echoBinary($value);
return;


?>
