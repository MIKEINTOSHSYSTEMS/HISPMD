<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");


$shortTableName = postvalue("table");
$table = GetTableByShort( $shortTableName );
if( !$table )
	exit(0);

$pageName = postvalue("pagename");

$strFilename = postvalue("filename");
$ext = substr( $strFilename, strlen($strFilename) - 4 );
$ctype = getContentTypeByExtension($ext);
$field = postvalue("field");

if( !Security::userHasFieldPermissions( $table, $field, PAGE_LIST, $pageName, false ) )
	return;

$pSet = new ProjectSettings( $table, PAGE_LIST, $pageName );

$_connection = $cman->byTable( $table );

$keys = array();
foreach( $pSet->getTableKeys() as $ind => $k ) {
	$keys[ $k ] = postvalue("key".($ind + 1));
}

$dc = new DsCommand();
$dc->filter = Security::SelectCondition( "S", $pSet );
$dc->keys = $keys;

$dataSource = getDataSource( $table, $pSet, $_connection );
$qResult = $dataSource->getSingle( $dc );
if( !$qResult || !( $data = $qResult->fetchAssoc() ) )
	return;

$value = $_connection->stripSlashesBinary( $data[$field ] );

header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$strFilename."\"");
header("Cache-Control: private");
SendContentLength( strlen_bin($value) );
echoBinary( $value );
return;

?>
