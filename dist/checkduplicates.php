<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$shortTableName = postvalue("tableName");
$table = GetTableByShort( $shortTableName );
if( !$table )
	exit(0);

$pageType = postvalue("pageType");
$pageName = postvalue("page");
$fieldName = postvalue("fieldName");
$fieldControlType = postvalue("fieldControlType");
$value = postvalue("value");

if( !Security::userHasFieldPermissions( $table, $fieldName, $pageType, $pageName, true ) )
	return;

$pSet = new ProjectSettings( $table, $pageType );
$denyChecking = $pSet->allowDuplicateValues( $fieldName );

$regEmailMode = false;
$regUsernameMode = false;
$userNameField = Security::usernameField();
if( Security::registerPage() && $table == Security::loginDataSource() ) {
	$regEmailMode = $fieldName == Security::emailField();
	$regUsernameMode = $fieldName == $userNameField;
	$denyChecking = $denyChecking && $fieldName != $userNameField && $fieldName != Security::emailField();
}

if( $denyChecking ) {
	$returnJSON = array( "success" => false, "error" => "Duplicated values are allowed" );
	echo printJSON( $returnJSON) ;
	return;
}

// set db connection
$_connection = $cman->byTable( $table );
$dataSource = getDataSource( $table, $pSet, $_connection );
$dc = new DsCommand();

$dc->totals = array();
$dc->totals[] = array(
	"total" => "count",
	"alias" => "count_".$fieldName,
	"field" => $fieldName,
);

$dc->filter = DataCondition::FieldEquals( $fieldName, $value, 0, dsCASE_DEFAULT ); 

// emails should always be compared case-insensitively
if( $regEmailMode ) {
	$dc->filter = DataCondition::FieldEquals( $fieldName, $value, 0, dsCASE_INSENSITIVE ); 
}
// username on register page
if( $regUsernameMode ) {
	$where = $_connection->comparisonSQL( $fieldSQL, $value, Security::caseInsensitiveUsername() );
	$dc->filter = DataCondition::FieldEquals( $fieldName, $value, 0, 
		Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT );
}

$qResult = $dataSource->getTotals( $dc );
if( !$qResult ) {
	$returnJSON = array( "success" => false, "error" => "Error: Wrong SQL query" );
	echo printJSON( $returnJSON );
	return;
}

$hasDuplicates = false;
$data = $qResult->fetchAssoc();
if( $data )
	$hasDuplicates = $data[ "count_".$fieldName ] ? true : false;

$returnJSON = array( "success" => true, "hasDuplicates" => $hasDuplicates, "error" => "" );	
echo printJSON( $returnJSON );
return;
?>