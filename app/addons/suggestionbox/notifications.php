<?php
// return new notifications

@ini_set("display_errors","1");
//	don't read permissions from the database, use version saved in session
$gReadPermissions = false;
require_once( "include/dbcommon.php" );
require_once( getabspath( "classes/notifications.php" ) );

$lastId = postvalue_number("lastId");
$lastRead = postvalue_number("lastRead");

$noti = new RunnerNotifications( getNotificationSettings() );
if( !$noti->enabled ) {
	exit();
}

if( $lastRead ) {
	$noti->updateLastRead( $lastRead );
}

$messages = $noti->getUpdates( $lastId );
echo runner_json_encode( array(
	"messages" => $messages,
	"time" => now()
) );
exit();
?>