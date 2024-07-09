<?php
$dalTableDigitalHealthApps = array();
$dalTableDigitalHealthApps["app_id"] = array("type"=>3,"varname"=>"app_id", "name" => "app_id", "autoInc" => "1");
$dalTableDigitalHealthApps["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableDigitalHealthApps["standards_met"] = array("type"=>16,"varname"=>"standards_met", "name" => "standards_met", "autoInc" => "0");
$dalTableDigitalHealthApps["app_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__DigitalHealthApps"] = &$dalTableDigitalHealthApps;
?>