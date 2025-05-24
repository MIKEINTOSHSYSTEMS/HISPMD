<?php
/*
 * jQuery File Upload Plugin PHP Example 5.7
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

include_once ("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$gReadPermissions = false;

$table = postvalue("table");
$field = postvalue("field");
$thumb = postvalue( "thumb" );
$pageType = postvalue("pageType");
$outputAsAttachment = postvalue("nodisp") != 1;
$pageName = postvalue("page");
$userpicMode = false;

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

if( !$userpicMode ) {
	if ( !GetTableURL($table) ) {
		exit(0);
	}

	$requestAction = $_REQUEST['_action'];
	$showField = $requestAction == "POST" || postvalue("fkey") || $requestAction == "DELETE";
	if( !Security::userHasFieldPermissions( $table, $field, $pageType, $pageName, $showField ) ) {
		exit(0);
	}
}

/*
global $cman;	
$_connection = $cman->byTable( $table );
*/
$pSet = new ProjectSettings($table, $pageType);

add_nocache_headers();

require_once getabspath('classes/filehandler.php');

if( $requestAction == "DELETE" || $requestAction == "POST" ) {
	header('Content-Disposition: inline; filename="files.json"');
	header('X-Content-Type-Options: nosniff');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST');
	header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

}
switch ($requestAction) {
    case 'DELETE':
    	$fileHandler = new RunnerFileHandler( $field, $pSet, postvalue("formStamp") );
		if( postvalue("resetUploadedFiles") ) {
			$success = $fileHandler->resetUplodedFiles();
		} else {
			$success = $fileHandler->delete( postvalue("fileName") );
		}
        header('Content-type: application/json');
        echo my_json_encode($success);
        break;
    case 'POST':
    	$fileHandler = new RunnerFileHandler( $field, $pSet, postvalue("formStamp") );
		if( $fileHandler->directUpload() ) {
			$fileHandler->prepareDirectUpload( runner_json_decode( postvalue("file") )  );
		} else {
			$fileHandler->acceptUpload( uploadFiles( "files" ) );
		}
    	break;
	case 'GET':
    default:
    //	LEGACY use only. This is only to support old custom code which points to mfhandler to display images.
	//	New code uses file.php to show files/images
		$fileHandler = new RunnerFileHandler( $field, $pSet, postvalue("fkey") );
		$filename = postvalue("file") != "" ? postvalue("file") : postvalue("filename");
		
		$useHttpRange = !postvalue('norange');
		
		$keys = array();
		foreach( $pSet->getTableKeys() as $ind => $k ) {
			$keys[ $k ] = postvalue("key".($ind + 1));
		}
		$fileHandler->showFile( $filename, !!postvalue("thumbnail"), !!postvalue("icon"), $outputAsAttachment, $useHttpRange, $keys );
		
}
exit();
?>