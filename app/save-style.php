<?php
/*
 * report_style_id - record ID
 * type - style type ('table', 'field', 'group', 'cell')
 * field - column number
 * group - group number in appropriate with constants
 * repname - report name
 * uniq - unique field
 * style_str - style string
 * styletype - stype of style change
 */
	
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");	
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

//	CSRF protection
if( !isPostRequest() )
	return;

// #9875 It's expected that webreport_style table belongs to the webreport db connection
$_connection = $cman->getForWebReports();

$xml = new xml();

if (!postvalue('str_xml'))
{
	echo "Error: Script didn't get data. Try once again.";
	exit(0);
}

$arr = $xml->xml_to_array(postvalue('str_xml'));

$repname = postvalue('repname');

if ($_POST['str_xml'] == "del_all")
{	
		$strSQL = "DELETE FROM ".$_connection->addTableWrappers("webreport_style")
			." WHERE ".$_connection->addFieldWrappers("repname")."=".$_connection->prepareString($repname);
		$_connection->exec( $strSQL );
		die;	
}
	
$arrayer = array();
foreach ($arr as $key => $style_record)
{
	if ($style_record['type'] == "table")
	{
		$strSQL = "DELETE FROM ".$_connection->addTableWrappers("webreport_style")
			." WHERE (".$_connection->addFieldWrappers("repname")."=".$_connection->prepareString($repname)
			." AND ".$_connection->addFieldWrappers("styletype")."='".$style_record['params']['styleType']."')";
		
		$_connection->exec( $strSQL );
	}
	
	if ($style_record['type'] == "group")
	{
		if ($style_record['params']['groupName'] != 0)
		{
			$strSQL = "DELETE FROM ".$_connection->addTableWrappers("webreport_style")
				." WHERE (".$_connection->addFieldWrappers("group")." = ".(0+$style_record["params"]["groupName"])
				." AND ".$_connection->addFieldWrappers("repname")."=".$_connection->prepareString($repname)
				." AND ".$_connection->addFieldWrappers("styletype")."='".$style_record["params"]["styleType"]
				."' AND (".$_connection->addFieldWrappers("type")."='cell' OR ".$_connection->addFieldWrappers("type")."='group'))";
			
			$_connection->exec( $strSQL );
		}
	
	}
	if ($style_record['type'] == "field")
	{
		$strSQL = "DELETE FROM ".$_connection->addTableWrappers("webreport_style")
			." WHERE (".$_connection->addFieldWrappers("field")." = ".($style_record["params"]["fieldName"]+0)
			." AND ".$_connection->addFieldWrappers("repname")."=".$_connection->prepareString($repname)
			." AND ".$_connection->addFieldWrappers("styletype")."='".$style_record["params"]["styleType"]."' and ".$_connection->addFieldWrappers("type")."='field')";
		
		$_connection->exec( $strSQL );	
	}
	
	if ($style_record['type'] == "cell")
	{
		$style_record['params']['uniq'] = (int)$style_record['params']['uniq'];
		$strSQL = "DELETE FROM ".$_connection->addTableWrappers("webreport_style")
			." WHERE (".$_connection->addFieldWrappers("type")." = '".$style_record["type"]
			."' AND ".$_connection->addFieldWrappers("field")." = ".($style_record["params"]["fieldName"]+0)
			." AND ".$_connection->addFieldWrappers("group")." = ".(0+$style_record["params"]["groupName"])
			." AND ".$_connection->addFieldWrappers("uniq")."=".(int)$style_record["params"]["uniq"]
			." AND ".$_connection->addFieldWrappers("repname")."=".$_connection->prepareString($repname)
			." AND ".$_connection->addFieldWrappers("styletype")."='".$style_record["params"]["styleType"]."')";
		
		$_connection->exec( $strSQL );
	}
	
	$strSQL = "INSERT INTO ".$_connection->addTableWrappers("webreport_style")." (".$_connection->addFieldWrappers("type").",".$_connection->addFieldWrappers("field")
		.",".$_connection->addFieldWrappers("group").",".$_connection->addFieldWrappers("style_str").",".$_connection->addFieldWrappers("uniq")
		.",".$_connection->addFieldWrappers("repname").",".$_connection->addFieldWrappers("styletype").") VALUES ('".$style_record['type']
		."',".$_connection->prepareString($style_record["params"]["fieldName"]).",".$style_record['params']['groupName']
		.",".$_connection->prepareString($style_record['params']['styleStr']).",".$style_record['params']['uniq']
		.",".$_connection->prepareString($repname).",'".$style_record['params']['styleType']."')";
		
	$_connection->exec( $strSQL );
}

echo 'OK';
?>