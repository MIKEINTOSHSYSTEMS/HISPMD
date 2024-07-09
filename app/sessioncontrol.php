<?php
@ini_set("display_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

if( !Security::hasLogin() ) {
	exit();
}

$sessionControl = getSecurityOption('sessionControl');
if( $sessionControl["keepAlive"] && postvalue("sessionControl") == "keepAlive" ) {
	echo printJSON( array("success" => true ) );
	exit();
}

if( $sessionControl["forceExpire"] && postvalue("sessionControl") == "forceExpire" ) {
	$response = array("success" => true );
	$lastUserActivity = postvalue("lastUserActivity");
	
	if( isset( $_SESSION["lastUserActivity"] ) && $_SESSION["lastUserActivity"] > $lastUserActivity ) {
		// update current
		$lastUserActivity = $_SESSION["lastUserActivity"];
	}	
	$_SESSION["lastUserActivity"] = $lastUserActivity;
	
	/*// client request delay delta
	$invactivityDelta = 15;*/
	$lifeTimeSeconds = $sessionControl["lifeTime"] * 60;
	
	// warn user before n seconds
	$warnBeforeSeconds = postvalue("warnBeforeSeconds");
	$secondsOfInvactivity = time() - $lastUserActivity;
	/*$requestInterval = 60; */
	
	if ( $secondsOfInvactivity >= $lifeTimeSeconds ) {
		//Security::processLogoutRequest();
		$response["logout"] = true;
		unset( $_SESSION["lastUserActivity"] );
	} else if( $sessionControl["warnExpire"] 
		&& $secondsOfInvactivity >= $lifeTimeSeconds - $warnBeforeSeconds  ) {
		// is about to expire
		$response["showExpirePopup"] = true;
		
		//	adjust $_SESSION["lastUserActivity"] so that exactly warnBeforeSeconds left
		$_SESSION["lastUserActivity"] = time() - $lifeTimeSeconds * 60 + $warnBeforeSeconds;
		$response["secondsLeft"] = $warnBeforeSeconds;
	}
	
	echo printJSON( $response );
	exit();	
}
?>