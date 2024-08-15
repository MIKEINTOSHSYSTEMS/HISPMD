<?php
require_once("include/dbcommon.php");
require_once('classes/menupage.php');


if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() || Security::isGuest() )
{
	return;
}

$duration = 30;
$url =  postvalue( "url" );
if( !$url ) {
	return;
}

if( strpos( $url , "://" ) !== false ) {
	//	absolute url
	$host = hostFromUrl( $url );
} else {
	//	relative url
	$host = projectHost();
}

$payload = array( 
	"username" => Security::getUserName(),
	"host" => $host,
	"external" => true,
	"origin" => projectUrl()
);
$jwt = jwt_encode( $payload, $duration );
if( strpos( $url, '?' ) !== false ) {
	$url .= "&token=" . $jwt;
} else {
	$url .= "?token=" . $jwt;
}
header("Location: " . $url );
?>