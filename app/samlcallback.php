<?php
require_once('include/dbcommon.php');

$samlResponce = postvalue("SAMLResponse");
if( !$samlResponce ) {
	echo "wrong request";
	exit();
}

$samlResponce = base64_decode( $samlResponce );
$provider = Security::getAuthPlugin( "sa" );

$loginPageObject = Security::createLoginPageObject();
if( $loginPageObject->LoginWithSP( $provider, $samlResponce ) ) {
	$loginPageObject->redirectAfterSuccessfulLogin();
}
echo "unable to login.";
echo $loginPageObject->message;

?>