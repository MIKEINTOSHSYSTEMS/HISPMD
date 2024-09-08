<?php
@ini_set("display_errors","1");
$restApiCall = true;

require_once("../include/dbcommon.php");
add_nocache_headers();

require_once(getabspath( "api/api.php"));

if( !GetGlobalData("restCreate") ) {
	return;
}

header("Content-Type: application/json");

if( !API::login() ) {
	API::sendError( 'Access denied', 401 );
}

//	dont' remember anything
session_destroy();

$table = findTable( postvalue("table") );
if( !$table ) {
	API::sendError( 'Unknown table name', 403 );
}

$pSet = new ProjectSettings( $table );
$eventsObject = &getEventObject( $table );
$cipherer = new RunnerCipherer( $table, $pSet );

$action = postvalue("action");

if( $action === "list" ) {
	if( !$pSet->pageTypeAvailable("list") ) {
		API::sendError( "operation not supported" );
	}
	if( !Security::userCan( "S", $table ) ) {
		API::sendError( "operation not allowed" );
	}
	$dataSource = getDataSource( $table, $pSet );
	$srchObj = SearchClause::getSearchObject( $table );

	$dc = new DsCommand();
	$dc->filter = DataCondition::_And( array( 
		Security::SelectCondition( "S", $pSet ),
		$srchObj->getSearchDataCondition()
	));
	
	if( postvalue( "skip" ) ) {
		$dc->startRecord = (int)postvalue( "skip" );
	}
	if( postvalue( "records" ) ) {
		$dc->reccount = (int)postvalue( "records" );
	} else {
		$dc->reccount = 200;
	}
	$rs = $dataSource->getList( $dc );
	if( !$rs ) {
		API::sendError( $dataSource->lastError() );
	}
	API::sendResponse( true, array("data" => API::readResult( $rs, $dc->reccount ) ) );
}

if( $action === "view" ) {
	if( !$pSet->pageTypeAvailable("view") ) {
		API::sendError( "operation not supported" );
	}
	if( !Security::userCan( "S", $table ) ) {
		API::sendError( "operation not allowed" );
	}
	$dataSource = getDataSource( $table, $pSet );
	$dc = new DsCommand();
	$dc->keys = API::keysFromRequest( $pSet );
	$dc->filter = Security::SelectCondition( "S", $pSet );
	$rs = $dataSource->getSingle( $dc );
	if( !$rs ) {
		API::sendError( $dataSource->lastError() );
	}
	API::sendResponse( true, array("data" => $rs->fetchAssoc() ) );
}

if( $action === "update" ) {
	if( !$pSet->pageTypeAvailable("edit") ) {
		API::sendError( "operation not supported" );
	}
	if( !Security::userCan( "E", $table ) ) {
		API::sendError( "operation not allowed" );
	}

	$dataSource = getDataSource( $table, $pSet );

	$oldKeys = API::keysFromRequest( $pSet );
	$newRecordData = API::valuesFromRequest( $pSet );

	$oldRecordData = null;
	if( $eventsObject->exists("BeforeEdit") || $eventsObject->exists("AfterEdit") ) {
		$dc = new DsCommand();
		$dc->filter = Security::SelectCondition( "E", $pSet );
		$dc->keys = $oldKeys;
		$fetchedArray = $dataSource->getSingle( $dc )->fetchAssoc();
		$oldRecordData = $cipherer->DecryptFetchedArray( $fetchedArray );
	}

	if( $eventsObject->exists("BeforeEdit") ) {
		$usermessage = "";
		$keyWhereClause = KeyWhere( $oldKeys, $table );
		$pageObj = null;

		$beforeEdit = $eventsObject->BeforeEdit( $newRecordData,
			$keyWhereClause,
			$oldRecordData,
			$oldKeys,
			$usermessage,
			false,
			$pageObj );

		if( !$beforeEdit ) {
			API::sendResponse( false, array( "success" => false, "error" => $usermessage ) );
		}
	}

	$dc = new DsCommand();
	$dc->keys = $oldKeys;
	$dc->filter = Security::SelectCondition( "E", $pSet );
	$dc->values = $newRecordData;
	$ret = $dataSource->updateSingle( $dc );

	if( $ret && $eventsObject->exists("AfterEdit") ) {
		$keys = $oldKeys;
		foreach( $newRecordData as $f => $v ) {
			if( isset( $keys[ $f ] ) ) {
				$keys[ $f ] = $v;
			}
		}

		$keyWhereClause = KeyWhere( $keys, $table );
		$pageObj = null;

		$eventsObject->AfterEdit( $newRecordData,
			$keyWhereClause,
			$oldRecordData,
			$keys,
			false,
			$pageObj );
	}

	if( $ret ) {
		API::sendResponse( true, array( "success" => true ) );
	} else {
		API::sendResponse( false, array( "success" => false, "error" => $dataSource->lastError() ) );
	}
	API::sendResponse( $ret["success"], $ret );
}

