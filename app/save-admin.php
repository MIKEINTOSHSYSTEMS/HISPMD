<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
include("include/reportfunctions.php");


//	CSRF protection
if( !isPostRequest() )
	return;

if(postvalue("name")=="password")
{
	if(DecodeUTF8(postvalue("password"))==$WRAdminPagePassword)
	{
		$_SESSION["WRAdmin"]=true;
		echo "OK";
	}
	else
	{
		unset($_SESSION["WRAdmin"]);
		echo "ERROR";
	}
	exit();
}

if(!isWRAdmin())
{
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: ".GetTableLink("webreport", "", "message=expired"));
	return;
}

// #9875 It's expected that webreport_sql, webreport_admin tables belong to the same db connection
$_connection = $cman->getForWebReports();

if(postvalue("name")=="deletesql")
{
	if( postvalue("idsql") )
		$_connection->exec("delete from ".$_connection->addTableWrappers("webreport_sql")."  where ".$_connection->addFieldWrappers("id")."=".postvalue("idsql"));
	echo "OK";
	exit();
}

if(postvalue("name")=="sqledit")
{
	$errstr = "";
	$sqlcontent=postvalue("sqlcontent");
	$_SESSION["object_sql"]=$sqlcontent;
	$qResult=$_connection->query($sqlcontent);
	$rs = $qResult->fetchAssoc();
	if(!$rs)
	{
		echo $errstr;
		exit();
	}
	if($_SESSION["idSQL"])
	{
		$_connection->exec("update ".$_connection->addTableWrappers("webreport_sql")
			." set ".$_connection->addFieldWrappers("sqlname")."=".$_connection->prepareString( DecodeUTF8(postvalue("namesql") ))
			.",".$_connection->addFieldWrappers("sqlcontent")."=".$_connection->prepareString( $sqlcontent )
			." where ".$_connection->addFieldWrappers("id")."=".$_SESSION["idSQL"]);
			
		$_connection->exec("update ".$_connection->addTableWrappers("webreport_admin")
			." set ".$_connection->addFieldWrappers("tablename")."=".$_connection->prepareString( DecodeUTF8(postvalue("namesql")) )
			." where ".$_connection->addFieldWrappers("tablename")."=".$_connection->prepareString( $_SESSION["nameSQL"] ));
		
		$_SESSION["nameSQL"] = DecodeUTF8(postvalue("namesql"));
	}
	else
	{
		$sname=DecodeUTF8(postvalue("namesql"));
		$prefix=0;
		while(true)
		{
			if($prefix > 0)
				$sname = DecodeUTF8(postvalue("namesql"))."_".$prefix;
			
			$sql = "select count(*) from ".$_connection->addTableWrappers("webreport_sql")
				." where ".$_connection->addFieldWrappers("sqlname")."=".$_connection->prepareString( $sname );
				
			$data = $_connection->query( $sql )->fetchNumeric();
			if( $data[0] > 0 )
				$prefix++;
			else
				break;
		}
		
		$_connection->exec("insert into ".$_connection->addTableWrappers("webreport_sql")." (".$_connection->addFieldWrappers("sqlname")
			.",".$_connection->addFieldWrappers("sqlcontent").") values (".$_connection->prepareString($sname).",".$_connection->prepareString($sqlcontent).")");
		
		$_connection->exec("insert into ".$_connection->addTableWrappers("webreport_admin")." (".$_connection->addFieldWrappers("tablename")
			.",".$_connection->addFieldWrappers("db_type").",".$_connection->addFieldWrappers("group_name").")"
			." values (".$_connection->prepareString($sname).",'custom',".$_connection->prepareString( Security::getUserName() ).")");
		
		$sql = "select ".$_connection->addFieldWrappers("id")." from ".$_connection->addTableWrappers("webreport_sql")
			." where ".$_connection->addFieldWrappers("sqlname")."=".$_connection->prepareString($sname);
		
		$data = $_connection->query( $sql )->fetchNumeric();
		$_SESSION["idSQL"] = $data[0];
	}
	echo "OK";
	exit();
}
if(postvalue("name")=="viewsql")
{

	$arr=array();
	$arr=array(0,"",postvalue("output"));
	$customSQL=$arr[2];
	$_SESSION["customSQL"]=$customSQL;
	$_SESSION["idSQL"]=$arr[0];
	$_SESSION["nameSQL"]=$arr[1];
	$_SESSION["object_sql"]=$customSQL;
	echo $customSQL;
	exit();
}
if(postvalue("name")=="getcustomsql")
{
	$arr=array();
	$arr=WRgetCurrentCustomSQL(postvalue("output"));
	$customSQL=$arr[2];
	$_SESSION["customSQL"]=$customSQL;
	$_SESSION["idSQL"]=$arr[0];
	$_SESSION["nameSQL"]=$arr[1];
	$_SESSION["object_sql"]=$customSQL;
	echo $customSQL;
	exit();
}

$arr = my_json_decode(DecodeUTF8(postvalue("output")));
$_connection->exec("delete from ".$_connection->addTableWrappers("webreport_admin"));
foreach($arr as $val)
{
	$_connection->exec("insert into ".$_connection->addTableWrappers("webreport_admin")
		." (".$_connection->addFieldWrappers("tablename").",".$_connection->addFieldWrappers("db_type").",".$_connection->addFieldWrappers("group_name").")"
		." values (".$_connection->prepareString($val["table"]).",'".$val["db_type"]."',".$_connection->prepareString($val["group"]).")");
}
echo "OK";
?>