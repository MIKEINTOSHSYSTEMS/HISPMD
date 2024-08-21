<?php
$dalTabletimetracker = array();
$dalTabletimetracker["trackerid"] = array("type"=>3,"varname"=>"trackerid", "name" => "trackerid", "autoInc" => "1");
$dalTabletimetracker["pagename"] = array("type"=>200,"varname"=>"pagename", "name" => "pagename", "autoInc" => "0");
$dalTabletimetracker["timeon"] = array("type"=>135,"varname"=>"timeon", "name" => "timeon", "autoInc" => "0");
$dalTabletimetracker["timeoff"] = array("type"=>135,"varname"=>"timeoff", "name" => "timeoff", "autoInc" => "0");
$dalTabletimetracker["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTabletimetracker["recordid"] = array("type"=>200,"varname"=>"recordid", "name" => "recordid", "autoInc" => "0");
$dalTabletimetracker["trackerid"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_timetracker"] = &$dalTabletimetracker;
?>