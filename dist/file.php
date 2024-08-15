<?php
// download a file

@ini_set("display_errors","1");
//	don't read permissions from the database, use version saved in session
$gReadPermissions = false;
include_once ("include/dbcommon.php");

$table = postvalue("table");
$field = postvalue("field");
$thumb = postvalue( "thumb" );
$outputAsAttachment = postvalue("nodisp") == 1;

if( postvalue("userpic") ) {
	if( !Security::showUserPic() )
		exit();
	$userData =& Security::currentUserData();
	$userpicField = Security::userpicField() ? Security::userpicField() : "picture";
	
	$value =& $userData[ $userpicField ];
	$ftype = SupposeImageType($value);
	if( !$ftype ) {
		$ftype = "image/png";		
	}
	header("Cache-Control: max-age=0");
	header("Content-Type: ".$ftype);
	echoBinary( $value );
	exit();
}

if ( !GetTableURL($table) ) {
	echo 'unknown table';
	exit();
}

$formStamp = postvalue("fkey");
if( !$formStamp ) {
	// verify security only when formstamp is not used
	// when formstamp is used, RunnerFileHandler::getFileInfo does the access control
	if( !Security::checkFieldAccess( $table, $field, false ) ) {
		echo 'access denied';
		exit();
	}
}

$pSet = new ProjectSettings( $table );

// caching is enabled on purpose, don't uncomment nor delete this.	
// add_nocache_headers();

require_once getabspath('classes/filehandler.php');

$fileHandler = new RunnerFileHandler( $field, $pSet, $formStamp );
$filename = postvalue("file") != "" ? postvalue("file") : postvalue("filename");

$useHttpRange = !postvalue('norange');

$keys = array();
if( !$formStamp ) {
	//	ignore keys when formStamp is specified
	foreach( $pSet->getTableKeys() as $ind => $k ) {
		$keys[ $k ] = postvalue("key".($ind + 1));
	}
}

$fileHandler->showFile( $filename, !!postvalue("thumbnail"), !!postvalue("icon"), $outputAsAttachment, $useHttpRange, $keys );

exit();
?>