<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once( getabspath( "classes/controls/Control.php" ) );
require_once( getabspath( "classes/controls/LookupField.php" ) );
require_once( getabspath( "classes/controls/ViewControlsContainer.php" ) );

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$shortTable = postvalue("table");
$table = GetTableByShort( $shortTable );
if( !$table )
	exit(0);


$pageType = postvalue("pageType");
$pageName = postvalue("page");
$field = postvalue('searchField');

if( !Security::userHasFieldPermissions( $table, $field, $pageType, $pageName, true ) )
	return;

$pSet = new ProjectSettings( $table, $pageType, $pageName );

// if suggest for dashboard search
if( $pSet->getEntityType() == titDASHBOARD )
{
	$dashboard = $table;
	$dashFields = $pSet->getDashboardSearchFields();
    $table = $dashFields[ $field ][0]["table"];
	$field = $dashFields[$field][0]["field"];
	
    $pSet = new ProjectSettings($table, $pageType, $pageName, $dashboard );
}



$cipherer = new RunnerCipherer($table);

$masterTable = postvalue('masterTable');
if ( $masterTable != "" && isset($_SESSION[ $masterTable . "_masterRecordData" ]) )
{
	$contextParams["masterData"] = $_SESSION[ $masterTable . "_masterRecordData" ];
}

$contextParams["data"] = my_json_decode( postvalue('data') );
RunnerContext::push( new RunnerContextItem( $pageType, $contextParams));

$isExistParent = postvalue('isExistParent');
$searchByLinkField = postvalue('searchByLinkField');
$parentCtrlsData = my_json_decode( postvalue('parentCtrlsData') );

$value = postvalue('searchFor');
$values = postvalue('multiselection') ? splitLookupValues($value) : array($value);


$lookupField = "";
if( $pSet->getEditFormat($field) == EDIT_FORMAT_LOOKUP_WIZARD )
{
	$LookupType = $pSet->getLookupType($field);
	if(  $LookupType == LT_LOOKUPTABLE || $LookupType == LT_QUERY )
	{
		$lookupField = $field;
	}
}

if( !$lookupField ) 
{
	$respObj = array('success' => false, 'data' => array());
	echo printJSON($respObj);
	exit();	
}


$lookupTable = $pSet->getLookupTable($lookupField);
$lookupPSet = null;
if( $pSet->getLookupType($field) == LT_QUERY )
	$lookupPSet = new ProjectSettings( $lookupTable );

$linkFieldName = $pSet->getLinkField($lookupField);
$displayFieldName = $pSet->getDisplayField( $field );
$linkAndDisplaySame = $displayFieldName == $linkFieldName;

//	create DsCommand
$dcDisplay = LookupField::makeLookupDataCommand( $field, $pSet, $parentCtrlsData, $value, true, $searchByLinkField, true, $searchByLinkField );
$dc = $dcDisplay["dc"];
$displayFieldAlias = $dcDisplay["displayField"];

$operation = $ajaxSearchStartsWith ? dsopSTART : dsopCONTAIN;
if( !$searchByLinkField ) {
	$displayFieldCondition = $pSet->getCustomDisplay( $field ) 
		? DataCondition::SQLIs( $displayFieldName, $operation, $value )
		: DataCondition::FieldIs( $displayFieldName, $operation, $value );
	
	// add display field filter
	$dc->filter = DataCondition::_And( array( 
		$dc->filter,
		$displayFieldCondition
	) );
} 
$dc->reccount = 200;

$dataSource = getLookupDataSource( $lookupField, $pSet );
$qResult = $dataSource->getList( $dc );
if( !$qResult ) {
	showError( $dataSource->lastError() );
}

$multiselect = $pSet->multiSelect( $lookupField );
$linkField = $pSet->getLinkField( $field );
$response = array();
while( $data = $qResult->fetchAssoc() ) 
{
	if( $LookupType == LT_QUERY && $pSet->isLookupUnique($lookupField) )
	{
		if( !isset($uniqueArray) )
			$uniqueArray = array();
			
		if( in_array($data[ $displayFieldAlias ], $uniqueArray) )
			continue;
		
		$uniqueArray[] = $data[ $displayFieldAlias ];
	}
	
	$data[ $linkField ] = $cipherer->DecryptField($lookupField, $data[ $linkField ]);
	if( $LookupType == LT_QUERY )
		$data[ $displayFieldAlias ] = $cipherer->DecryptField($displayFieldName, $data[ $displayFieldAlias ]);
	
	
	$displayedValue = $data[ $displayFieldAlias ];
	if ( in_array( $pSet->getViewFormat( $lookupField ), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME) ) )
	{			
		$ctrlData = array();
		$ctrlData[ $lookupField ] = $data[ $linkField ];
		$viewContainer = new ViewControlsContainer( $pSet, PAGE_LIST, null );		
		$displayedValue = $viewContainer->getControl( $lookupField )->getTextValue( $ctrlData );
	}		
	
	$response[] = $data[ $linkField ];
	$response[] = $displayedValue;
}

$respObj = array('success' => true, 'data' => array_slice($response, 0, 40));
echo printJSON($respObj);
exit();
?>