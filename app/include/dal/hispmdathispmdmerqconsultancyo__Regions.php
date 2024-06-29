<?php
$dalTableRegions = array();
$dalTableRegions["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "1");
$dalTableRegions["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableRegions["his_strategic_plan"] = array("type"=>16,"varname"=>"his_strategic_plan", "name" => "his_strategic_plan", "autoInc" => "0");
$dalTableRegions["region_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__Regions"] = &$dalTableRegions;
?>