if( $action === "insert" ) {
	if( !$pSet->pageTypeAvailable("add") ) {
		API::sendError( "operation not supported" );
	}

	if( !Security::userCan( "A", $table ) ) {
		API::sendError( "operation not allowed" );
	}

	$newRecordData = API::valuesFromRequest( $pSet );

	if( $eventsObject->exists("BeforeAdd") ) {
		$usermessage = "";
		$pageObj = null;
		if( !$eventsObject->BeforeAdd( $newRecordData, $usermessage, false, $pageObj ) ) {
			API::sendResponse( false, array( "success" => false, "error" => $usermessage ) );
		}
	}

	$dataSource = getDataSource( $table, $pSet );
	$dc = new DsCommand();
	$dc->values = $newRecordData;
	$ret = $dataSource->insertSingle( $dc );

	if( $ret && $eventsObject->exists("AfterAdd") ) {
		$pageObj = null;
		$newRecordData = $ret;
		$keys = array();
		foreach( $pSet->getTableKeys() as $kf ) {
			$keys[ $kf ] = $newRecordData[ $kf ];
		}

		$eventsObject->AfterAdd( $newRecordData, $keys, false, $pageObj );
	}

	if( $ret !== false ) {
		API::sendResponse( true, array( "success" => true, "data" => $ret ) );
	} else {
		API::sendResponse( false, array( "success" => false, "error" => $dataSource->lastError() ) );
	}
}

if( $action === "delete" ) {
	if( !$pSet->pageTypeAvailable("list") ) {
		API::sendError( "operation not supported" );
	}
	if( !Security::userCan( "D", $table ) ) {
		API::sendError( "operation not allowed" );
	}

	$dataSource = getDataSource( $table, $pSet );
	$dc = new DsCommand();
	$dc->keys = API::keysFromRequest( $pSet );
	$dc->filter = Security::SelectCondition( "D", $pSet );

	$whereClause = "";
	$deletedValues = array();
	if( $eventsObject->exists("BeforeDelete") || $eventsObject->exists("AfterDelete") ) {
		$deletedResult = $dataSource->getSingle( $dc );
		if( $deletedResult )
			$deletedValues = $cipherer->DecryptFetchedArray( $deletedResult->fetchAssoc() );

		$whereClause = KeyWhere( $dc->keys, $table );
	}

	if( $eventsObject->exists("BeforeDelete") ) {
		$userMessage = "";
		$pageObj = null;
		if( !$eventsObject->BeforeDelete( $whereClause, $deletedValues, $userMessage, $pageObj ) ) {
			API::sendResponse( false, array( "success" => false, "error" => $userMessage ) );
		}
	}

	$ret = $dataSource->deleteSingle( $dc );

	if( $ret && $eventsObject->exists("AfterDelete") ) {
		$userMessage = "";
		$pageObj = null;
		$eventsObject->AfterDelete( $whereClause, $deletedValues, $userMessage, $pageObj );
	}

	if( $ret ) {
		API::sendResponse( true, array( "success" => true ) );
	} else {
		API::sendResponse( false, array( "success" => false, "error" => $dataSource->lastError() ) );
	}
}

API::sendError( "unknown operation" );

