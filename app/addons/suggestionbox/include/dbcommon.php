<?php

$version = explode('.', PHP_VERSION);
if( $version[0] * 10 + $version[1] < 53 ) {
	set_magic_quotes_runtime(0);
}

//	session cookie params
$cookieParams = session_get_cookie_params();
$secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
if( array_key_exists( "secure", $cookieParams ) ) {
	session_set_cookie_params( 0, $cookieParams["path"], $cookieParams["domain"], $secure, true );
} else {
	//	pre-PHP 5.2
	session_set_cookie_params( 0, $cookieParams["path"], $cookieParams["domain"], $secure );
}

//	isolate sessions for projects running on the same site
@session_name( "pqG1SPE2DGH092RPK56CG" );

// Setting the cache limiter to '' will turn off automatic sending of cache headers entirely
@session_cache_limiter("");
@session_start();


//E_STRICT has become a part of E_ALL since php 5.4 only
error_reporting( (E_ALL | E_STRICT) & ~E_STRICT & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

/// include php specific code
//include("timing.php");
include("phpfunctions.php");

$useOldMysqlLib = 0 != 0;

$cCharset = "utf-8";
$cCodepage = 65001;
$cMySQLNames = "utf8";
$gLoadSearchControls = 30;

$bSubqueriesSupported = true;

$projectPath = '';

$regenerateSessionOnLogin = true;

header("Content-Type: text/html; charset=".$cCharset);

// json support
$useUTF8 = "utf-8" == "utf-8";

//	JSON_PARTIAL_OUTPUT_ON_ERROR flag was introduced in PHP 5.5
if( !function_exists('json_encode') || !$useUTF8 || version_compare( PHP_VERSION ,"5.5.0") < 0 )
{
	include_once(getabspath("classes/json.php"));
	$GLOBALS['JSON_OBJECT'] = new Services_JSON(SERVICES_JSON_LOOSE_TYPE, $useUTF8);

    function my_json_encode($value, $json_unescaped_unicode = false){
    	return $GLOBALS['JSON_OBJECT']->encode($value);
    }

    function my_json_decode($value){
        $result = $GLOBALS['JSON_OBJECT']->decode($value);
        if( !$result )
    		return array();
    	else
    		return $result;
	}
}
else
{
	function my_json_encode($value){
		return json_encode($value, JSON_PARTIAL_OUTPUT_ON_ERROR );
    }

    function my_json_decode($value){
        $result = json_decode($value,true);
        if( !$result )
    		return array();
    	else
    		return $result;
	}
}


include("locale.php");
include("events.php");
include("commonfunctions.php");

include("dal.php");
include("appsettings.php");

set_error_handler("runner_error_handler");

$mbEnabled = extension_loaded('mbstring');



function my_json_encode_unescaped_unicode($value)
{
	array_walk_recursive($value, 'json_mb_encode_numericentity');
	return runner_decode_numeric_entity(my_json_encode($value), array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
}

	
		;

?>