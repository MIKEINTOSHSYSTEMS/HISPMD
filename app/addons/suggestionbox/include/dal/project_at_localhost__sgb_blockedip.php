<?php
$dalTablesgb_blockedip = array();
$dalTablesgb_blockedip["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesgb_blockedip["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablesgb_blockedip["blocked_date"] = array("type"=>135,"varname"=>"blocked_date", "name" => "blocked_date", "autoInc" => "0");
$dalTablesgb_blockedip["id"]["key"]=true;

$dal_info["project_at_localhost__sgb_blockedip"] = &$dalTablesgb_blockedip;
?>