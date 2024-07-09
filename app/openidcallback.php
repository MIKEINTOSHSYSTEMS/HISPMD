<?php
require_once('include/dbcommon.php');

// verify state parameter and get $connId
$state = $_GET['state'];
$openIdStateMap =& storageGet( "openIdStateMap" );

if( $state == "" || !is_array($openIdStateMap) || !$openIdStateMap[ $state ] ) {
	echo "wrong request";
	exit();
}

$plugin = Security::getAuthPlugin( $openIdStateMap[ $state ] );
unset( $openIdStateMap[ $state ] );
if( !$plugin ) {
	echo "Unknown security provider";
	exit();
}

if( !$_GET['code'] ) {
	echo "Unable to authenticate. ";
	echo $_GET['error'];
	echo " ";
	echo $_GET['error_description'];
	exit();
}

$token = $plugin->getIdToken( $_GET['code'] );
if( !$token ) {
	echo "invalid token";
	if ( $globalSettings["showDetailedError"] ) {
		echo "<pre>";
		echo $plugin->getError();
		echo "</pre>";
	} 
}

$loginPageObject = Security::createLoginPageObject();
if( $loginPageObject->LoginWithSP( $plugin, $token ) ) {
	$loginPageObject->redirectAfterSuccessfulLogin();
	exit();
} else {
	echo "unable to login.";
	echo $loginPageObject->message;
}

?>